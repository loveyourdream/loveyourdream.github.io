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

$Accession_no= $_POST['Accessionno'];
$Isbn =$_POST['ISBN'];
$Edi =$_POST['Edition'];
$Vol = $_POST['Volume'];
$Tit=$_POST['Title'];
$No_books =$_POST['Noofbooks'];

$sql = "INSERT INTO books (Accession_no,ISBN,Edition,Volume,Title,No_of_books) VALUES ('$Accession_no', '$Isbn', '$Edi', '$Vol' , '$Tit' , '$No_books')"; 
if (mysqli_query($conn,$sql)) {
		echo "Record inserted";
	header("Location:insert_form.php");
}
else
{

echo "         Record inserted";

}

mysqli_close($conn);
?>