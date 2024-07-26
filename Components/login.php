<?php

$server = "localhost:3306";
$user = "root";
$passord = "";
$dbname = "hospitaldb";

$conn = mysqli_connect($server, $user, $passord, $dbname);
if (!$conn) {
    echo "eroor";
}

$username = $_POST["username"];
$pwd = $_POST["pass"];

if ($username == "admin" && $pwd == "1234") {
    header("location:admin_dashboard.html") ;
} else {
    echo "Invalid credential";
}

?>