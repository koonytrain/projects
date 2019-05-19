<?php
//Create Session
session_start();

include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>
<style>
.body {
	overflow: auto;
	background-position: center bottom;
}
.user {
	position: absolute;
	background-color: #0000ff00;
	top: 400px;
	left: 47%;
	width: 200px;
	height: auto;
	color: blue;
	
}
.mother {
	position: absolute;
	background-color: #0000ff00;
	top: 400px;
	left: 30%;
	width: 200px;
	height: auto;
	color: blue;
}
.father {
	position: absolute;
	background-color: #0000ff00;
	top: 400px;
	left: 65%;
	width: 200px;
	height: auto;
	color: blue;
}
.mother_mother {
	position: absolute;
	background-color: #0000ff00;
	top: 300px;
	left: 15%;
	width: 200px;
	height: auto;
	color: blue;
}
.mother_father {
	position: absolute;
	background-color: #0000ff00;
	top: 500px;
	left: 15%;
	width: 200px;
	height: auto;
	color: blue;
}
.father_mother {
	position: absolute;
	background-color: #0000ff00;
	top: 300px;
	left: 80%;
	width: 200px;
	height: auto;
	color: blue;
}
.father_father {
	position: absolute;
	background-color: #0000ff00;
	top: 500px;
	left: 80%;
	width: 200px;
	height: auto;
	color: blue;
}
.tree {
	background-repeat: no-repeat;
	-webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
}

fieldset {
	padding: 0 10px 10px;
	border-radius: 8px;
	border:3px solid green;
}
.foot {
	  height: 50px;
	  margin-top: 25%;
}

</style>
</head>
<body style="background-image:url('family_tree2.jpg');" class="tree">

<h1 style="color:Blue;" align="center">Your Family Tree</h1>
<div class="body">
<div class="user">
<fieldset>
	<legend>User: </legend>
<?php                           /* This will output the user first and last name */

include('mysqli2.php'); 

$query = "SELECT FNAME, LNAME FROM USER WHERE USER_ID=" . $_SESSION['USER_ID'] . ";";  //WOULD BE FROM  USER

$result = mysqli_query($dbc, $query);
echo "</br>";
if ($result) {

	$data = mysqli_fetch_assoc($result);
	echo "<a href='tabletest.php'>" . $data['FNAME'] . " " . $data['LNAME'] . "</a>\n";

} else {

	echo "<br>Missing your information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="mother">
<fieldset>
	<legend>Mother: </legend>
<?php                           /* This will output all my guestbook entries */

include('mysqli2.php'); 

$query2 = "SELECT FNAME, LNAME FROM USER WHERE USER_ID=" . $_SESSION['USER_ID'] . ";";  //WOULD BE FROM  USER

$result2 = mysqli_query($dbc, $query2);
if ($result2) {
	
	$data = mysqli_fetch_assoc($result2);
//	echo "Name: " . $data['FNAME'] . " " . $data['LNAME'];

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}

$query3 = "SELECT IND_ID FROM INDIVIDUAL WHERE USER_ID=" . $_SESSION['USER_ID'] . " AND GIVEN_NAME=\"" . $data['FNAME'] . "\" AND FAMILY_NAME=\"" . $data['LNAME'] . "\";";  //WOULD BE FROM  USER
$result3 = mysqli_query($dbc, $query3);
if ($result3) {
	
	$data2 = mysqli_fetch_assoc($result3);
	$USER_IND_ID = $data2['IND_ID'];

//	echo "<br>My IND_ID " . $USER_IND_ID . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get R_ID of Mother
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Mother\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MOTHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $MOTHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $MOTHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error23! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="father">
<fieldset>
	<legend>Father: </legend>
<?php
include('mysqli2.php');
//Get R_ID of Father
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Father\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$FATHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $FATHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $FATHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error23! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="mother_mother">
<fieldset>
	<legend>Grandmother Mothers Side: </legend>
<?php
include('mysqli2.php');
//Get R_ID of Grandmother Mothers Side
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Grandmother Mothers\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$GMOTHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $GMOTHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $GMOTHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error22! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="mother_father">
<fieldset>
	<legend>Grandfather Mothers Side: </legend>
<?php
include('mysqli2.php');
//Get R_ID of Grandfather Mothers Side
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Grandfather Mothers\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$GFATHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $GFATHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $GFATHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error22! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="father_mother">
<fieldset>
	<legend>Grandmother Fathers Side: </legend>
<?php
include('mysqli2.php');
//Get R_ID of Grandmother Fathers Side
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Grandmother Fathers\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$GMOTHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $GMOTHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $GMOTHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error23! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>
<div class="father_father">
<fieldset>
	<legend>Grandfather Fathers Side: </legend>
<?php
include('mysqli2.php');
//Get R_ID of Grandfather Fathers Side
$query = "SELECT R_ID FROM ROLE WHERE R_TYPE=\"Grandfather Fathers\";";  //WOULD BE FROM  USER
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$GFATHER_ROLE = $data2['R_ID'];

//	echo "<br>Boxes Role= " . $GFATHER_ROLE . ".";

} else {

//	echo "There was an error2! " . mysqli_error($dbc);

}
//Get IND2_ID from REL table based on IND_ID and R_ID from above
$query = "SELECT IND2_ID FROM RELATIONSHIP WHERE IND1_ID=" . $USER_IND_ID . " AND R_ID=" . $GFATHER_ROLE . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data2 = mysqli_fetch_assoc($result);
	$MIND2_ID = $data2['IND2_ID'];

//	echo "<br>IND2_ID Would be= " . $MIND2_ID . ".";

} else {

//	echo "<br>There was an error23! " . mysqli_error($dbc);

}

//Output first and last name from INDIVIDUAL table
$query = "SELECT GIVEN_NAME, FAMILY_NAME FROM INDIVIDUAL WHERE IND_ID=" . $MIND2_ID . ";";  
$result = mysqli_query($dbc, $query);
if ($result) {
	
	$data = mysqli_fetch_assoc($result);

	echo "<br><a href='tabletest.php'>" . $data['GIVEN_NAME'] . " " . $data['FAMILY_NAME'] . "</a><br/>\n";

} else {

	echo "<br>Missing family member information. You can enter the information <a href='form1.php'>Here</a>.";

}

?><br>
</fieldset></div>


<!--<div class="line" id="line1"></div>-->
</div>
</body>

</html>
<div class="foot">
<?php
include('footer.php');

?></div>