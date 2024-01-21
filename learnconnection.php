<?php
$host = "localhost";
$dbname = "bewhome";
$user = "ben";
$password = "tuyisenge";
$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("connection fail". $conn->connect_error)}
else{
    echo("connect successfully");
}
$sqr = "SELECT * FROM landlord";
$result = $conn->query($sqr);

while($row = $result->fetch_assoc()){
    echo "name: " . $row[fullname] "<br>";
}
?>