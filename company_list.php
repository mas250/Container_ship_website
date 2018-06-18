<?php
require("connection.php");

$sql="SELECT DISTINCT company FROM ships ORDER BY company ASC" ;
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
  // populate dropdown menu
echo '<option value="';
echo $row["company"].'">';
echo $row["company"];
echo'</option>';
}
?>
