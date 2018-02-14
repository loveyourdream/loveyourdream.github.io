<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$xml=new DOMDocument("1.0");

$xml->formatOutput=True;
$college=$xml->createElement("college");
$xml->appendChild($college);
$bok=$xml->createElement("Books");
$college->appendChild($bok);

while($row=mysqli_fetch_array($result))
{
		$book=$xml->createElement("Book");
		$bok->appendChild($book);
	
		$Accession_no=$xml->createElement("Accession_no",$row['Accession_no']);
		$book->appendChild($Accession_no);
		$ISBN=$xml->createElement("ISBN",$row['ISBN']);
		$book->appendChild($ISBN);
		$Edition=$xml->createElement("Edition",$row['Edition']);
		$book->appendChild($Edition);		
		$Volume=$xml->createElement("Volume",$row['Volume']);
		$book->appendChild($Volume);
		$Title=$xml->createElement("Title",$row['Title']);
		$book->appendChild($Title);
		$No_of_Books=$xml->createElement("No_of_Books",$row['No_of_Books']);
		$book->appendChild($No_of_Books);		
}	
//echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("reports.xml");
function loadFile($xml, $xsl)
{
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$xslDoc = new DOMDocument();
$xslDoc->load($xsl);

$proc = new XSLTProcessor();
$proc->importStyleSheet($xslDoc);
echo $proc->transformToXML($xmlDoc);
}
loadFile("reports.xml","abc.xsl");
?>
