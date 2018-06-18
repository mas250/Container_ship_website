<?php
require("connection.php") ;
$name = htmlentities($_POST["name"]);

if ($name != null){
  $sql="SELECT * FROM ships WHERE name = '$name'" ;
  $result = $conn->query($sql);
if ($result->num_rows > 0){

  while ($row = $result->fetch_assoc()){

 //echo '<br />Primary key: ' .$row['id'];
 echo "<ul><br/> <a href='ship_detail.php?id="  . $row['id'] . " ' >" .$row['name'] ."   </a><br>";
//echo '<br /> Year Built: '.$row['year_built'];
//echo '<br /> Capacity: '.$row['capacity'];
// echo '<br /> Ship Builder: '.$row['builder'];
// echo '<br /> Operating Company: '.$row['company'];
 echo "<a href='ship_detail.php?id="  . $row['id'] . " ' >"  ."<br /><img src =". $row['image'].' width="640px" height="427px"'."/></ul>" ;
}
}


else{
  echo "No data supplied";
}
}

?>
