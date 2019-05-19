<?php session_start(); ?>
<html>
<head>
	<title>Create Comment</title>
	<link rel="stylesheet" type="text/css" href="includes/forms.css">
</head>

<body>

<?php
//header
include('includes/header.html');
include('includes/mysqli_connect.php');
?>

<form name="fbForm" id="fbForm" action=<?php 
if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['comment'] != NULL) && ($_POST['id'] != NULL)){
	echo "commenthandle.php"; 
	$submit = true;
	
} else {
	echo "createcomment.php";
}?> method="post">

<div class="colortext" align="center">
<?php

if(($_POST['id'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please enter the blog ID you are making a comment for!<strong></br />";
}
if(($_POST['comment'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please enter a comment to the post!<strong></br />";
}
?></div>

<table id="posttable" width="40%" border="1" align="center" cellpadding="3">
	<tr>
		<td>Blog ID Number: </td>
		<td><input type="text" name="id" value="<?php echo $_GET['id'] . $_POST['id'];?>" size="20" maxlength="40" /></td>
	</tr>
	<tr>
		<td>Enter a Comment: </td>
		<td><textarea name="comment" cols="40" rows="5" placeholder="Comments here"><?php if(isset($_POST['comment']))
	{ 
		echo htmlentities($_POST['comment'], ENT_QUOTES);
	}
	?></textarea></td>
	</tr>

</table>
<?php if ($submit) {
	//Make it so i only hit submit once
	echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
<p align="center"><input type="submit" name="submit" value="Submit" /></p>
</form>

</body>

</html>
<?php
include('includes/footer.html');

?>