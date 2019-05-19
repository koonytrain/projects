<?php
//Create Session
session_start();
//header
$page_title = 'User Page';
include('./includes/header.html');

//If a user name is entered display login mesage
	if (isset($_SESSION['first_name'])) {
		echo "</br>{$_SESSION['first_name']}, you currently logged in as the admin user. Lets get rockin with the Brew Crew!!!";
}
?>
<html>
<h1>Allen K needs to continue to work on improving this website so that the users can leave comments or feedback!</h1>
</br>
<h2>Baseball season is here so he must hurry and finish the website already!!!!</h2>



</body>
<?php

//footer
include('./includes/footer.html');
?>
</html>