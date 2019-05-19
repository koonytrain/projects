<?php session_start(); ?><html><!DOCTYPE html><head><meta charset="utf-8" /><title>Deleted Individual</title>
<link rel="stylesheet" type="text/css" href="style.css" /></head>
<body>
<?php
include('header.php');include('mysqli2.php');

$IND_ID = $_POST['IND_ID'];
$query = "DELETE FROM INDIVIDUAL WHERE INDIVIDUAL.IND_ID = '$IND_ID'";
$result = mysqli_query($dbc, $query);
if ($result) {
echo "Thank you. The individual information has been deleted.";
} else {
	echo "There was an error! " . mysqli_error($dbc);
}
echo "<br />";
echo "<br />";
echo "<br />You deleted ID number: " . $_POST['IND_ID'];
echo "<br />";
echo "<br />";
?>
</body>
</html>
<?php
include('footer.php');

?>