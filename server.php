<?php
  session_start();

  $username = "";
  $email = "";
  $errors = array();

  //connect to the database
   $db = mysqli_connect('sql203.ultimatefreehost.in','ltm_24379903','sudhiultimate','ltm_24379903_nametable');

   //if the register button is clicked
   if(isset($_POST['register']))
   {
     $username = ($_POST['username']);
     $email = ($_POST['email']);
     $password_1 = ($_POST['password_1']);
     $password_2 = ($_POST['password_2']);

     //ensure taht form fields are filled properly
     if(empty($username))
     {
       array_push($errors,"Username is required");
     }
     if(empty($email))
     {
       array_push($errors,"Email is required");
     }
     if(empty($password_1))
     {
       array_push($errors,"Password is required");
     }
     if($password_1 != $password_2)
     {
       array_push($errors,"passwords do not match");
     }

     //if there are no errors, save data to the database
     if(count($errors) == 0)
     {
       $password = $password_1;
      // $password = md5($password_1); encrypt password before storing in database
       $sql = "INSERT INTO users(username, email, password)
                           VALUES('$username','$email','$password')";
       mysqli_query($db,$sql);
       $_SESSION['username'] = $username;
       $_SESSION['success'] = "You are now logged in";
       echo "<h3><font color='green'>Registered Successfully <br> Now Please <a href='login.php'>LOGIN</a></font><h3>";
       // header('location : home.php');  //redirect to homepage
     }
   }

     //log user in from loginpage
     if(isset($_POST['login']))
     {
        $username = ($_POST['username']);
        $password = ($_POST['password']);

        //ensure that form fields are filled properly
        if(empty($username))
        {
          array_push($errors,"Username is required");
        }
        if(empty($password))
        {
          array_push($errors,"Password is required");
        }

        if(count($errors) == 0)
        {
          $password = ($password);
          $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
          $result = mysqli_query($db, $query);
          if(mysqli_num_rows($result) == 1)
          {
             //login users
             $_SESSION['username'] = $username;
             $_SESSION['success'] = "You are logged in";
             header('location: home.php'); //redirect to homepage
          }
          else
          {
              array_push($errors, "Wrong username/password combination");
          }
        }
      }

   //Logout
   if(isset($_GET['logout']))
   {
     session_destroy();
     unset($_SESSION['username']);
     header('location: login.php');
   }
?>
