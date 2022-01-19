<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $equipmentName = $_POST['equipmentName'] ?? NULL;
    $employeeName = $_POST['employeeName'] ?? NULL;

    $getEmployeeID = "SELECT employeeid FROM employee where firstname='".$employeeName."'";
    $result = mysqli_query($conn, $getEmployeeID);
    $employeeno = 0;
    while($row = mysqli_fetch_array($result)){
        $employeeno = $row['employeeid'];
    }
    

    $sql = "INSERT INTO equipment(employeeno, name) VALUES ('$employeeno', '$equipmentName')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Equipment added successfully!", JSON_PRETTY_PRINT);
        $output = array();

        array_push($output, $employeeno, $equipmentName);

        echo json_encode($output, JSON_PRETTY_PRINT);
    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>