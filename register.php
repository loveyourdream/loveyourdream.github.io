<?php
$servername = "localhost";
$username = "root";	
$password = "";
$db ="college";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully            ";

$name =$_POST['name1'];
$email=$_POST['email1'];
$password= $_POST['password1'];


$sql = "INSERT INTO registration (name,email,password) VALUES ('$name', '$email', '$password')"; 
if (mysqli_query($conn,$sql)) {
		echo "Record inserted";
	header("location: Category.php");
}

else
{

echo "         Record not inserted";
  
}

mysqli_close($conn);
?>