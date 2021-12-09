
<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("../Location: login.php"); //Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
<center>
<h2>BUYER HOME PAGE</h2>
</center>
<h3><p>Hello!  <?php echo $_SESSION["username"]."!";?></p></h3>

<br/><h5><p>Please select one page you want to go</h5></p>

<p><div class="sidenav">
<p><a href="buybook.php">Show all book</a></p>
<p><a href="buyerinfo.php">Show Profile Information</a></p>
<p><a href="updatebuyer.php">Update Profile information</a></p>
  
</div></p>

<h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>
<br/>
 

</body>
</html>
