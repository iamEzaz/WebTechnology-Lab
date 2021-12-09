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
<link rel="stylesheet" href="../css/navigation.css">




</head>
<body>



          <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Genre</th><th>Book Price</th><th>Book Published date</th><th>Seller Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BookID"]."</td><td>".$row["BookName"]."</td><td>".$row["Author"]."</td><td>".$row["Publication"]."</td><td>".$row["Genre"]."</td><td>".$row["BookPrice"]."</td><td>".$row["BookPublished"]."</td><td>".$row["SellerName"]."</td><td>";
    }
    echo "</table>";

  } else {
    echo "0 results";
  }


?>

<br/>
<br/>
<br/>

<br/>


</body>
</html>