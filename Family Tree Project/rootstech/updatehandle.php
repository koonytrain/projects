<?php
//Create Session
session_start();

?>
<html>

<head>


</head>

<body>


<?php

include('header.php');
include('mysqli2.php');

$id = mysqli_real_escape_string($dbc, trim($_POST['IND_ID']));
$GENDER = mysqli_real_escape_string($dbc, trim($_POST['GENDER']));
$MIDDLE_NAME = mysqli_real_escape_string($dbc, trim($_POST['MIDDLE_NAME']));
$FAMILY_NAME = mysqli_real_escape_string($dbc, trim($_POST['FAMILY_NAME']));
$GIVEN_NAME = mysqli_real_escape_string($dbc, trim($_POST['GIVEN_NAME']));
$MAIDEN_NAME = mysqli_real_escape_string($dbc, trim($_POST['MAIDEN_NAME']));
$DOB = mysqli_real_escape_string($dbc, trim($_POST['DOB']));
$POB = mysqli_real_escape_string($dbc, trim($_POST['POB']));
$DOD = mysqli_real_escape_string($dbc, trim($_POST['DOD']));
$POD = mysqli_real_escape_string($dbc, trim($_POST['POD']));
$DOM = mysqli_real_escape_string($dbc, trim($_POST['DOM']));
$POM = mysqli_real_escape_string($dbc, trim($_POST['POM']));

$query = "UPDATE INDIVIDUAL SET GIVEN_NAME = '$GIVEN_NAME', FAMILY_NAME = '$FAMILY_NAME', MIDDLE_NAME = '$MIDDLE_NAME', MAIDEN_NAME = '$MAIDEN_NAME', GENDER = '$GENDER', DOB = '$DOB', POB = '$POB', DOD = '$DOD', POD = '$POD', DOM = '$DOM', POM = '$POM' WHERE INDIVIDUAL.IND_ID = '$id'";
//echo $query;
$result = mysqli_query($dbc, $query);

if ($result) {
	echo "Thank you. The information you entered has been updated.";
} else {
	echo "There was an error updating the information! " . mysqli_error($dbc);
}
echo "<br />";
echo "<br />";
echo "<br />";
?>
</body>
</html>
<?php
include('footer.php');
?>