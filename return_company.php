<?php
$company = htmlentities($_POST["company"]);
if ($company != null){

  $sql="SELECT * FROM ships WHERE company = '$company' ORDER BY year_built DESC" ;
  $result = $conn->query($sql);
if ($result->num_rows > 0){

  while ($row = $result->fetch_assoc()){

 //echo '<br /> Primary key: ' .$row['id'];
 echo "<ul><a href='ship_detail.php?id="  . $row['id'] . " ' >" .$row['name'] ."   </a>";
echo '<br /> Year Built: '.$row['year_built'];
//echo '<br /> Capacity: '.$row['capacity'];
echo '<br /> Ship Builder: '.$row['builder'];
echo '<br/> Operating Company: '.$row['company'];
 echo "<a href='ship_detail.php?id="  . $row['id'] . " ' >"  ."<img src =". $row['image'].' width="640px" height="427px"'."/></ul>" ;
}
}


else{
  echo "No data supplied";
}
}
?>
