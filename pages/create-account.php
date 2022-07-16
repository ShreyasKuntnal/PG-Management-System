<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create account - HotePayant Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
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
              src="../assets/images/create-account-office-dark.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <a href="../../../index"><img src="../assets/images/Hôte Payant.png"></a>
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Create account
              </h1>
              <form method="post" enctype = "multipart/form-data">
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">
                    Account Type
                  </span>
                  <select name="type"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none dark:text-gray-300 focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  >
                    <option value="manager">Manager</option>
                    <!--<option>Newbie</option>-->
                    <option value="user">Student</option>
                  </select>
                </label>
                
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input name="name"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Name" required
                />

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input name="mail"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="username@gmail.com" required
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input name="pass1"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password" required />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Confirm password
                </span>
                <input name="pass2"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password" required
                />
              </label>

              <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                  <input
                    type="checkbox"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    required
                  />
                  <span class="ml-2">
                    I agree to the
                    <span class="underline">privacy policy</span>
                  </span>
                </label>
              </div>
              <input type="submit" name="submit"
              class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
               value="Create account">
              <input 
              class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              type="reset" value="Reset">
          </form>
              <hr class="my-8" />
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="login.php"
                >
                  Already have an account? Login
                </a>
              </p>
              <?php  
              require '../DatabaseConnection/dbcon.php';
              if(isset($_POST['submit']))
              {
                $type=$_POST['type'];
                $name=$_POST['name'];
                $email=$_POST['mail'];
                $pass1=$_POST['pass1'];
                $pass2=$_POST['pass2'];
                if($type=='manager')
                {
                  if ($pass1 == $pass2) {
                    $conn->query("INSERT INTO manager(mng_id,mng_name,mng_pass,mng_email) values(' ','$name','".md5($pass1)."','$email')") or die($conn->error);
                    //$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted')");
                  ?>
                          <script>
                          alert( 'Successfully Registered');
                           window.location='login.php';
                          </script>
                        <?php
                  }else{
                    ?>
                          <script>
                          alert( 'Your Passwords Did Not Match');
                           window.location='create-account.php';
                          </script>
                        <?php
                  }
                }
                else{
                  if ($pass1 == $pass2) {
                    $conn->query("INSERT INTO user values(' '','$name','$email','".md5($pass1)."')")or die($conn->error);
                    //$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted')");
                  ?>
                          <script>
                          alert( 'Successfully Registered');
                           window.location='login.php';
                          </script>
                        <?php
                  }else{
                    ?>
                          <script>
                          alert( 'Your Passwords Did Not Match');
                           window.location='create-account.php';
                          </script>
                        <?php
                  }
                }
                 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
