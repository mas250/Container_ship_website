<?php
require("connection.php") ;
require("check.php");

//get data from the form and store as variables with the same name
$name = htmlentities($_POST["name"]);
$year_built = htmlentities($_POST["year_built"]);
$capacity = htmlentities($_POST["capacity"]);
$builder = htmlentities($_POST["builder"]);
$company = htmlentities($_POST["company"]);
$image = htmlentities($_POST["image"]);
$image = 'images/'.$image;

if ($name != null &&
    $year_built != null &&
    $capacity != null &&  //check all data fields have
    $builder != null &&   //been completed
    $company != null &&
    $image != null) {

      $sql = "INSERT INTO ships( name , year_built, capacity, builder, company, image)
      VALUES ( '$name' , '$year_built', '$capacity', '$builder', '$company', '$image')" ;

      if ($conn->query($sql) === TRUE)
      { //success message
          echo "New record created successfully <br />";
          echo '<a href="landing.php"> Browse ships </a>';
        }
      else {
      echo "error adding entry";
            }
    }

    else{
echo "all fields must be completed";

}

?>
<!DOCTYPE html>
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
<!-- form to add data  -->
<form method="post" action="add_ship.php">

    <h1><legend>Add a new ship to the catalog</legend></h1>
    <br>
    <br>Ship name:<br>
    <input type="text" name="name" >
    <br>
    Year Built:<br>
    <input type="number" name="year_built" >
    <br>
    Capacity:<br>
    <input type="number" name="capacity" >
    <br>
    Ship Builder:<br>
    <input type="text" name="builder" >
    <br>
    Operating Company:<br>
    <input type="text" name="company" >
    <br>
    Image Name:<br>
    <input type="text" name="image" placeholder="filename of picture in images" >
    <br>

    <br><br>
    <input type="submit" value="Submit">

</form>


</body>
</html>
