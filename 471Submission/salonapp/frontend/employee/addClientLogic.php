<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $salonName = $_POST['salonName'] ?? NULL;
    $firstname = $_POST['firstname'] ?? NULL;
    $lastname = $_POST['lastname'] ?? NULL;
    $phone = $_POST['phone'] ?? NULL;
    $email = $_POST['email'] ?? NULL;
    $address = $_POST['address'] ?? NULL;
    $postalcode = $_POST['postalcode'] ?? NULL;
    $city = $_POST['city'] ?? NULL;
    $stateorprovince = $_POST['stateorprovince'] ?? NULL;
    $country = $_POST['country'] ?? NULL;
    $discount = $_POST['discount'] ?? NULL;

    $getSalonID = "SELECT salonid FROM salon where name='".$salonName."'";
    $result = mysqli_query($conn, $getSalonID);
    $salonno = 0;
    while($row = mysqli_fetch_array($result)){
        $salonno = $row['salonid'];
    }
    
    $stmt = $conn->prepare("INSERT INTO client(salonno, phone, firstname, lastname, email, address, postalcode, city, stateorprovince, country, discount) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issssssssss", $salonno, $phone, $firstname, $lastname, $email, $address, $postalcode, $city, $stateorprovince, $country, $discount);
    if ($stmt->execute()) {
        header("Content-Type: JSON");
        echo json_encode("Client added successfully!", JSON_PRETTY_PRINT);
        $output = array();

        array_push($output, $salonno, $phone, $firstname, $lastname, $email, $address, $postalcode, $city, $stateorprovince, $country, $discount);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>