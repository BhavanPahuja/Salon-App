<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getEmployees($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['employeeid'] = $row['employeeid'];
    $output[$rowNumber]['idsalon'] = $row['idsalon'];
    $output[$rowNumber]['firstname'] = $row['firstname'];
    $output[$rowNumber]['lastname'] = $row['lastname'];
    $output[$rowNumber]['phone'] = $row['phone'];
    $output[$rowNumber]['email'] = $row['email'];
    $output[$rowNumber]['address'] = $row['address'];
    $output[$rowNumber]['postalcode'] = $row['postalcode'];
    $output[$rowNumber]['city'] = $row['city'];
    $output[$rowNumber]['stateorprovince'] = $row['stateorprovince'];
    $output[$rowNumber]['country'] = $row['country'];
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>