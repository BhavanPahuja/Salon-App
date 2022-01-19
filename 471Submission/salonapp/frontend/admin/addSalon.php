<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

?>

<!DOCTYPE HTML>
<html>
Add a Salon:
<head>
  <br>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addSalonLogic.php" method="POST">
  <table>
   <tr>
    <td>Salon Name : </td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Phone Number : </td>
    <td><input type="tel" name="phone" placeholder = "xxx xxx xxxx" pattern= "[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" title = "10 digits required." required></td>
   </tr>
   <tr>
    <td>Email : </td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Address : </td>
    <td><input type="text" name="address" required></td>
   </tr>
   <tr>
    <td>Postal Code : </td>
    <td><input type="text" name="postalcode" required></td>
   </tr>
   <tr>
    <td>City : </td>
    <td><input type="text" name="city" required></td>
   </tr>
   <tr>
    <td>State/Province : </td>
    <td><input type="text" name="stateorprovince" required></td>
   </tr>
   <tr>
    <td>Country : </td>
    <td><input type="text" name="country" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>