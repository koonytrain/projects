<?php session_start(); ?><html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<style>
#insinfo {
	margin-left: 20%;
	margin-right: 20%;
}
</style>
</head>
<body>
<?php
include('header.php');
include('mysqli2.php');
?>
<form action="updatehandle.php" method="post">
<fieldset id="insinfo"><legend> Please enter your updated entry for Family Tree: </legend>
<!--use table to help align the input fields-->
<table align="center" cellspacing="5" cellpadding="5" width="75%">

<?php
if(($_POST['IND_ID'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the ID number of the person you would like to update!<strong></br />";
}?>

<tr><td><label>ID Number: </label></td><td><input name="IND_ID" type="text" size="20" value="<?php echo $_POST['IND_ID']?>" maxlength="40" /></td></tr>

<?php
if(($_POST['GIVEN_NAME'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the given name!<strong></br />";
}?>

<tr><td><label>Given Name: </label></td><td><input name="GIVEN_NAME" type="text" size="20" value="<?php echo $_POST['GIVEN_NAME']?>" maxlength="40" /></td></tr>

<?php
if(($_POST['FAMILY_NAME'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the family name!<strong></br />";
}?>

<tr><td><label>Family Last Name: </label></td><td><input name="FAMILY_NAME" type="text" size="20" value="<?php echo $_POST['FAMILY_NAME']?>" maxlength="40" /></td></tr>

<?php
if(($_POST['MIDDLE_NAME'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the middle name!<strong></br />";
}?>

<tr><td><label>Middle Name: </label></td><td><input name="MIDDLE_NAME" type="text" size="20" value="<?php echo $_POST['MIDDLE_NAME']?>" maxlength="40" /></td></tr>

<tr><td><label>Maiden Name: </label></td><td><input name="MAIDEN_NAME" type="text" size="20" value="<?php echo $_POST['MAIDEN_NAME']?>" maxlength="40"/></td></tr>

<?php
if(($_POST['GENDER'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the gender!<strong></br />";
}?>

<tr><td><label>Gender: </label></td><td><input name="GENDER" type="text" size="20" value="<?php echo $_POST['GENDER']?>" maxlength="40"/></td></tr>

<?php
if(($_POST['DOB'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the date of birth!<strong></br />";
}?>

<tr><td><label>Date of Birth: </label></td><td><input name="DOB" type="text" size="20" value="<?php echo $_POST['DOB']?>" maxlength="40"/></td></tr>

<?php
if(($_POST['POB'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in the place of birth!<strong></br />";
}?>

<tr><td><label>Place of Birth: </label></td><td><input name="POB" type="text" size="20" value="<?php echo $_POST['POB']?>" maxlength="40"/></td></tr>

<tr><td><label>Date of Death (if possible): </label></td><td><input name="DOD" type="text" size="20" value="<?php echo $_POST['DOD']?>" maxlength="40"/></td></tr>

<tr><td><label>Place of Death (if possible): </label></td><td><input name="POD" type="text" size="20" value="<?php echo $_POST['POD']?>" maxlength="40"/></td></tr>

<tr><td><label>Date of Marriage: </label></td><td><input name="DOM" type="text" size="20" value="<?php echo $_POST['DOM']?>" maxlength="40"/></td></tr>

<tr><td><label>Place of Marriage: </label></td><td><input name="POM" type="text" size="20" value="<?php echo $_POST['POM']?>" maxlength="40"/></td></tr>

</table>
</fieldset>
<p align="center"><input type="submit" value="Check & Submit" /></p>

</body>
</html>
<?php
include('footer.php');

?>