<?php session_start(); ?>
<html>
<head>

</head>

<body>

<?php

include('includes/header.html');
include('includes/mysqli_connect.php');

$blog_id = mysqli_real_escape_string($dbc, trim($_POST['id']));
$user_id = mysqli_real_escape_string($dbc, trim($_SESSION['user_id']));
$comment = mysqli_real_escape_string($dbc, trim($_POST['comment']));

//SQL inserts to the tables

	$query = "INSERT INTO comments (comment_id, user_id, blog_id, comment, comdate) VALUES (NULL, '$user_id', '$blog_id', '$comment', NOW());";
	echo $query . "<br>";
	$result = mysqli_query($dbc, $query);

	if ($result) {
		echo "<center>Thank you, the comment has been added to the post.</center>";
		} else { 
		echo "There was an error! " . mysqli_error($dbc);
	}

?>

</body>

</html>
<?php
include('includes/footer.html');

?>