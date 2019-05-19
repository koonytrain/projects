<html>
<head>
	<title>Leave Comments</title>
	<link rel="stylesheet" type="text/css" href="assignment9.css">
</head>
<body>
<h1 align="center">Million Dollar Wish</h1>
<?php
include('header.php');
include('mysqli_connect.php');

?>
<!--form data field-->
<form name="fbForm" id="fbForm" action="<?php 

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['fname'] != NULL) && ($_POST['lname'] != NULL) && ($_POST['email'] != NULL) && ($_POST['comment'] != NULL)){
	echo "leavehandle.php"; 
	$submit = true;
	
} else {
	echo "leaveform.php";
}	
?>" method="post">

	<fieldset><p>Please describe what you would do if you were given $1 million:</p>
<!--First name field with error message-->
<div class="colortext">
<?php

if(($_POST['fname'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in your first name!<strong></br />";
}
?></div>	
	<p><label>First Name: <input class="info" type="text" name="fname" value="<?php echo $_POST['fname']?>" size="20" maxlength="40"/></label></p>
<!--Last name field with error message-->
<div class="colortext">
<?php

if(($_POST['lname'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in your last name!<strong></br />";
}
?></div>	
	<p><label>Last Name: <input class="info" type="text" name="lname" value="<?php echo $_POST['lname']?>" size="20" maxlength="40" /></label></p>
<!--Email address field with error message-->
<div class="colortext">
<?php

if(($_POST['email'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in a valid email address!<strong></br />";
}
?></div>	
	<p><label>Email Address: <input class="info" type="text" name="email" value="<?php echo $_POST['email']?>" size="20" maxlength="40" /></label></p>
<!--Comment field with error message-->	
<div class="colortext">
<?php

if(($_POST['comment'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill out what you would do with $1 million!<strong></br />";
}
?></div>
	<p><label>What would you do with the money? &nbsp;&nbsp;<textarea class="info" name="comment" rows="2" cols="100" placeholder="Comments here"><?php if(isset($_POST['comment']))
	{ 
		echo htmlentities($_POST['comment'], ENT_QUOTES);
	}
	?></textarea></label></p>
	
	</fieldset>
	
<?php if ($submit) {
	//Make it so i only hit submit once
echo "<script>document.getElementById('fbForm').submit();</script> ";}?>	
<p align="center"><input type="submit" value="Check & Submit" /></p>
</form>
<?php
include('footer.php');
?>
</body>
</html>