<?php
//Create Session
session_start(); ?>
<head>
	<link rel="stylesheet" type="text/css" href="forms.css">
</head>

<?php
//header
$page_title = 'Brewers Fan Page';
include('./includes/header.html');
include('./includes/mysqli_connect.php');

$blog_id = $_GET['id'];

//If a user name is entered display login mesage
	if (isset($_SESSION['first_name'])) {
		echo "</br><center>You currently logged in as {$_SESSION['first_name']}. Welcome to our website!</center></br>";
}

$query1 = "SELECT * FROM blogposts WHERE blog_id=$blog_id";

$result1 = mysqli_query($dbc, $query1);
/*================
Post Table
================*/
while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
		echo '<table id="posttable" width="70%" border="1" align="center" cellpadding="3">
		<tr>
			<td colspan="4"><div align="center"><strong>' .$row1['title'] . '</strong></div></td>
		</tr>
		<tr>
			<td width="250">Post Date: ' . $row1['postdate'] . '</td>
			<td rowspan="5">' . $row1['post'] . '</td>
		<tr/>

		<tr>';
		if (isset($_SESSION['first_name'])) {
			if ($_SESSION['user_id'] == 4) {
			echo "<td><a href='updateform.php?id=" . $row1['blog_id'] . "'>Update Post</a> | <a href='deleteform.php?id=" . $row1['blog_id'] . "'>Delete Post</a> | ID: " . $row1['blog_id'] . "</td>
		</tr>";}}
		echo '</tr></table>
		</br>
		</br>';
	}
/*================
Post Table
================*/	
echo "<div align=\"center\"><h2>Comments to Fan Posts</h2></div></br>";
/*================
create comments and back link
================*/

echo "<div align=\"center\"><button class='button'><a class='link' href='index.php'>Back to Home Page</a></button> | <button class='button'><a class='link' href='createcomment.php?id=$blog_id'>Create Comment</a></button></div></br>";

/*================
Create comments and back Link
================*/

/*================
Comments Table
================*/


$query = "SELECT * FROM `comments` JOIN users USING (user_id) WHERE blog_id = $blog_id";

$result = mysqli_query($dbc, $query);
mysqli_close($dbc);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<table id="posttable" width="70%" border="1" align="center" cellpadding="3">
	<tr>
		<td colspan="4"><div align="center"><strong>' .$row['title'] . '</strong></div></td>
	</tr>
	<tr>
		<td width="250">' . $row['comdate'] . '</td>
		<td rowspan="5">' . $row['comment'] . '</td>
	</tr>
	<tr>
		<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>
	</tr>
	<tr>
		<td> Comment ID: ' . $row['comment_id'] . '</td>
	</tr>
	</table>
	</br>
	</br>';
}
/*================
Comments Table
================*/

?>



<footer>

<?php 
echo '</br></br></center>';
//footer
include('./includes/footer.html');
?>
</footer>
</html>