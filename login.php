<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title> LOGIN </title>
    <style>
      * {
        margin : 0px;
        padding : 0px;
      }
      body {
        font-size : 120%;
        background-color : skyblue;
        background-image : url(payroll2.jpg);
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
      <h2>EMPLOYEE LOGIN</h2>
    </div>

    <form method="post" action="login.php">

      <!-- display validation errors here -->
         <?php include('errors.php'); ?>

      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>

      <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
      </p>
    </form>
  </body>
</html>
