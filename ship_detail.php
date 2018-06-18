<html>
<body>
  <link rel="stylesheet" href="style_sheet.css">
  <?php
  require('check.php');
  echo $loggedIn;	?>
  <!-- HTML for SEARCH BAR -->
  <div class = "topnav">
    <a href="landing.php" class="nav_text"> Browse ships </a>

    <a href= "index.php" class="nav_text"> Detailed Search </a>
    <a href="add_ship.php" class="nav_text"> Add A Ship </a>


  </div>
</body>
</html>
<?php
//Add your require statement here
require("connection.php") ;
//require("error_check.php");
require("check.php");


$id = $_GET['id'];
$sql="SELECT * FROM ships WHERE id = '$id'";
$result = $conn->query($sql);
//echo 'test';



if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) {

  echo '<ul><br />Primary key: ' .$row['id'];
 echo '<br /> Ship Name: ' .$row['name'];
 echo '<br /> Year Built: '.$row['year_built'];
 echo '<br /> Capacity: '.$row['capacity'];
 echo '<br /> Ship Builder: '.$row['builder'];
 echo '<br /> Operating Company: '.$row['company'];
  echo "<br /><img src =". $row['image'].' width="640px" height="427px"'."/></ul>" ;

}
}
else {
  echo "no data returned";
}
// echo '</br><a href= "edit_ship.html"> Edit Ship </a>'."<br /><br />";
echo "<h1><a href='edit_ship.php?id="  . $id . " ' >Edit Ships   </a><br /></h1>";
echo "<h1><a href='delete_check.php?id=". $id."'>Delete Ship </a></br></h1>";
?>
