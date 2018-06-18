<?php
     require( 'connection.php' );
     require('check.php');
     echo $loggedIn ;
     echo '<div class = "topnav"><a href="landing.php" class="nav_text"> Browse ships</a>';
     echo '<a href= "index.php"> Detailed Search </a>';
     echo '<a href="add_ship.php"> Add A Ship </a></br></div>';
     $sql = "SELECT * FROM ships;";
     $result = $conn -> query( $sql );

     if ($result->num_rows > 0)
     {
       echo " <h1>Ship name: <br /> </h1>";
     while($row = $result->fetch_assoc()) {
    // set link as ship name and pass associated unique id
     echo "<ul><a href='ship_detail.php?id="  . $row['id'] . " ' >" .$row['name'] ."   </a><br /></ul>";
     }
     }
     else {
       echo "no data returned";
     }
     ?>
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
