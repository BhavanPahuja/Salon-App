<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add a Stylist:
<head>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addStylistLogic.php" method="POST">
  <table>

  <tr>
    <td>Employee: </td>
    <td>
    <select name="employeeName"> 
        <?php include '../employee/getEmployeeNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

