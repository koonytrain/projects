<?php # Script 12.1 - login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';
include ('header.php');

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
?><h1>Login</h1>
<form action="login.php" method="post">
<fieldset id="insinfo"><legend></legend>
<table align="center" cellspacing="7" cellpadding="15" width="75%">
	<tr><td><label>Email Address: </label></td><td><input type="text" name="EMAIL" size="20" maxlength="60" /> </td></tr> 
	<tr><td></td></tr>
	<tr><td><label>Password: </label></td><td><input type="PASSWORD" name="PASSWORD" size="20" maxlength="20" /></td></tr> 
	</table>
	</fieldset>
<p align="center"><input type="submit" name="submit" value="Login" /></p>
</form>

<?php include ('footer.php'); ?>