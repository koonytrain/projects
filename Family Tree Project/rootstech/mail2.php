<?php
include('header.php');
include('mysqli2.php');
?>
<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>


<?php
/* Email example script */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$to = 'chamong@uwm.edu' ;
$subject = $_POST['subject'];
$body = $_POST['body'];
$from = "From: " . $_POST['from'];

//Use Mail() Function
$mail = mail($to, $subject, $body, $from);

echo "Thank you, your email has been sent. We will contact you shortly";

}

?>

<h1>Contact RootsTech</h1></br>

<form action="<?php echo basename(__FILE__);  ?>" method="post">
<fieldset id="insinfo"><legend></legend>
<table align="center" cellspacing="5" cellpadding="5" width="75%">
<tr><td><label>Your Email: </label></td><td><input name="from" type="text" size="20" value=""/></td></tr> 
<tr><td></td></tr>
<tr><td><label>Subject: </label></td><td><input name="subject" type="text" size="20" value=""/> </td></tr>

<tr><td><label>Please enter some comments: </label></td><td>
<textarea name="body" cols="40" rows="5">
</textarea></td></tr>

</table>
</fieldset>
<p align="center"><input type="submit" name="submit" value="Submit" />
</form>



</body>
</html>
<?php
include('footer.php');

?>