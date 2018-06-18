<?php
session_start();

require('connection.php') ;

if ( ($_POST["username"]) != "" && ($_POST["password"]) != "")
{
  $username = htmlentities($_POST["username"]) ;
  $password = htmlentities($_POST["password"]) ;
  //Add echo if the username and password are set here
//  echo $username;

  validateUser($conn, $username, $password);
  //call the validateUser function here


}
else
{
  //Add echo if username and password not set here
  header('Location: ../login.php');

}



function validateUser($conn, $username, $password)
{
  //Basic SQL protection
  $username = $conn->real_escape_string($username);

  $sql = "SELECT * FROM users WHERE username = '$username'";

  $result = $conn->query($sql);

  $error = "Username not found in the database";

  if ($result->num_rows > 0)
  {
    // output data of each row

    $_SESSION["apperror"] = $error ;
    while($row = $result->fetch_assoc())
    {
        $hashed_password = $row["password"] ;
        //Check to see if our password is equal to the password the user has entered
        if ($hashed_password === crypt($password, $hashed_password))
        {
        //Add code here if passwords match
        $_SESSION["appuser"] = $username;
        echo "Passwords match, starting session: ". $_SESSION["appuser"] ;
        header('Location: ../index.php');
        }
        else
        {
          //Add code here if passwords do not match
          echo "Incorrect password";
        }
    }

  }
  else
  {
    //Add code here for if username and passwords do not match
    echo $error;
  }
  $conn->close();
}

?>
