<html>
<body>
  <link rel="stylesheet" href="style_sheet.css">
  <?php
  require('check.php');

  echo $loggedIn;	?>
  <!-- top level navigation -->
  <div class = "topnav">
    <a href="landing.php" class="nav_text"> Browse ships </a>
    <a href= "index.php" class="nav_text"> Detailed Search </a>
    <a href="add_ship.php" class="nav_text"> Add A Ship </a>
  </div>

</body>
</html>

<?php
require("connection.php") ;
require("check.php");

//variables passed from form
$id = htmlentities($_POST["id"]);
$name = htmlentities($_POST["name"]);
$year_built = htmlentities($_POST["year_built"]);
$capacity = htmlentities($_POST["capacity"]);
$builder = htmlentities($_POST["builder"]);
$company = htmlentities($_POST["company"]);
$image = htmlentities($_POST["image"]);
$image = 'images/'.$image;


if ($id != null){ //insure id is given
  if($name != null){  //update as necessary
    $sql="UPDATE ships SET name = '$name' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
  if($year_built != null){
    $sql="UPDATE ships SET year_built = '$year_built' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
  if($capacity != null){
    $sql="UPDATE ships SET capacity = '$capacity' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
  if($builder != null){
    $sql="UPDATE ships SET builder = '$builder' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
  if($company != null){
    $sql="UPDATE ships SET company = '$company' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
  if($image != null){
    $sql="UPDATE ships SET image = '$image' WHERE id = '$id'" ;
    $result = $conn->query($sql);
                    }
 }


?>
<!DOCTYPE html>
<html>
<body>

<!-- form for user to submit data -->
<form method="post" action="edit_ship.php">
    <h1><br>Ship ID:<br></h1>
    <input type="text" name="id" placeholder = 'Enter ships id to change'>
    <br>
    <h1><br>Ship name:<br></h1>
    <input type="text" name="name" >
    <h1><br>Year Built:<br></h1>
    <input type="number" name="year_built" >
    <h1><br>Capacity:<br></h1>
    <input type="number" name="capacity" >
    <h1><br>Ship Builder:<br></h1>
    <input type="text" name="builder" >
    <h1><br>Operating Company:<br></h1>
    <input type="text" name="company" >
    <h1><br>Image:<br></h1>
    <input type="text" name="image" >
    <br>

    <br><br>
    <input type="submit" value="Submit">

</form>


</body>
</html>
