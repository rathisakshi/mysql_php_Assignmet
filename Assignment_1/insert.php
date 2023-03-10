<?php
$servername = 'localhost';
$username = 'admin';
$password = 'admin';
$dbname = 'User';
// Create connection
$connn = new mysqli( $servername, $username, $password );
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
    die( 'Connection failed:' . $connn->connect_error );
}
$sql_db = "CREATE DATABASE IF NOT EXISTS User";
if ($connn->query($sql_db) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
if ( isset( $_POST[ 'submit' ] ) ) {
    $id = $_POST[ 'id' ];
    $ptitle = $_POST[ 'ptitle' ];
    $pdesc = $_POST[ 'pdesc' ];
    //sql to create table
    $sql_create = "CREATE TABLE IF NOT EXISTS POST (
  ID INT(30) NOT NULL  PRIMARY KEY,
  PostTitle VARCHAR(30),
  PostDescription VARCHAR(300)
)";

if ($conn->query($sql_create) === TRUE) {
    echo "Table User created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
    $sql = "INSERT INTO POST (ID,PostTitle,PostDescription)
VALUES ($id,'$ptitle','$pdesc')";
    if ( $conn->query( $sql ) === TRUE ) {
        header( 'Location: display.php' );

    } else {
        echo 'Hey user, please enter a valid ID';
    }
}

// // if ( $conn->query( $sql ) === TRUE ) {
// //   echo 'Table Post created successfully';
// // } else {
// //   echo 'Error creating table: ' . $conn->error;
// // }

// //$conn->close();
// ?>

