<?php session_start(); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forms.css">

</head>
<body>
<?php
include('./includes/header.html');
include('./includes/mysqli_connect.php');

?>
<form name="fbForm" id="fbForm" action="<?php 

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['id'] != NULL) && ($_POST['post'] != NULL)){
	echo "updatehandle.php"; 
	$submit = true;
	
} else {
	echo "updateform.php";
}	
?>" method="post">

	<table id="posttable" width="60%" align="center" cellpadding="3">
	<tr>
		<td colspan="2"><legend>Please enter your updated blog post:</legend></td>
	</tr>
	
	<!-- error message if info is not filled in -->
	<div class="colortext">
	<?php

	if(($_POST['id'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
		echo "<center><strong>Please fill in the Blog ID number!<strong></center></br />";
	}
	if(($_POST['post'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
		echo "<center><strong>Please fill in a new blog post!<strong></center></br />";
	}
	?></div>

	<tr>
		<td>Blog ID Number: </td>
		<td><input type="text" name="id" value="<?php echo $_GET['id'] . $_POST['id'];?>" size="20" maxlength="40" /></td>
	</tr>
	<tr>
		<td>Updated Post: </td>
		<td><textarea name="post" rows="5" cols="40"><?php if(isset($_POST['post']))
	if(isset($_POST['post']))
	{ 
		echo htmlentities($_POST['post'], ENT_QUOTES);
	}
	?></textarea></td>
	</tr>
	
	</table>
	<?php if ($submit) {
	//Make it so i only hit submit once
	echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
	<p align="center"><input type="submit" value="Check & Submit" /></form></p>
	
<?php
include('./includes/footer.html');
?>
</body>
</html>