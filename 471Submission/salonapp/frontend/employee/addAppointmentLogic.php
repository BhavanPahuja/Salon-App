<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientName = $_POST['clientName'] ?? NULL;
    $employeeName = $_POST['employeeName'] ?? NULL;
    $startdatetime = $_POST['startdatetime'] ?? NULL;
    $enddatetime = $_POST['enddatetime'] ?? NULL;
    $serviceName = $_POST['serviceName'] ?? NULL;
    $previousapt = $_POST['previousapt'] ?? NULL;
    $previousService = $_POST['previousService'] ?? NULL;

    $getClientID = "SELECT clientid FROM client where firstname='".$clientName."'";
    $result = mysqli_query($conn, $getClientID);
    $idclient = 0;
    while($row = mysqli_fetch_array($result)){
        $idclient = $row['clientid'];
    }

    $getServiceID = "SELECT serviceid FROM service where servicename='".$serviceName."'";
    $result = mysqli_query($conn, $getServiceID);
    $idservice = 0;
    while($row = mysqli_fetch_array($result)){
        $idservice = $row['serviceid'];
    }


    $getEmployeeID = "SELECT employeeid FROM employee where firstname='".$employeeName."'";
    $result = mysqli_query($conn, $getEmployeeID);
    $idstylist = 0;
    while($row = mysqli_fetch_array($result)){
        $idstylist = $row['employeeid'];
    }

    
    $stmt = $conn->prepare("INSERT INTO appointment(idservice, idclient, idstylist, startdatetime, enddatetime, previousapt, previousservice) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("iiissss", $idservice, $idclient, $idstylist, $startdatetime, $enddatetime,  $previousapt, $previousService);

    if ($stmt->execute()) {
        header("Content-Type: JSON");
        echo json_encode("New appointment added successfully!", JSON_PRETTY_PRINT);
        $output = array();

        array_push($output, $idservice, $idclient, $idstylist, $startdatetime, $enddatetime, $previousapt, $previousservice);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>