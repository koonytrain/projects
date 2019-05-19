<?php session_start(); ?>
<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>

<link rel="stylesheet" type="text/css" href="index.css" />
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

//Error Return message
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$errors = array();
	if ($_POST['GIVEN_NAME'] == NULL) {
		$errors[] = "Please enter the given name! <br />";
	}
	if ($_POST['FAMILY_NAME'] == NULL) {
		$errors[] = "Please enter the family last name! <br />";
	}
	if ($_POST['MAIDEN_NAME'] == NULL) {
		$errors[] =  "Please enter the maiden name! <br />";
	}
	if ($_POST['GENDER'] == NULL) {
		$errors[] = "Please select a gender! <br />";
	}
		if ($_POST['DOB'] == NULL) {
		$errors[] = "Please enter a date of birth! <br />";
	}
		if ($_POST['POB'] == NULL) {
		$errors[] = "Please enter a place of birth! <br />";
	}
/*		if ($_POST['DOD'] == NULL) {
		$errors[] = "Please enter a date of death! <br />";
	}
		if ($_POST['POD'] == NULL) {
		$errors[] = "Please enter a place of death! <br />";
	}*/
		if ($_POST['DOM'] == NULL) {
		$errors[] = "Please enter a Marriage Date! <br />";
	}
		if ($_POST['POM'] == NULL) {
		$errors[] = "Please enter a place of Marriage! <br />";
	}
	//add a dropdown here that will have mother, father, grandmother, user, etc
	foreach($errors as $errorsvar) {
		echo "<strong>$errorsvar;</strong>";
	}
}

?>

<form id="fbForm" action="<?php if(($errors == NULL) && ($_SERVER['REQUEST_METHOD'] === 'POST')) {
	echo "inserthandle.php";
	$submit = true;
} else {
	echo "form1.php"; 
}//Returns a thank you page
?>" method = "POST">

<fieldset id="insinfo"><legend> Please enter your entry for Family Tree </legend>
<table align="center" cellspacing="5" cellpadding="5" width="75%">
<tr><td><label>Given Name: </label></td><td><input name="GIVEN_NAME" type="text" size="20" value="<?php echo $_POST['GIVEN_NAME']?>" maxlength="40" /></td></tr>

<tr><td><label>Family Last Name: </label></td><td><input name="FAMILY_NAME" type="text" size="20" value="<?php echo $_POST['FAMILY_NAME']?>" maxlength="40" /></td></tr>

<tr><td><label>Middle Name: </label></td><td><input name="MIDDLE_NAME" type="text" size="20" value="<?php echo $_POST['MIDDLE_NAME']?>" maxlength="40" /></td></tr>

<tr><td><label>Maiden Name: </label></td><td><input name="MAIDEN_NAME" type="text" size="20" value="<?php echo $_POST['MAIDEN_NAME']?>" maxlength="40"/></td></tr>

<tr><td><label>Gender: </label></td><td>
<select id = "genderList" name="GENDER">
	<option value = "Male">Male</option>
	<option value = "Female">Female</option>
</select></td></tr>


<tr><td><label>Date of Birth: </label></td><td><input name="DOB" type="date" size="20" value="<?php echo $_POST['DOB']?>" maxlength="40"/></td></tr>
<tr><td><label>Place of Birth: </label></td><td><input name="POB" type="text" size="20" value="<?php echo $_POST['POB']?>" maxlength="40"/></td></tr>
<tr><td><label>Date of Death (if possible): </label></td><td><input name="DOD" type="text" size="20" value="<?php echo $_POST['DOD']?>" maxlength="40"/></td></tr>
<tr><td><label>Place of Death (if possible): </label></td><td><input name="POD" type="text" size="20" value="<?php echo $_POST['POD']?>" maxlength="40"/></td></tr>
<tr><td><label>Date of Marriage: </label></td><td><input name="DOM" type="date" size="20" value="<?php echo $_POST['DOM']?>" maxlength="40"/></td></tr>
<tr><td><label>Place of Marriage: </label></td><td><input name="POM" type="text" size="20" value="<?php echo $_POST['POM']?>" maxlength="40"/></td></tr>
<tr><td><label>Relationship:</label></td><td>
<select id = "relationshipList" name = "RELATIONSHIP">
	<option value = "User">User</option>
	<option value = "Mother">Mother</option>
	<option value = "Father">Father</option>
	<option value = "Grandfather Fathers">Grandfather Fathers Side</option>
	<option value = "Grandmother Fathers">Grandmother Fathers Side</option>
	<option value = "Grandfather Mothers">Grandfather Mothers Side</option>
	<option value = "Grandmother Mothers">Grandmother Mothers Side</option>
</select></td></tr>
<tr><td>
If you have source documents please put the information you have below</td><tr>
<tr><td><label>Type: </label></td><td>
<select id = "TYPE" name = "S_TYPE" value="<?php echo $_POST['S_TYPE']?>" >
	<option value= "Book">Book</option>
	<option value= "Newspaper">Newspaper</option>
	<option value= "Picture">Picture</option>
	<option value= "Letter">Letter</option>
	<option value= "Other">Other</option>
</select></td></tr>

<tr><td><label>Source Title: </label></td><td><input name="S_TITLE" type="text" size="20" value="<?php echo $_POST['S_TITLE']?>" maxlength="140"/></td></tr>

<tr><td><label>Source Author: </label></td><td><input name="S_AUTHOR" type="text" size="20" value="<?php echo $_POST['S_AUTHOR']?>" maxlength="40"/></td></tr>

<tr><td><label>Source Publisher: </label></td><td><input name="S_PUBLISHER" type="text" size="20" value="<?php echo $_POST['S_PUBLISHER']?>" maxlength="40"/></td></tr>

<tr><td><label>Date of Source Document: </label></td><td><input name="S_DATE" type="date" size="20" value="<?php echo $_POST['S_DATE']?>" maxlength="40"/></td></tr>
</table>
</fieldset>
<?php /*if ($submit) {
	//Make it so i only hit submit once
echo "<script>document.getElementById('fbForm').submit();</script> ";} */
?> 
<p align="center"><input type="submit" value="Check & Submit" /></p>
</form>
<br />
<br />

<?php
include('footer.php');

?>
</body>

</html>
