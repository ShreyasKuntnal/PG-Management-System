<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - HotePayant</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="assets/js/init-alpine.js"></script>
    <?php session_start();?>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="assets/images/login-office-dark.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <a href="index.php"><img src="assets/images/Hôte Payant.png"></a>
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Login
              </h1>
              <form method="post" enctype = "multipart/form-data"  >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>

                <input name="mail" type="email"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="username@gmail.com" required
                   
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input name="pass" id="pass"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password" required
                />
                <label  id="visi" style="color: red; visibility:hidden;">Incorrect Password</label>
              </label>
              <input type="submit" name="login"
              class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              value="Log In">
            </form> 
              <hr class="my-8" />

              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="pages/forgot-password.php"
                >
                  Forgot your password?
                </a>
              </p>
              <p class="mt-1">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="pages/create-account.php"
                >
                  Create account
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      require 'DatabaseConnection/dbcon.php';
      if(isset($_POST['login']))
      {
        $email=$_POST['mail'];
        $pass=$_POST['pass'];
        
        $_SESSION['email']=$email;
        $result1=$conn->query("SELECT * from manager WHERE mng_email='$email'") or die ($conn->error);
        $row1 = $result1->fetch_array();
        $nummerOfrowsOfmng=$result1->num_rows;
        $result2=$conn->query("SELECT * from user WHERE user_email='$email'") or die ($conn->error);
        $row2 = $result2->fetch_array();
        $nummerOfrowsOfuser=$result2->num_rows;

        if($nummerOfrowsOfmng>0)
        {
          if( $row1['mng_pass'] == md5($pass)){
            
            ?><script>window.location='admin/dashman.php'</script><?php
          }
          else{ ?>
          <script>
            var pss=document.getElementById("pass");
            pss.style.border="2px solid red";
            document.getElementById("visi").style.visibility="visible";
          </script>
        <?php  }
        }
        else if($nummerOfrowsOfuser>0){
          if( $row2['user_pass'] == md5($pass)){
            ?> <script>window.location='Dashboard/dashstu2.php'</script><?php
        }
        else{ ?>
        <script>
          var pss=document.getElementById("pass");
          pss.style.border="2px solid red";
          document.getElementById("visi").style.visibility="visible";
        </script>
      <?php  }
        }
      else{
          ?>
          <script type="text/javascript">
          alert('Your account is not registered ');
          window.location='pages/create-account.php';
          </script>
          <?php
        }

      }
    ?>

  </body>
</html>
