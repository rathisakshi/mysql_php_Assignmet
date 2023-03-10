
<?php
 $id = $_POST['id'];
 $ptitle = $_POST['ptitle'];
 $pdesc = $_POST['pdesc'];


$servername = "localhost";
$username = "admin";
$password = "admin";
$db = "User";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
if($ptitle == null){
    $sql = "update POST set PostDescription='$pdesc' where ID='$id'";

}
if($pdesc == null){
    $sql = "update POST set PostTitle='$ptitle' where ID='$id'";

}
else{
$sql = "update POST set PostTitle='$ptitle', PostDescription='$pdesc' where ID='$id'";
}



if ($conn->query($sql) === TRUE) {
    header("Location: display.php");
	// echo "Records updated: ".$id."-".$ptitle."-".$pdesc;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
