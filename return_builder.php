<?php
$builder = htmlentities($_POST["builder"]);

if ($builder != null){
  $sql="SELECT * FROM ships WHERE builder = '$builder' ORDER BY year_built DESC" ;
  $result = $conn->query($sql);

if ($result->num_rows > 0){

  while ($row = $result->fetch_assoc()){
//return all data which maches the query
 echo '<br /> Primary key: ' .$row['id'];
 echo "<br/> <a href='ship_detail.php?id="  . $row['id'] . " ' >" .$row['name'] ."   </a>";
echo '<br /> Year Built: '.$row['year_built'];
echo '<br /> Capacity: '.$row['capacity'];
echo '<br /> Ship Builder: '.$row['builder'];
echo '<br /> Operating Company: '.$row['company'];
 echo "<a href='ship_detail.php?id="  . $row['id'] . " ' >"  ."<br /><img src =". $row['image'].' width="640px" height="427px"'."/>" ;
  }
}
else{
  echo "No data supplied";
  }
}
?>
