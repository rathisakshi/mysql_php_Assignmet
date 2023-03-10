<?php
$servername = 'localhost';
$username = 'admin';
$password = 'admin';
$dbname = "User";
// Create connection
$conn = new mysqli( $servername, $username, $password);

// Check connection
if ( $conn->connect_error ) {
    die( 'Connection failed: ' . $conn->connect_error );
} else {
    $createdb = "CREATE DATABASE IF NOT EXISTS $dbname ";
    $createtb = " CREATE TABLE IF NOT EXISTS `Login`(`id` INT(6) PRIMARY KEY, `username` VARCHAR(15), `password` VARCHAR(15))";
    $inserttb = "INSERT INTO `Login`(`id`,`username`,`password` ) VALUES ('1','admin','admin')";
    if ( mysqli_query( $conn, $createdb ) ) {
        echo 'Database created ';
        $conn->select_db($dbname);
        if ( mysqli_query( $conn, $createtb ) ) {
            echo 'Table Created ';
            if ( mysqli_query( $conn, $inserttb ) ) {
                echo 'table data inserted ';
            } else {
                echo 'Table data not inserted';
            }

        } else {
            echo 'Table not created';

        }

    } else {
        echo 'Database not created';
    }
}

    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    $sql = 'SELECT `username`,`password` FROM `Login`';
    $result = mysqli_query( $conn, $sql );

    $pass = false;
    $user = False;
    if ( mysqli_num_rows( $result ) > 0 ) {
        while ( $row = mysqli_fetch_assoc( $result ) ) {
            if ( $row[ 'username' ] == $username ) {
                $user = true;
                if ( $row[ 'password' ] == $password ) {
                    $pass = true;

                    break;
                }
            }
        }
    }
    if ( $user ) {
        if ( $pass ) {
            header( 'Location: form.php' );
        } else {
            echo '<p>Invalid Password</p> ';
        }
    } else {
        echo '<p>Invalid Username</p> ';
    }

    //     $sql = "SELECT * FROM `Login` WHERE `username` = '$username' AND `password` = '$password' ";
    //     $result = mysqli_query( $conn, $sql );
    //     $check = mysqli_fetch_array( $result );
    //     //print_r( $check );
    //     if ( isset( $check ) ) {
    //         echo 'Login successful';
    //     } else {

    //         echo 'Please enter correct credentials';
    //     }
    // }
    //
    ?>
