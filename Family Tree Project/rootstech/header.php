<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>RootsTech</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">  
<br/>
<header>
<a href="index.php">
<img src="family_tree.png" alt="Family Tree" align="left" width="100" height="100" style="padding: 10px;">
</a>
<font size="10" style="padding-right: 70px">RootsTech</font>
<p style="margin-top: -50px;">

	<div class="reg">
	<a href="login.php">Log In</a>
	<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '| <a href="logout.php">Log Off</a>';
			} ?>
	</div>
</p>	

<nav> 

<a href="register3.php">New User Registration</a><br></br>
<?php
if (isset($_SESSION['FNAME'])) {
		echo "Hello, {$_SESSION['FNAME']}!";
}
?>

</nav>
<br/>
<!--Would like to have these hidden until person is registered or signed in--> 
<p class="tabs">
<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '<button class="button" ><a class="link" href="familytree.php">Your Family Tree</a> </button>';
			} ?> 
<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '<button class="button"><a class="link" href="form1.php">Insert information for Family Tree</a> </button>';
			} ?>  

<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '<button class="button"><a class="link" href="updateform.php">Update Family Tree</a></button>';
			} ?>  
<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '<button class="button"><a class="link" href="tabletest.php">Family Tree Table</a></button>';
			} ?> 
<?php
			if(isset($_SESSION['USER_ID'])) {
			echo '<button class="button"><a class="link" href="deleteform.php">Delete Information</a></button>';
			} ?> 

</p>				
</header>
<br/>
<br/>
<br/>