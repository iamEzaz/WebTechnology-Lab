<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";//including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);
//below is query string
$qry = "CREATE TABLE inventory (
 BookID varchar(10) NOT NULL,
  BookName varchar(30) NOT NULL,
  Author varchar(30) NOT NULL,
  Publication varchar(50) NOT NULL,
  Genre varchar(15) NOT NULL,
  BookPrice double NOT NULL,
  BookPublished date NOT NULL,
  SellerName varchar(20) NOT NULL
)";
$res = $conn->query($qry);//execute query
if($res)
{ echo "table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>
