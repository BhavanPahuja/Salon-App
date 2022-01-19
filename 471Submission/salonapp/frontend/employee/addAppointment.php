<?php 
include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>

<!DOCTYPE HTML>
<html>
Add an Appointment:
<head>
  <title>Appointment Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addAppointmentLogic.php" method="POST">
  <table>
   <tr>
    <td>Customer: </td>
    <td>
      <select name="clientName"> 
        <?php include 'getClientNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td>Stylist: </td>
    <td>
      <select name="employeeName"> 
        <?php include 'getEmployeeNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td>Appointment Start Time: </td>
    <td>
    <input type="datetime-local" id="startdatetime" name="startdatetime" required>
    </td>
   </tr>

   <tr>
    <td>Appointment End Time: </td>
    <td>
    <input type="datetime-local" id="enddatetime" name="enddatetime" required>
    </td>
   </tr>
    
   <tr>
    <td>Service Wanted: </td>
    <td>
      <select name="serviceName"> 
        <?php include 'getServiceNames.php'?>
      </select>
    </td>
   </tr>
    <td>Previous Appointment: </td>
    <td>
    <option selected disabled hidden style='display: none' value=''></option>
      <input type="date" id="previousapt" name="previousapt">
    </td>
   </tr>
   <tr>
   <tr>
    <td>Previous Service: </td>
    <td>
      <select name="previousService"> 
      <option selected disabled hidden style='display: none' value=''></option>
        <?php include 'getServiceNames.php'?>
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