<?php
session_start();
$session = $_SESSION['appuser'] ; //store username as variable
if ( isset($session) && $session != '')
{
  $loggedIn = "<a href='logout.php'>Logout ". $session ."</a>" ;
}

else
{
header('Location: login.php');  //redirect to this page
}

 ?>
