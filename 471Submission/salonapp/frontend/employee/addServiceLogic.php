<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $serviceOffered = $_POST['serviceOffered'] ?? NULL;
    $serviceCost = $_POST['serviceCost'] ?? NULL;
    $equipmentName = $_POST['equipmentName'] ?? NULL;

    $getEquipmentID = "SELECT equipmentid FROM equipment where name ='".$equipmentName."'";
    $result = mysqli_query($conn, $getEquipmentID);
    $equipmentno = 0;
    while($row = mysqli_fetch_array($result)){
        $equipmentno = $row['equipmentid'];
    }

    $stmt = $conn->prepare("INSERT INTO service(servicename, cost, equipmentno) VALUES (?,?,?)");
    $stmt->bind_param("ssi", $serviceOffered, $serviceCost, $equipmentno);
    if ($stmt->execute()) {
        header("Content-Type: JSON");
        echo json_encode("New service added successfully!", JSON_PRETTY_PRINT);
        $output = array();

        array_push($output, $serviceOffered, $serviceCost, $equipmentno);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>