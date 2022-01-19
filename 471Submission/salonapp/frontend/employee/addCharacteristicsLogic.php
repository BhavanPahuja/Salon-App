<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientName = $_POST['clientName'] ?? NULL;
    $colorFormula = $_POST['colorFormula'] ?? NULL;
    $hairLength = $_POST['hairLength'] ?? NULL;
    $hairTexture = $_POST['hairTexture'] ?? NULL;
    $hairStyle = $_POST['hairStyle'] ?? NULL;
    $extraNotes = $_POST['extraNotes'] ?? NULL;

    $getClientID = "SELECT clientid FROM client where firstname='".$clientName."'";
    $result = mysqli_query($conn, $getClientID);
    $clientno = 0;
    while($row = mysqli_fetch_array($result)){
        $clientno = $row['clientid'];
    }


    $stmt = $conn->prepare("INSERT INTO haircharacteristics(clientno, colorformula, length, texture, style, notes) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $clientno, $colorFormula, $hairLength, $hairTexture, $hairStyle, $extraNotes);
    if ($stmt->execute()) {
        header("Content-Type: JSON");
        echo json_encode("Hair characteristics added successfully!", JSON_PRETTY_PRINT);
        $output = array();

        array_push($output, $clientno, $colorFormula, $hairLength, $hairTexture, $hairStyle, $extraNotes);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>