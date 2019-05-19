<?php session_start(); ?>
<html>
<head>
	<title>Create Post</title>
	<link rel="stylesheet" type="text/css" href="includes/forms.css">

</head>
<body>


<?php
include('includes/header.html');
include('includes/mysqli_connect.php');
?>

<div class="colortext" align="center">
<?php

if(($_POST['title'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please add a title to your blog post!<strong></br />";
}
if(($_POST['post'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please enter a message to your post!<strong></br />";
}
?></div>

<form name="fbForm" id="fbForm" action="<?php
 if(($errors == NULL) && ($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['title'] != NULL) && ($_POST['post'] != NULL)) {
	echo "createhandle.php";
	$submit = true;
} else {
	echo "createpost.php"; 
}//Returns a thank you page
?>" method="post">
<table id="posttable" width="60%" align="center" cellpadding="3">
	<tr>
		<td>Title of the Blog Post: </td>
		<td><input name="title" type="text" size="20" value="<?php echo $_POST['title']; ?>"/></td>
	</tr>
	<tr>
		<td>Enter information into your blog post: </td>
		<td><textarea name="post" cols="40" rows="5" placeholder="Post here"><?php if(isset($_POST['post']))
	{ 
		echo htmlentities($_POST['post'], ENT_QUOTES);
	}
	?></textarea></td>
	</tr>
</table>
<?php if ($submit) {
	//Make it so i only hit submit once
echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
<p align="center"><input type="submit" name="submit" value="Submit Post" /></p>
</form>

<footer>
<?php
include('includes/footer.html');
?>
</footer>
</br>
</body>
</html>