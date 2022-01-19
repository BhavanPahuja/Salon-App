<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $equipmentid = $_POST['equipmentid'] ?? "";

    $sql = "DELETE FROM equipment WHERE equipmentid='" . $_GET["equipmentid"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Equiment removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting equipment record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
