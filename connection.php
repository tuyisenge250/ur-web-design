<?php
$host = 'localhost';
$dbname= 'newhome';
$user = 'ben';
$password = 'tuyisenge';

$conn = new mysqli($host, $user,  $password, $dbname);

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
echo "";

$targetDirectory = "uploads/";

if (!is_dir($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}
?>

