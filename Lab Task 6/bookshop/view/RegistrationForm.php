
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>



<!-- <link href ="../css/frontback.css" rel="StyleSheet" type="text/css"> -->

</head>
<br>

  <fieldset>
  <fieldset>			
<legend align="left"><b> REGISTRATION</b></legend>
<br>
<tr>
<form name="myform" method="post" action="../databasecreation/userinput.php"   enctype="multipart/form-data">
<td><label for="firstname">First Name:</label></td> 
<td><input type="text" name="firstname"><br></td>
</tr>

<hr>
<tr>
<td><label for="email">Email:</label></td>
<td><input type="email" name="email"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="uname">User Name:</label></td>
<td><input type="text" name="username"placeholder="Example:xxx2626"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="passwor">Password:</label></td>
<td><input type="password" name="password"placeholder="At least 6 digit"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="cpass">Confirm Password:</label></td>
<td><input type="password" name="cpassword"></td><?php if(isset($_SESSION["wrong"])){echo $_SESSION["wrong"];unset($_SESSION["wrong"]);} ?>
</tr>
<br>
<hr>
<tr>

<fieldset>
<td><label for="address">Address:</label></td>
<td><input type="text" name="address"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="phoneno">Phone number:</label></td>
<td><input type="number" name="phoneno"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="nid">National Id no:</label></td>
<td><input type="number" name="nid"></td>
</fieldset>
<hr>
<fieldset>
<legend align="left">Gender</legend>
</tr>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</fieldset>
<hr>
<fieldset>
<legend align="left">Type of user</legend>
</tr>
<input type="radio" id="buyer" name="type" value="buyer">
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller">
  <label for="seller">Seller</label>
  <input type="radio" id="dguy" name="type" value="dguy">
  <label for="dguy">Delivery Guy</label>
</fieldset>

<hr>

<fieldset>
  <legend align="left">Date of Birth</legend>
  <input type="date" name="dob"><label for="Name" required></label>
  </fieldset>
  <hr>
<fieldset>
<legend align="left">Profile Picture</legend> 
<label for="img">Profile Pic:</label>
<input type="file" enctype="multipart/form-data" name="image" id="img" required>
</fieldset>
<hr>
<fieldset>
<br>
<button id="submitbtn" onclick="validation()">submit</button>
<input type="Reset"> <br>
<br/>
<tr><th><a href="login.php">Go to login page</a></th>
<!-- <input style="display.none;" type="submit"> -->

</form> 
</table>
</table>
</table>

</head>
</html>
</form>
