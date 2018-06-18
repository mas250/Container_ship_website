<!DOCTYPE html>
<html>
<head>
<title>Search Box Example 2 - default placeholder text gets cleared on click</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- JAVASCRIPT to clear search text when the field is clicked -->
<script type="text/javascript">
window.onload = function(){
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
				submitbutton.value = '';
			}
		});
	}
}
</script>
<!-- CSS styles for standard search box with placeholder text-->

</style>
</head>
<body>
	<!-- HTML for SEARCH BAR -->

	<body>
    <div class= "form">
    <form name="loginForm" action="utils/auth.php" method="post"
    onsubmit="return validateForm()">
    <p>Enter your username:</p>
    <input type="text" name="username" value="">
    <p>Enter your password:</p>
    <input type="password" name="password" value="">
    <input type="submit" value="Submit">
    </form>
  </div>
	</br></br>
<a href="register.html"> Register Here </a>

</body>
</html>
