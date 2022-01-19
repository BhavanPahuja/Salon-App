<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientid = $_POST['clientid'] ?? "";

    $sql = "DELETE FROM client WHERE clientid='" . $_GET["clientid"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Employee removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting employee record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
