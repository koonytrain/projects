<?php
//Create Session
session_start();
?>
<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Delete Individual</title>

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
<div id="deleteform">
<form name="fbForm" id="fbForm" action="<?php 
if(($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['IND_ID'] != NULL)){
	echo "deletehandle.php";
	$submit = true;
} else {
	echo "deleteform.php"; 
}//Returns a thank you page
?>" method="post">

<fieldset id="insinfo"><legend> Please enter your ID  to delete entry: </legend>
</br>
<?php

if(($_POST['IND_ID'] == NULL) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	echo "<strong>Please fill in your ID number!<strong></br />";
}
?>
<p><label>ID: <input name="IND_ID" type="text" size="20" value="<?php echo $_POST['IND_ID']?>" maxlength="40" /></p></label>

</br>

</fieldset>

<?php if ($submit) {
	//Make it so i only hit submit once
echo "<script>document.getElementById('fbForm').submit();</script> ";}?>
<p align="center"><input type="submit" value="Check & Submit" /></p>
</div>


</body>
</html>
<?php
include('footer.php');

?>