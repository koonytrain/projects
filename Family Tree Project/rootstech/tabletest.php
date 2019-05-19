<?php session_start(); ?>
<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Family Tree</title>

<link rel="stylesheet" type="text/css" href="style.css" /> <!-- this is used to connect to my css -->
<style>
table {
	margin: auto;
	width: 80%;
	color: black;
	text-align: left;
	border-collapse: collapse;
}
th {
	background-color: white;
	color: black;
	padding: 15px;
}
table, td, th {
	border: 2px solid green;
	background-color: white;
}
th, td {
	padding: 5px;
}
tr:nth-child(even) {background-color: #e6e6e6}
</style>
</head>
<body>
<table>
	<tr>
		<th>ID: </th>
		<th>Given Name: </th>
		<th>Family Name: </th>
		<th>Middle Name: </th>
		<th>Maiden Name: </th>
		<th>Gender: </th>
		<th>Date of Birth: </th>
		<th>Place of Birth: </th>
		<th>Date of Death: </th>
		<th>Place of Death: </th>
		<th>Date of Marriage: </th>
		<th>Place of Marriage: </th>
	</tr>
<!--php table-->
<?php
include('header.php');
include('mysqli2.php');

$query = "SELECT * FROM INDIVIDUAL WHERE USER_ID=" . $_SESSION['USER_ID'] . ";";

$result = mysqli_query($dbc, $query);

if($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>" . $row['IND_ID'] . "</td><td>" . $row['GIVEN_NAME'] . "</td><td>" . $row['FAMILY_NAME'] . "</td><td>" . $row['MIDDLE_NAME'] . "</td>
		<td>" . $row['MAIDEN_NAME'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['DOB'] . "</td><td>" . $row['POB'] . "</td>
		<td>" . $row['DOD'] . "</td><td>" . $row['POD'] . "</td><td>" . $row['DOM'] . "</td><td>" . $row['POM'] . "</td>
		</tr>";
	} 
	echo "</table>";
}
else { 
	echo "No family members in the database!";
}

?>
</table>

</body>

</html>
<?php
include('footer.php');

?>