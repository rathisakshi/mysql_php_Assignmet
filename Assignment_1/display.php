<?php
$username = 'admin';
$password = 'admin';
$database = 'User';
$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

if ( $mysqli->connect_error ) {
    die( 'Connect Error (' .
    $mysqli->connect_errno . ') ' .
    $mysqli->connect_error );
}

// SQL query to select data from database
$sql = ' SELECT * FROM POST ';
$result = $mysqli->query( $sql );
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<title>User Details</title>
<!-- CSS FOR STYLING THE PAGE -->
<style>
table {
    margin: 0 auto;
    font-size: large;
    border: 1px solid black;
}

h1 {
    text-align: center;
    color: #006600;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT',
    ' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
    background-color: #E4F5D4;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}

.button {
    background-color: #006600;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.btn {
    margin: 2% 0% 0% 36%;
}

h2 {
    text-align: center;
	font-family: sans-serif;
	margin: 3% 0% 4% 0%;
	

}
</style>
</head>

<body>
<h2> POST table records</h2>

<div>

<table>
<tr>
<th>ID</th>
<th>Post Title</th>
<th>Post Description</th>

</tr>

<?php
// LOOP TILL END OF DATA
while ( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
    <!-- FETCHING DATA FROM EACH
    ROW OF EVERY COLUMN -->
    <td>
    <?php echo $rows[ 'ID' ];
    ?>
    </td>
    <td>
    <?php echo $rows[ 'PostTitle' ];
    ?>
    </td>
    <td>
    <?php echo $rows[ 'PostDescription' ];
    ?>
    </td>

    </tr>
    <?php
}
?>
</table>

</div>

<div class = 'btn'>
<form id = 'myform' method = 'GET' action = 'data1.html'>
<input type = 'submit' class = 'button' value = 'Update Record'
onclick = "document.forms['myform'].action='update.html'">
<input type = 'submit' class = 'button' value = 'Delete Record'
onclick = "document.forms['myform'].action='delete.html'">
</form>

</div>

</body>

</html>