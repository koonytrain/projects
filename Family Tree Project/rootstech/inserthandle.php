<?php session_start(); ?>
<html>
<head>

</head>

<body>

<?php

include('header.php');

include('mysqli2.php');



$GENDER = $_POST['GENDER'];

$MIDDLE_NAME = $_POST['MIDDLE_NAME'];

$FAMILY_NAME = $_POST['FAMILY_NAME'];

$GIVEN_NAME = $_POST['GIVEN_NAME'];

$MAIDEN_NAME = $_POST['MAIDEN_NAME'];

$DOB = $_POST['DOB'];

$POB = $_POST['POB'];

$DOD = $_POST['DOD'];

$POD = $_POST['POD'];

$DOM = $_POST['DOM'];

$POM = $_POST['POM'];

$USER_ID = $_SESSION['USER_ID'];

$RELATIONSHIP = $_POST['RELATIONSHIP'];

$S_TYPE = $_POST['S_TYPE'];

$S_TITLE= $_POST['S_TITLE'];

$S_AUTHOR = $_POST['S_AUTHOR'];

$S_PUBLISHER = $_POST['S_PUBLISHER'];

$S_DATE = $_POST['S_DATE'];

$S_ID = $_POST['S_ID'];

//SQL inserts to the tables

$query = "INSERT INTO INDIVIDUAL(IND_ID, GIVEN_NAME, FAMILY_NAME, MIDDLE_NAME, MAIDEN_NAME, GENDER, DOB, POB, DOD, POD, DOM, POM, USER_ID) 

VALUES (NULL, '$GIVEN_NAME','$FAMILY_NAME','$MIDDLE_NAME','$MAIDEN_NAME','$GENDER','$DOB','$POB','$DOD','$POD','$DOM','$POM', '$USER_ID');";


$result = mysqli_query($dbc, $query);

if ($result) {
	

echo "Thank you, information for " . $GIVEN_NAME . " " . $FAMILY_NAME ." has been submitted.";

} else {

	echo "There was an error! " . mysqli_error($dbc);

}


/* Get the IND_ID of the user just created */
$query3 = "SELECT IND_ID FROM INDIVIDUAL WHERE GIVEN_NAME=\"" . $GIVEN_NAME . "\" AND FAMILY_NAME=\"" . $FAMILY_NAME . "\";";  //WOULD BE FROM  USER
//echo "<br><br> " . $query3 . "<br><br>";
$result3 = mysqli_query($dbc, $query3);
if ($result3) {
	
	$data2 = mysqli_fetch_assoc($result3);
	$NEW_USER_IND_ID = $data2['IND_ID'];

//	echo "New USER IND_ID " . $NEW_USER_IND_ID . ".";

} else {

	echo "There was an error2! " . mysqli_error($dbc);

}



/* Get logged in user IND_ID */
$query2 = "SELECT FNAME, LNAME FROM USER WHERE USER_ID=" . $_SESSION['USER_ID'] . ";";  //WOULD BE FROM  USER

$result2 = mysqli_query($dbc, $query2);
if ($result2) {
	
	$data = mysqli_fetch_assoc($result2);
//	echo "Name: " . $data['FNAME'] . " " . $data['LNAME'];

} else {

	echo "There was an error3! " . mysqli_error($dbc);

}

$query3 = "SELECT IND_ID FROM INDIVIDUAL WHERE USER_ID=" . $_SESSION['USER_ID'] . " AND GIVEN_NAME=\"" . $data['FNAME'] . "\" AND FAMILY_NAME=\"" . $data['LNAME'] . "\";";  //WOULD BE FROM  USER
//echo "<br><br> " . $query3 . "<br><br>";
$result3 = mysqli_query($dbc, $query3);
if ($result3) {
	
	$data2 = mysqli_fetch_assoc($result3);
	$USER_IND_ID = $data2['IND_ID'];

//	echo "My IND_ID " . $USER_IND_ID . ".";

} else {

	echo "There was an error4! " . mysqli_error($dbc);

}

/* Get the role ID */
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"" . $RELATIONSHIP . "\";";
//echo "<br><br> " . $query . "<br><br>";
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);
	$MY_ROLE_ID = $data['R_ID'];

//	echo "My MY_ROLE_ID " . $MY_ROLE_ID . ".";

} else {

	echo "There was an error5! " . mysqli_error($dbc);

}

$querys = "INSERT INTO SOURCE(S_ID, S_TYPE, S_TITLE, S_AUTHOR, S_PUBLISHER, S_DATE) 

VALUES (NULL, '$S_TYPE', '$S_TITLE', '$S_AUTHOR', '$S_PUBLISHER', '$S_DATE');";
//echo "<br><br> " . $querys;

$result = mysqli_query($dbc, $querys);

if ($result) {
	
	echo "<br><br>Source information has been documented";

} else {

	echo "There was an error in your source information! " . mysqli_error($dbc);

}

/* Get the source ID */
$query = "SELECT S_ID FROM SOURCE WHERE S_TYPE=\"" . $S_TYPE . "\" AND S_TITLE=\"" . $S_TITLE . "\" AND S_AUTHOR=\"" . $S_AUTHOR . "\" AND S_PUBLISHER=\"" . $S_PUBLISHER . "\";";
//echo "<br><br> " . $query . "<br><br>";
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);
	$MY_SOURCE_ID = $data['S_ID'];

//	echo "<br>My MY_SOURCE_ID " . $MY_SOURCE_ID . ".";

} else {

	echo "There was an error5! " . mysqli_error($dbc);

}

/* Add the relationship into the relationship table */
$query = "INSERT INTO RELATIONSHIP (REL_ID, IND1_ID, IND2_ID, R_ID, S_ID) VALUES (NULL, '$USER_IND_ID', '$NEW_USER_IND_ID', '$MY_ROLE_ID', '$MY_SOURCE_ID');";
//echo "<br><br> " . $query . "<br><br>";
$result = mysqli_query($dbc, $query);
if ($result) {
	
	echo "<br><br> Relationship successfully saved.<br>";

} else {

	echo "There was an error6! Don't forget to create your User information before entering family members into your family tree. <br><br>" . mysqli_error($dbc);

}
?>

</body>

</html>
<?php
include('footer.php');

?>