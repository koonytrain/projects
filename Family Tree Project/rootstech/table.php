<?php session_start(); ?><html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>
<link rel="stylesheet" type="text/css" href="style.css" /> <!-- this is used to connect to my css -->
</head>
<?php
include('header.php');  /* this is used to add my header file onto the index page */ 
?>
<body>
<fieldset><legend> Family Tree: </legend>
<?php                           /* This will output all my guestbook entries */
include('mysqli2.php');
$query = "SELECT * FROM INDIVIDUAL";$result = mysqli_query($dbc, $query);
echo "</br>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "<strong>First Name: </strong>". $row['GIVEN_NAME'] . " | <strong>Middle Name: </strong>" .$row['MIDDLE_NAME'] . "|<strong>Last Name: </strong>" .$row['FAMILY_NAME'] . "
	| <strong>Maiden Name: </strong>". $row['MAIDEN_NAME'] . "| <strong>Date of Birth: </strong>" . $row['DOB'] . "| <strong>Place of Birth: </strong>". $row['POB'] ."| <strong>Date of Death: </strong>" .$row['DOD'] . "|
	<strong>Place of Death: </strong>" .$row['POD'] . "|<strong>Date Of Marriage: </strong>" .$row['DOM'] . "|<strong>Place of Marriage: </strong>" .$row['POM'] . "<br/><br/>\n";
echo "<br /> <a href='updateform.php?id= ". $row['id'] . "'>Update</a> ----- <br /><br /> \n";
}
?>
</fieldset>
</body>
<?php
include('footer.php');

?>