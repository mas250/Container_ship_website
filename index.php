<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="style_sheet.css">
<title>Detailed Search</title>

</style>
</head>
<body>
	<?php
	require('check.php');
	echo $loggedIn;	?>
			<!-- top level naviagtion used thoughout -->
	<div class = "topnav">
		<a href="landing.php" class="nav_text"> Browse ships </a>
		<a href= "index.php" class="nav_text"> Detailed Search </a>
		<a href="add_ship.php" class="nav_text"> Add A Ship </a>
	</div>
	</br></br>
	<div id="tfheader">
		<form  method="post" action="index.php">
		        <input type="text"  class="tftextinput2" name="name"
						size="21" maxlength="120" value="">
            <input type="submit" value="Search Ship Name" >
		</form>
    <form  method="post" action="index.php">
    <input type="number"   name="low"
    placeholder="low" size="21" maxlength="120" value="">


    <form  method="post" action="index.php">
    <input type="number"  class="tftextinput2" name="high"
    placeholder="high" size="21" maxlength="120" value="">
    <input type="submit" value="high" >
    </form>

    <form action="index.php" method = "post">


 <select id="buildlist" action = "company_builder.php" name= "company" >
   <?php require("company_list.php");	//get data for dropdown menu
	 ?>
 </select>
 <input type="submit" value="company Name" >
</form>
	</div>

</body>
</html>

<?php

require('check.php');
require("connection.php") ;
require("return_names.php") ;
require("return_company.php") ;
require("return_capacity.php") ;
require("manage_users.php");

?>
