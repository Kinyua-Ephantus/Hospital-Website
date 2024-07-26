<?php
$server = "localhost:3306";
$user = "root";
$password = "";
$dbname = "hospitaldb";

$connect = mysqli_connect($server, $user, $password, $dbname);
if ($connect) {
    echo "connection successful";
} else {
    echo "an error occured";
}

?>