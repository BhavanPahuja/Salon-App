<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM haircharacteristics");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Hair Characteristics</title>

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
	<td>Client ID</td>
	<td>Color Formula</td>
    <td>Length</td>
	<td>Texture</td>
	<td>Style</td>
    <td>Notes</td>
	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["clientno"]; ?></td>
	<td><?php echo $row["colorformula"]; ?></td>
	<td><?php echo $row["length"]; ?></td>
	<td><?php echo $row["texture"]; ?></td>
	<td><?php echo $row["style"]; ?></td>
    <td><?php echo $row["notes"]; ?></td>
	<td><a href="deleteCharacteristicslogic.php?clientno=<?php echo $row["clientno"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
