<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>

<!DOCTYPE HTML>
<html>
Add a Service:
<head>
  <title>Services</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addServiceLogic.php" method="POST">
  <table>
   <tr>
    <td>Service: </td>
    <td>
      <input type="text" name="serviceOffered" required>
    </td>
   </tr>
   <tr>
    <td>Cost: </td>
    <td>
      <input type="text" name="serviceCost" required>
    </td>
   </tr>
   <tr>
   <tr>
    <td>Equipment To Be Used: </td>
    <td>
      <select name="equipmentName"> 
      <option selected disabled hidden style='display: none' value=''></option>
        <?php include 'getEquipmentNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton" ></td>
   </tr>
   
  </table>
</form>

</body>
</html>