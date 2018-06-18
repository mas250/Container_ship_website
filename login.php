<?php
session_start();
if ( isset($_SESSION['appuser']))
{
header('Location: index.php');  //redirect to index.php
}
else if
( isset($_SESSION['apperror'] ))
{
$error = $_SESSION['apperror'] ;
//Remove session variables
session_unset();
// destroy the session
session_destroy();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <!-- form to register user -->
    <div class= "form">
    <form name="loginForm" action="utils/auth.php" method="post"
    onsubmit="return validateForm()">
    <p>Enter your username:</p>
    <input type="text" name="username" value="">
    <p>Enter your password:</p>
    <input type="password" name="password" value="">
    <input type="submit" value="Submit">
    </form>
  </div>
<a href= "register.html"> Register </a>

  </body>
</html>
