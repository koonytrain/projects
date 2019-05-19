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


//If a user name is entered display login mesage
	if (isset($_SESSION['first_name'])) {
		echo "</br><center>You currently logged in as {$_SESSION['first_name']}. Welcome to our website!</center></br>";
}


/*================
PAGINATION
================*/
// Number of records to show per page:
$display = 3;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(blog_id) FROM blogposts";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

/*================
PAGINATION
================*/
/*================
Sorting
================*/

// Default is by posting date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'postdate';

// Determine the sorting order:
switch ($sort) {
	case 'titleasc':
		$order_by = 'title ASC';
		break;
	case 'titledesc':
		$order_by = 'title DESC';
		break;
	case 'postdate':
		$order_by = 'postdate ASC';
		break;
	default:
		$order_by = 'postdate ASC';
		$sort = 'postdate';
		break;
}

echo '<table align="center" cellspacing="0" cellpadding="5" width="40%">
<tr>
	<td align="left"><b><strong>Sort By: </strong></b></td>
	<td align="left"><b><a href="index.php?sort=titleasc">Title Ascending</a></b></td>
	<td align="left"><b><a href="index.php?sort=titledesc">Title Descending</a></b></td>
	<td align="left"><b><a href="index.php?sort=postdate">Date Posted</a></b></td>
</tr></table>';

/*================
Sorting
================*/
?>
<body>
<!--php table-->
<?php

/*================
DELETE HANDLE CODE SO IT DOESNT NEED DELETEHANDLE.PHP, must be above select query if want delete code on index screen
================*/
if($_GET['blog_id'] != NULL){
	$id = $_GET['blog_id'];

	$querydel = "DELETE FROM blogposts WHERE blog_id='$id'";

	$resultdel = mysqli_query($dbc, $querydel); 

	if ($resultdel) {
		echo '<h3 style="background-color:red;">Post Deleted</h3> <br/>';	
	} else {
		echo "Oh no! There was an error: " . mysqli_error($dbc);
	}
}
/*================
DELETE HANDLE CODE SO IT DOESNT NEED DELETEHANDLE.PHP
================*/

$query = "SELECT * FROM blogposts ORDER BY $order_by LIMIT $start, $display";

$result = mysqli_query($dbc, $query);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<table id="posttable" width="80%" border="1" align="center" cellpadding="3">
		<tr>
			<td colspan="3"><div align="center"><strong>' .$row['title'] . '</strong></div></td>
		</tr>
		<tr>
			<td width="250">Post Date: ' . $row['postdate'] . '</td>
			<td rowspan="5">' . $row['post'] . '</td>
		<tr/>

		<tr>';
		if (isset($_SESSION['first_name'])) {
			if ($_SESSION['user_id'] == 4) {
			echo "<td><a href='updateform.php?id=" . $row['blog_id'] . "'>Update Post</a> | <a href='deleteform.php?id=" . $row['blog_id'] . "'>Delete Post</a> | ID: " . $row['blog_id'] . "</td>
		</tr>";}
		echo "<tr>
			<td width='250'><a href='comments.php?id=" . $row['blog_id'] . "'>View Post Comments</a></div></td>
		</tr>
		";}
		echo "</tr></table>
		</br>
		</br>";
	}
	
mysqli_close($dbc);
?>



<footer>

<?php 
echo '<center>';
// Make the links to other pages, if necessary.
if ($pages > 1) {
	
	echo '<p>';
	$current_page = ($start/$display) + 1;
	
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="index.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="index.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="index.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p>'; // Close the paragraph.
	
} // End of links section.
echo '</center>';?>
<?php
//footer
include('./includes/footer.html');
?>
</footer>
</html>