<?php
require('connection.inc.php');
require('functions.inc.php');

$msg='';
if(isset($_POST['submit'])){
  $username=get_safe_value($con,$_POST['username']);
  $password=get_safe_value($con,$_POST['password']);
  $sql="select * from admin_users where username='$username' and password='$password'"; 
  $res=mysqli_query($con,$sql);
  $count=mysqli_num_rows($res); //count of if we are getting any data after executing query 
  if ($count>0) {
       $_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']='$username';
       header('location:categories.php');
       die();
    // code...
  }
  else{
    $msg="please enter correct loging details";
  }

}
?>




<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="submit">
        <div class="signup_link">
          <div class="field_error" style="color: red;">
            <?php 

          echo $msg
               ?></div>
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
