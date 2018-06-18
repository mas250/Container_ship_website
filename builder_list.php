<?php
require("connection.php");

$sql="SELECT DISTINCT builder FROM ships ORDER BY builder ASC" ;
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
  // populate dropdown menu
echo '<option value="';
echo $row["builder"].'">';
echo $row["builder"];
echo'</option>';
}
?>
