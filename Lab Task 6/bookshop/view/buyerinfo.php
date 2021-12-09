<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dcss.css">


</head>
<body>
<body>
<div>
<h1>Buyer Profile Page</h1>
</div>
<div>
<tr><th><a href="buyerhome.php">Buyery Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/><h4>Your Profile Information are:</h4> 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

if ($userQuery->num_rows > 0) {
  echo "<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>NID</th><th>Type</th><th>DOB</th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["phoneno"]."</td><td>".$row["nid"]."</td><td>".$row["type"]."</td><td>".$row["dob"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>
<br/>
<br/>
<br/>
<!-- <a href="buyerhome.php">Buyer Home Page</a> -->
<br/>
<br/>
<!-- <a href="../control/logout.php">logout</a> -->

</body>
</html>