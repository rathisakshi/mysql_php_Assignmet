

<?php
 $id = $_POST['id'];



$servername = "localhost";
$username = "admin";
$password = "admin";
$db = "User";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "DELETE FROM POST WHERE ID='$id';";

if ($conn->query($sql) === TRUE){
	header("Location: display.php");
} 
else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>

