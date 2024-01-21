<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM welcome WHERE email = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error in SQL query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $username;
        $row = $result->fetch_assoc();
        $userRole = $row['service'];

        if ($userRole == 'admin') {
            $_SESSION['login_user'] = $username;
            header("Location: dash.php");
            exit();
        } elseif ($userRole == 'landlord') {
            $_SESSION['login_user'] = $username;
            header("Location: rd.php");
            exit();
        } elseif ($userRole == 'renter') {
            $_SESSION['login_user'] = $username;
            header("Location: available2.php");
            exit();
        }
    } else {
        header("Location: login.php?error=invalid");
        exit();        
    }
} else {
    $error = 'Unknown role. Please register.';
    exit();
}


$targetDirectory = "uploads/";

if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$conn->close();
?>
