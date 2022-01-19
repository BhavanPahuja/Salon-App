<?php 

include 'employee.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM appointment");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Appointment</title>

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
	<td>Service ID</td>
	<td>Client ID</td>
    <td>Stylist ID</td>
    <td>Receptionist ID</td>
    <td>Start Date Time</td>
    <td>End Date Time</td>
    <td>Previous Appointment</td>
    <td>Previous Service</td>
	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["idservice"]; ?></td>
	<td><?php echo $row["idclient"]; ?></td>
    <td><?php echo $row["idstylist"]; ?></td>
    <td><?php echo $row["idreceptionist"]; ?></td>
    <td><?php echo $row["startdatetime"]; ?></td>
    <td><?php echo $row["enddatetime"]; ?></td>
    <td><?php echo $row["previousapt"]; ?></td>
    <td><?php echo $row["previousservice"]; ?></td>
	<td><a href="deleteAppointmentLogic.php?idservice=<?php echo $row["idservice"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
