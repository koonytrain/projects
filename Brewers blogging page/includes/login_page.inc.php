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
include ('header.html');
include('mysqli_connect.php');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Display the form:
?><h1 align="center">Login</h1>
<form name="fbForm" id="fbForm" action="<?php 

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['email'] != NULL) && ($_POST['pass'] != NULL)){
	echo "login.php"; 
	$submit = true;
	
} else {
	echo "finalproject_allen_kuenstler/includes/login_page.inc.php";
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
	<div align="center"><input type="submit" name="submit" value="Login" /></div>
</form>

<?php include ('footer.html'); ?>