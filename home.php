<?php include('server.php');

//if user is not logged in, they cannot access this page
if(empty($_SESSION['username']))
{
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Home Page</title>
    <style>
      * {
        margin : 0px;
        padding : 0px;
      }
      body {
        font-size : 120%;
        background : #F8F8FF;
      }
      .header {
        width : 30%;
        margin : 50px auto 0px;
        color : white;
        background : #5F9EA0;
        text-align : center;
        border : 1px solid #B0C4DE;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 20px;
      }
      form, .content {
        width : 30%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 10px;
      }
      .input-group {
        margin: 10px 0px 10px 0px;
      }
      .input-group label {
        display: block;
        text-align: left;
        margin: 3px;
      }
      .input-group input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
      }
      .btn {
        padding: 10px;
        font-size: 15px;
        color: white;
        background: #5F9EA0;
        border: none;
        border-radius: 5px;
      }
      .success {
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h2>Home Page</h2>
    </div>

      <div class="content">
        <?php if(isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
              ?>
            </h3>
         </div>
    <?php endif ?>

    <?php if(isset($_SESSION['username'])): ?>
      <p> Welcome <strong> <?php echo $_SESSION['username']; ?> !</strong></p>
      <br> 
      <a href=""> My Profile </a>
      <br>
      <a href=""> Attendance </a>
      <br>
      <a href=""> Payroll </a>
      <br>
      <a href=""> Project </a>
      <br> <br> <br>
      <p> <a href="home.php?logout='1' " style="color: red;"> Logout </a> </p>
       <?php endif ?>
    </div>

  </body>
</html>
