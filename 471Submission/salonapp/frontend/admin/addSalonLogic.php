<?php
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$phone = $_POST['phone'];
$email = $_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$city = $_POST['city'];
$stateorprovince = $_POST['stateorprovince'];
$country = $_POST['country'];


$stmt = $conn->prepare("INSERT INTO salon(phone, email, name, address, postalcode, city, stateorprovince, country) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss", $phone, $email, $name, $address, $postalcode, $city, $stateorprovince, $country);
header("Content-Type: JSON");
if ($stmt->execute()) {
    echo "New salon added successfully!\n";
    header("Content-Type: JSON");

    $output = array();

    array_push($output, $phone, $email, $name, $address, $postalcode, $city, $stateorprovince, $country);
        

    echo json_encode($output, JSON_PRETTY_PRINT);


} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);

?>