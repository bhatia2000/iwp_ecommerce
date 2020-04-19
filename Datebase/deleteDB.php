<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli('localhost', 'root');
// Check connection
if ($conn->connect_error)
{
 die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "DROP DATABASE profile";
if ($conn->query($sql) === TRUE)
{
 echo "Database deleted successfully";
} 
else {
 echo "Error deleting database: " . $conn->error;
}
$conn->close();



$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli('localhost', 'root');
// Check connection
if ($conn->connect_error)
{
 die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "DROP DATABASE Store";
if ($conn->query($sql) === TRUE)
{
 echo "Database deleted successfully";
} 
else {
 echo "Error deleting database: " . $conn->error;
}
$conn->close();


?>
