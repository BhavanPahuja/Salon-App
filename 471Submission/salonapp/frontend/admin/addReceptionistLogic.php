<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    
    $employeenumber = $_POST['employeeid'];
    
    $stmt = $conn->prepare("INSERT INTO receptionist(employeeid) VALUES (?)");
    $stmt->bind_param("s", $employeenumber);
    header("Content-Type: JSON");
    if ($stmt->execute()) {

        echo json_encode("New receptionist added successfully!", JSON_PRETTY_PRINT);

        $output = array();

        array_push($output, $employeenumber);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>
