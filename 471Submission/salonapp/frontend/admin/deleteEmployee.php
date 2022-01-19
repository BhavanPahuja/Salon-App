<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Employee</title>

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
	<td>Employee Id</td>
	<td>Salon Id</td>
  <td>First Name</td>
	<td>Last Name</td>
	<td>Phone</td>
	<td>Email id</td>
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
	<td><?php echo $row["employeeid"]; ?></td>
	<td><?php echo $row["idsalon"]; ?></td>
	<td><?php echo $row["firstname"]; ?></td>
	<td><?php echo $row["lastname"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
  <td><?php echo $row["email"]; ?></td>
  <td><?php echo $row["address"]; ?></td>
  <td><?php echo $row["postalcode"]; ?></td>
  <td><?php echo $row["city"]; ?></td>
  <td><?php echo $row["stateorprovince"]; ?></td>
  <td><?php echo $row["country"]; ?></td>
	<td><a href="deleteEmployeelogic.php?employeeid=<?php echo $row["employeeid"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
