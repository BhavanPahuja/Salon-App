<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add a Characteristic:
<head>
  <title>Hair Characteristics</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addCharacteristicsLogic.php" method="POST">
  <table>
   <tr>
    <td>Client: </td>
    <td>
      <select name="clientName"> 
        <?php include 'getClientNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td>Color Formula: </td>
    <td>
      <input type="text" name="colorFormula" >
    </td>
   </tr>
   <tr>
    <td>Length: </td>
    <td>
      <input type="text" name="hairLength" >
    </td>
   </tr>
   <tr>
    <td>Texture: </td>
    <td>
      <input type="text" name="hairTexture" >
    </td>
   </tr>
   <tr>
    <td>Style: </td>
    <td>
      <input type="text" name="hairStyle" >
    </td>
   </tr>
   <tr>
    <td>Notes: </td>
    <td>
      <input type="text" name="extraNotes" >
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

