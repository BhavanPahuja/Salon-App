<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $salonid = $_POST['salonid'] ?? "";

    $sql = "DELETE FROM salon WHERE salonid='" . $_GET["salonid"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Salon removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting Salon record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
