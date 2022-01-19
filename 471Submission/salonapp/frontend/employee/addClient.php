<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add a Client:
<head>
  <title>Clients</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addClientLogic.php" method="POST">
  <table>
   <tr>
    <td>Salon: </td>
    <td>
    <select name="salonName"> 
        <?php include '../admin/getSalonNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td>Phone Number : </td>
    <td><input type="tel" name="phone" placeholder = "xxx xxx xxxx" pattern= "[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" title = "10 digits required." required></td>
   </tr>
   <tr>
    <td>First Name: </td>
    <td>
      <input type="text" name="firstname" required>
    </td>
   </tr>
   <tr>
    <td>Last Name: </td>
    <td>
      <input type="text" name="lastname" required>
    </td>
   </tr>
   <tr>
    <td>Email : </td>
    <td><input type="email" name="email"></td>
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
    <td>Discount : </td>
    <td><input type="text" name="discount" ></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

