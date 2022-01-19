<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add a Receptionist:
<head>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addReceptionistLogic.php" method="POST">
  <table>
   <tr>
    <td>Employee ID: </td>
    <td>
      <select name="employeeid"> 
        <?php include 'getEmployeeIDs.php'?>
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

