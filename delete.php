<html>
<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname="college";

$conn = new mysqli($server, $user, $password,$dbname);
echo "database connection ready";
// Check connection
if ($conn->connect_error)
	{
die("Connection failed: " . $conn->connect_error);
}
$acc = $_POST['Accessionno'];
$title = $_POST['Title'];
$sql = 'DELETE FROM books WHERE Accession_no="'.$acc.'"';
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("Location:insert_form.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</html>