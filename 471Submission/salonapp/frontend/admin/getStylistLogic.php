<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getStylists($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['employeenumber'] = $row['employeenumber'];
    $output[$rowNumber]['idhairstylist'] = $row['idhairstylist'];
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>