<?php session_start(); ?>
<html>
<head>

</head>

<body>

<?php

include('includes/header.html');
include('includes/mysqli_connect.php');

$user_id = mysqli_real_escape_string($dbc, trim($_SESSION['user_id']));
$title = mysqli_real_escape_string($dbc, trim($_POST['title']));
$post = mysqli_real_escape_string($dbc, trim($_POST['post']));
$fname = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
$lname = mysqli_real_escape_string($dbc, trim($_POST['last_name']));

//SQL inserts to the tables

$query = "INSERT INTO blogposts (blog_id, user_id, title, post, postdate) 
	VALUES (NULL, '$user_id', '$title', '$post', NOW());";


$result = mysqli_query($dbc, $query);

if ($result) {
	

echo "<center>Thank you, your post has been submitted.</center></br>";

} else {

	echo "There was an error! " . mysqli_error($dbc);

}

?>

</body>

</html>
<?php
include('includes/footer.html');

?>