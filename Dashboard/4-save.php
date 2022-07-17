<?php
// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"],$_POST['ph_no']); ?>

<script>alert("Your seat is Booked");window.location.href='payment2.php';</script>

