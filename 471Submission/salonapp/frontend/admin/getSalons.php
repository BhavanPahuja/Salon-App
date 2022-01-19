<?php
    
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();
    $result = getSalons($conn);

    header("Content-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['salonid'] = $row['salonid'];
        $output[$rowNumber]['phone'] = $row['phone'];
        $output[$rowNumber]['email'] = $row['email'];
        $output[$rowNumber]['name'] = $row['name'];
        $output[$rowNumber]['address'] = $row['address'];
        $output[$rowNumber]['postalcode'] = $row['postalcode'];
        $output[$rowNumber]['city'] = $row['city'];
        $output[$rowNumber]['stateorprovince'] = $row['stateorprovince'];
        $output[$rowNumber]['country'] = $row['country'];
        $rowNumber++;
    }

    echo json_encode($output, JSON_PRETTY_PRINT);
    
?>

