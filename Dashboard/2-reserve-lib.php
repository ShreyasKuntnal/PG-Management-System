<?php
class Reserve {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = null;
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) HELPER FUNCTION - RUN SQL QUERY
  function query ($sql, $data=null) {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  // (D) GET SEATS FOR GIVEN SESSION
  function get ($sessid) {
    $this->query(
      "SELECT sa.`seat_id`, r.`user_id` FROM `seats` sa
       LEFT JOIN `sessions` se USING (`room_id`)
       LEFT JOIN `bookings` r USING(`seat_id`)
       WHERE se.`session_id`=?
       ORDER BY sa.`seat_id`",
      [$sessid]
    );
    $sess = $this->stmt->fetchAll();
    return $sess;
  }

  // (E) SAVE RESERVATION
  function save ($sessid, $userid, $seats,$ph) {
    $sql = "INSERT INTO `bookings` (`session_id`, `seat_id`, `user_id`) VALUES ";
    $data = [];
    foreach ($seats as $seat) {
      $sql .= "(?,?,?),";
      $data[] = $sessid;
      $data[] = $seat;
      $data[] = $userid;
    }
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y');
    $sql = substr($sql, 0, -1);
    $this->query($sql, $data);
    $this->query("INSERT into user_details values(' ','$userid','$sessid','$ph','$date','Unpayed')");
    $this->query("UPDATE user set book_status='booked' where user_id='$userid'");
    return true;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "pg_mng");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW CATEGORY OBJECT
$_RSV = new Reserve();
