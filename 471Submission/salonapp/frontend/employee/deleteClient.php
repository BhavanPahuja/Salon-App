<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM client");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Client</title>

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
	<td>Client Id</td>
	<td>Salon No.</td>
    <td>Phone No.</td>
    <td>First Name</td>
	<td>Last Name</td>
	<td>Email id</td>
	<td>Address</td>
    <td>Postal Code</td>
    <td>City</td>
    <td>State or Province</td>
    <td>Country</td>
    <td>Discount</td>
	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["clientid"]; ?></td>
	<td><?php echo $row["salonno"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["firstname"]; ?></td>
	<td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["postalcode"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["stateorprovince"]; ?></td>
    <td><?php echo $row["country"]; ?></td>
    <td><?php echo $row["discount"]; ?></td>
	<td><a href="deleteClientlogic.php?clientid=<?php echo $row["clientid"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
