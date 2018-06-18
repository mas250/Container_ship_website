<?php
//Add your require statement here
require("connection.php") ;
$sql="SELECT * FROM ships" ;
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) {
echo "id: ".$row["id"]. " Ship name ". $row["name"]." Year Built: ".$row["year_built"]." Capacity: ".$row["capacity"]." Ship Builder: ".$row["builder"]."Operating Company: ".$row["company"]."<br />";

}
}
else {
  echo "no data returned";
}



?>
