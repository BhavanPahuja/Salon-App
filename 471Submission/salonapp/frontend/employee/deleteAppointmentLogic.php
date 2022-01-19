<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $idservice = $_POST['idservice'] ?? "";

    $sql = "DELETE FROM appointment WHERE idservice='" . $_GET["idservice"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Appointment removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting appointment record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
