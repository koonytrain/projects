<html>
<head>
	<title>Leave Comment Conf</title>
	<link rel="stylesheet" type="text/css" href="assignment9.css">
<style>
body {
	width: 80%;
	margin: auto;
}

</style>

</head>
<body>
<h1 align="center">Milwaukee Brewers Blog!</h1>
<div class="info">
<?php
include('include/header.html');
include('include/mysqli_connect.php');

$user_id = mysqli_real_escape_string($dbc, trim($_SESSION['user_id']));
$title = mysqli_real_escape_string($dbc, trim($_POST['title']));
$post = mysqli_real_escape_string($dbc, trim($_POST['post']));


	if ((isset($title) && ($title != "")) && (isset($post) && ($post != ""))) {
	$query = "INSERT INTO blogposts (blog_id, user_id, title, post, postdate) 
	VALUES (NULL, '$user_id', '$title', '$post', NOW());";

	//INSERT query into database
	$result = mysqli_query($dbc, $query); 

	// using an if statement to notify you of an error
	if ($result) {
		echo "Thank you " . $user_id . ", your blog post has been submitted.";
		$title = NULL;
		$post = NULL;
		} else {
		echo "Oh no! There was an error: " . mysqli_error($dbc);
		}
	}

if($errors != NULL) {
		echo '<h1>Error!</h1> <p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) {
			echo " - $msg</br>\n";
		}
		echo '</p><p>Please try again.</p></br></br>';
}
mysqli_close($dbc);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); //Starts error array.
	//checks for title and post information:
	if($title == NULL) {
		$errors[] = 'You forgot to enter a post title.';
	}
	if($post == NULL) {
		$errors[] = 'You forgot to enter a post.';
	}
}
?>

<form action="<?php echo basename(__FILE__); ?>" method="post">
Title of the Blog Post: <input name="title" type="text" size="20" value="<?php echo $_POST['title']; ?>"/>

</br></br>

Enter information into your blog post: </br>
<textarea name="post" cols="40" rows="5"> <?php echo $_POST['post']; ?> </textarea>

</br></br>

<input type="submit" name="submit" value="Submit Post" />
</form></div>

<footer>
<?php
include('include/footer.html');
?>
</footer>
</br>
</body>
</html>