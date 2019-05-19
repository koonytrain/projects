<?php session_start(); ?>
<html>
<head>
	<title>Create Comment</title>
	<link rel="stylesheet" type="text/css" href="includes/forms.css">
<style>
body {
	width: 80%;
	margin: auto;
}

</style>

</head>
<body>

<div class="info" align="center">
<?php
include('includes/header.html');
include('includes/mysqli_connect.php');
?>

<form action="<?php if(($errors == NULL) && ($_SERVER['REQUEST_METHOD'] === 'POST')) {
	echo "createcomment.php";
	$submit = true;
} else {
	echo "leavecomments.php"; 
}//Returns a thank you page
?>" method="post">

Enter Comment: </br>
<textarea name="post" cols="40" rows="5"> <?php echo $_POST['comment']; ?> </textarea>

</br></br>

<input type="submit" name="submit" value="Submit Post" />
</form></div>

<footer>
<?php
include('includes/footer.html');
?>
</footer>
</br>
</body>
</html>