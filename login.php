<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
padding: 0;
font-family: 'Arial', sans-serif;
background-color: rgb(244, 244, 244);
}

.center-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-form {
    background-color: rgb(255, 204, 204);
    padding: 40px;
    border: 2px solid black;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form label,
.login-form input {
    margin-bottom: 15px;
}

.login-form input {
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    border: 1px solid brown;
    border-radius: 5px;
}

.login-form input[type="submit"] {
    background-color: rgb(30, 92, 55);
    color: white;
    cursor: pointer;
}

    </style>
</head>

<?php include 'connection.php' ?>
<?php
$error = "";
if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
    $error = '<p style="color: red; text-align: center;">Invalid username or password</p>';
}
?>

<body>
    <div class="center-container">
        
        <form class="login-form" action="login_process.php" method="post">
            <label><?php echo $error ?></label><br>
            <label for="email">Enter your email:</label><br>
            <input type="text" placeholder="bebaho@gmail.com" name="email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>


</html>
