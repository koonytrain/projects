<?php session_start(); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forms.css">
	<title>Update Post Conf</title>
</head>
<body>
<?php
include('./includes/header.html');
include('./includes/mysqli_connect.php');


$blog_id = mysqli_real_escape_string($dbc, trim($_POST['id']));
$post = mysqli_real_escape_string($dbc, trim($_POST['post']));


$query = "UPDATE blogposts SET post = '$post' WHERE blog_id = '$blog_id'";


$result = mysqli_query($dbc, $query); 

if ($result) {
	echo "<center>Thank you for your updated post!</center>";
} else {
	echo "Oh no! There was an error: " . mysqli_error($dbc);
}

include('./includes/footer.html');
?>
</br>
</body>
</html>