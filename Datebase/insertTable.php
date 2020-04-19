<?php
$conn=new mysqli("localhost","root","","profile");
if($conn->connect_error)
{
    die ("Connection Failed : ".$conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE details (Name VARCHAR(100) NOT NULL,Phone INT(10) NOT NULL,Email VARCHAR(50) NOT NULL PRIMARY KEY, Password VARCHAR(50) NOT NULL )";
if ($conn->query($sql) === TRUE) 
{
 echo "Table details created successfully";
} 
else 
{
 echo "Error creating table: " . $conn->error;
}
$conn->close();


$conn=new mysqli("localhost","root","","Store");
if($conn->connect_error)
{
    die ("Connection Failed : ".$conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE Record (Name VARCHAR(200),Branch VARCHAR(10),Image VARCHAR(200),Price INT(10),Description VARCHAR(2000),Year INT(11),Id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT)";
if ($conn->query($sql) === TRUE) 
{
 echo "Table details created successfully";
} 
else 
{
 echo "Error creating table: " . $conn->error;
}
$conn->close();


$conn=new mysqli("localhost","root","","Cart");
if($conn->connect_error)
{
    die ("Connection Failed : ".$conn->connect_error);
}
// sql to create table

$sql = "CREATE TABLE Mycart (Id INT(11) NOT NULL,Name VARCHAR(200),Price INT(10),Image VARCHAR(200))";
if ($conn->query($sql) === TRUE) 
{
 echo "Table details created successfully";
} 
else 
{
 echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
