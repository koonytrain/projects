<?php session_start(); ?>
<html>
<head>
	<title>Delete Post</title>
	<link rel="stylesheet" type="text/css" href="includes/forms.css">
</head>
<body>
<?php
include('./includes/header.html');
include('./includes/mysqli_connect.php');

?>
<!--Update form fields-->
<form name="fbForm" id="fbForm" action="<?php 

if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['id'] != NULL)){
	echo "deletehandle.php"; 
	$submit = true;
} else {
	echo "deleteform.php";
}	
?>" method="post">

<!--table for deleting post-->
<table id="posttable" width="40%" border="1" align="center" cellpadding="3">
<tr>
	<td colspan="2">Remove a blog post here:
<!--ID field with error message-->	
<div class="colortext">
<?php

if(($_POST['id'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the Blog ID number you would like to remove!<strong></br />";
}
?></div></td>
<tr>
	<td>ID: </td>
	<td><input class="info" type="text" name="id" value="<?php echo $_GET['id'] . $_POST['id']?>" size="20" maxlength="40" /></td>
</tr>
</table>

<?php if ($submit) {
	//Make it so i only hit submit once
echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
<p align="center"><input type="submit" value="Check & Submit" /></p>
</form>
<?php
include('./includes/footer.html');
?>
</body>
</html>