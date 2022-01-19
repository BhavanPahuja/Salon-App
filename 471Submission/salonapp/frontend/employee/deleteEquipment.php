<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';


$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM equipment");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Equipment</title>

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
	<td>Equipment Id</td>
	<td>Employee No.</td>
    <td>Equipment Name</td>

	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["equipmentid"]; ?></td>
	<td><?php echo $row["employeeno"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><a href="deleteEquipmentLogic.php?equipmentid=<?php echo $row["equipmentid"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>