<html>
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
echo "Connected successfully";

//Create table
$sql="CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2";

if ($conn->query($sql) === TRUE) {
    echo " TABLE IS created successfully";
} else {
    echo "Error creating TABLE: " . $conn->error;
}


$conn->close();
?>
</html>