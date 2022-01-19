<?php

    
        $conn = connect();
        $sql = "SELECT name FROM salon";
        $result = mysqli_query($conn, $sql);
        header("Content-Type: JSON");
        $rowNumber = 0;
        $output = array();
    
        while($row = mysqli_fetch_array($result)){
            echo "<option>".$output[$rowNumber]['name'] = $row['name']."</option>";
            
            $rowNumber++;
        }
?>