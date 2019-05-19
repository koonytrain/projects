<?php
//Create Session
session_start(); ?>
<head>
	<link rel="stylesheet" type="text/css" href="forms.css">
</head>
<?php # Script 12.1 - login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';
include ('./includes/header.html');
include('./includes/mysqli_connect.php');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error"><center>The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</center></p>';
}
?>
<!--Validation error messages: -->
<div class="colortext" align="center">
<?php

if(($_POST['email'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in your email address!<strong></br />";
}
if(($_POST['pass'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please enter your password!<strong></br />";
}
?></div>

<!--Display the form and table: -->
<h1 align="center">Login</h1>
<form name="fbForm" id="fbForm" action="<?php 

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['email'] != NULL) && ($_POST['pass'] != NULL)){
	echo "login.php"; 
	$submit = true;
	
} else {
	echo "login_page.inc.php";
}	
?>" method="post">
<table id="posttable" width="40%" border="1" align="center" cellpadding="3">
	<tr>
		<td>Email Address: </td>
		<td><input type="text" name="email" value="<?php echo $_POST['email']?>" size="20" maxlength="60" /> </td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="pass" value="<?php echo $_POST['pass']?>" size="20" maxlength="20" /></td>
	</tr>
</table></br></br>
	<?php if ($submit) {
	//Make it so i only hit submit once
	echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
	<div align="center"><input type="submit" name="submit" value="Login" /></div>
</form>

<?php include ('./includes/footer.html'); ?>