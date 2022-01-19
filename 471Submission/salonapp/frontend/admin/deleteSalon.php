<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM salon");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Salon</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}

</style>

</head>
<body>
<table>
    <tr>
	<td>Salon ID</td>
	<td>Phone</td>
    <td>Email ID</td>
	<td>Salon Name</td>
	<td>Address</td>
	<td>Postal Code</td>
    <td>City</td>
    <td>State or Province</td>
    <td>Country</td>
	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["salonid"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["postalcode"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["stateorprovince"]; ?></td>
    <td><?php echo $row["country"]; ?></td>
	<td><a href="deleteSalonlogic.php?salonid=<?php echo $row["salonid"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
