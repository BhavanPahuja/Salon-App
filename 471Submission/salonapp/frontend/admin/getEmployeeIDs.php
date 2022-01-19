<?php

    
        $conn = connect();
        $sql = "SELECT employeeid FROM employee";
        $result = mysqli_query($conn, $sql);
        header("Content-Type: JSON");
        $rowNumber = 0;
        $output = array();
    
        while($row = mysqli_fetch_array($result)){
            echo "<option>".$output[$rowNumber]['employeeid'] = $row['employeeid']."</option>";
            
            $rowNumber++;
        }
?>