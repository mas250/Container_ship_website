<html>
<body>
  <link rel="stylesheet" href="style_sheet.css">
  <?php
  require('check.php');
  echo $loggedIn;	?>
  <!-- top level naviagtion -->

  <div class = "topnav">
    <a href="landing.php" class="nav_text"> Browse ships </a>
    <a href= "index.php" class="nav_text"> Detailed Search </a>
    <a href="add_ship.php" class="nav_text"> Add A Ship </a>
  </div>

</body>
</html>
<?php
require("connection.php") ;

$id = $_GET['id'];  //retain id passed via URL

$sql = " DELETE FROM ships WHERE id = '$id'";
$result = $conn->query($sql);

echo "<h1>ship deleted<br>";
echo '<a href="landing.php"> Browse ships </a></h1>';
?>
