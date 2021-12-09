<?php
include('../control/logincheck.php');
$BookName_error=$BuyerName_error=$BuyerPhoneNumber_error=$SellerName_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["username"])){
    $UserName_error = "username is required Tania";

  }
  if(empty($_POST["password"])){
    $Password_error = "password is required Tania";

  }
  if(empty($_POST["type"])){
    $Type_error = "type is required Tania";

  }
  
}
if(isset($_SESSION['username']) ){
  if($type=="seller")
  {
   header("location: seller_home.php");
  }
  else if($type=="dguy")
  {
   header("location: dguy.php");
  }
  else if($type=="admin")
  {
   header("location: adminhome.php");
  }
  else
  {
   header("location: buyerhome.php");
  }

} 
?>
<!DOCTYPE html>
<html>
<head>


</head>
<head>

</head>
<body>



<h1>Welcome To Online Book Shop</h1>
<h2>LOGIN</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><input id="username" type="text" name="username" placeholder="Enter your valid username" ></p>
    <p><input id="password" type="password" name="password" placeholder="Enter you valid password" ></p>
    <p><label id="usernameErr"></label></p>
    <p><label id="passwordErr"></label></p>
    <fieldset>
<legend align="middle" size>User Type</legend>
</tr>
<center>
  <input type="radio" id="admin" name="type" value="admin">
  <label for="admin">Admin</label>
  <input type="radio" id="buyer" name="type" value="buyer">
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller">
  <label for="other">Seller</label>
  <input type="radio" id="dguy" name="type" value="dguy">
  <label for="dguy">Delivery Guy</label>
  </center>
</fieldset>

    <p><input id="login"  name="login" type="submit" value="LOGIN"></p>
    <p><label id="typeErr"></label></p>

</form>
<br>
<h3>Don't you have an account?</h3> 
<p><a href="RegistrationForm.php">REGISTRATION</a></p
>



<br>


</body>
</html>
