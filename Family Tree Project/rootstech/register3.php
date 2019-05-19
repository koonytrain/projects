<?php 

include('header.php');
include('mysqli2.php');
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('mysqli2.php'); 
		
	$errors = array(); 
	

	if (empty($_POST['FNAME'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['FNAME']));
	}
	

	if (empty($_POST['LNAME'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['LNAME']));
	}
	

	if (empty($_POST['EMAIL'])) {
		$errors[] = 'You forgot to enter your user name.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['EMAIL']));
	}
	

	if (!empty($_POST['PASSWORD1'])) {
		if ($_POST['PASSWORD1'] != $_POST['PASSWORD2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['PASSWORD1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	if (empty($errors)) { 
	

		$q = "INSERT INTO USER (FNAME, LNAME, EMAIL, PASSWORD, DATE) VALUES ('$fn', '$ln', '$e', '$p', NOW() )";		
		$r = @mysqli_query ($dbc, $q); 
		if ($r) {
		

			echo '<h1>Thank you!</h1>
		<p>Thank You, you are now registered. Please sign in to continue!</p><p><br /></p>';	
		
		} else { 
			
			
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} 
		
		mysqli_close($dbc); 

		
		include ('footer.php'); 
		exit();
		
	} else { 
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} 
	
	mysqli_close($dbc); 

} 
?>
<!-- This is a file used from INFO 440 - 201 !-->
<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>

<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>


<h1>Register</h1>
<form action="register3.php" method="post">
<fieldset id="insinfo"><legend> Please enter your information </legend>
<table align="center" cellspacing="5" cellpadding="5" width="75%">
	<tr><td><label>First Name: </label></td><td><input type="text" name="FNAME" size="20" maxlength="40" value="<?php if (isset($_POST['FNAME'])) echo $_POST['FNAME']; ?>" /></td></tr>
	<tr><td><label>Last Name: </label></td><td><input type="text" name="LNAME" size="20" maxlength="40" value="<?php if (isset($_POST['LNAME'])) echo $_POST['LNAME']; ?>" /></td></tr>
	<tr><td><label>Email: </label></td><td><input type="text" name="EMAIL" size="20" maxlength="40" value="<?php if (isset($_POST['EMAIL'])) echo $_POST['EMAIL']; ?>"  /> </td></tr>
	<tr><td><label>Password: </label></td><td><input type="password" name="PASSWORD1" size="20" maxlength="40" value="<?php if (isset($_POST['PASSWORD1'])) echo $_POST['PASSWORD1']; ?>"  /></td></tr>
	<tr><td><label>Confirm Password: </label></td><td><input type="password" name="PASSWORD2" size="20" maxlength="40" value="<?php if (isset($_POST['PASSWORD2'])) echo $_POST['PASSWORD2']; ?>"  /></td></tr>
	</table>
</fieldset>
<p><input type="submit" name="submit" value="Register" /></p>

</form>

</body>
</html>
<?php
include('footer.php');

?>