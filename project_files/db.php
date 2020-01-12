<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="multiuserauth";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

// Check connection
if ($conn->connect_error) {
    die("Could not connect to the database server: " . $conn->connect_error);
}
echo 'db good<br>';
//$con->close();
