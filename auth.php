<?php
    function checkLogin() {
        global $conn;
    
        if (!isset($_SESSION['email'])) {
            header("location: login.php");
            exit();
        }
    
        $username = $_SESSION['email'];
    
        $sql = "SELECT * FROM welcome WHERE email = '$username'";
        $result = $conn->query($sql);
    
        if ($result === false) {
            die("Error in SQL query: " . $conn->error);
        }

        if ($result->num_rows === 0) {
            header("location: login.php");
            exit();}
        return $username;
    }
?>