<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getReceptionists($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['receptionistid'] = $row['receptionistid'];
    $output[$rowNumber]['employeeid'] = $row['employeeid'];
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>