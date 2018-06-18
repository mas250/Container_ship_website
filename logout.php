<?php

session_start();
//Remove session variables
session_unset();
// destroy the session
session_destroy();

header('Location: login.php');

?>
