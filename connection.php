<?php
//connection data
$servername = "emps-sql.ex.ac.uk";
$username = "mas250";
$password = "3Jhx97";
$database = $username ;

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
else{
//echo  "connected <br />";

}
?>
