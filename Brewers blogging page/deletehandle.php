<?php session_start(); ?>
<html>
<head>
	<title>Delete Post Conf</title>
	<link rel="stylesheet" type="text/css" href="forms.css">

</head>
<body>

<?php
include('./includes/header.html');
include('./includes/mysqli_connect.php');

$blog_id = mysqli_real_escape_string($dbc, trim($_POST['id']));

$query = "DELETE FROM blogposts WHERE blogposts.blog_id='$blog_id'";

$result = mysqli_query($dbc, $query); 
echo "<div class='info'>";
if ($result) {
	echo "<center>Sorry to see you remove your post.</center>";
} else {
	echo "Oh no! There was an error: " . mysqli_error($dbc);
}
?>
</div>

<footer>
<?php
include('./includes/footer.html');
?>
</footer>
</br>
</body>
</html>