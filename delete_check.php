<html>
<body>
  <link rel="stylesheet" href="style_sheet.css">
  <?php
  require('check.php');
  //show naviagtion bar
  echo $loggedIn;	?>

  <div class = "topnav">
    <a href="landing.php" class="nav_text"> Browse ships </a>
    <a href= "index.php" class="nav_text"> Detailed Search </a>
    <a href="add_ship.php" class="nav_text"> Add A Ship </a>
  </div>

</body>
</html>

<?php
$id = $_GET['id'];  //retain id variable passed through URL
echo "<h1>are you sure you want to delete this ship?<br/>";
echo "<a href='delete_ship.php?id=". $id."'>Yes </a></br>";
echo "<a href='landing.php'". $id.">No </a></br></h1>";
?>
