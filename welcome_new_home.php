<?php include "connection.php" ?>
        <?php
        
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $service = $_POST['service'];
          $password = $_POST['password'];
          echo $name;
          $query=mysqli_query($conn,"SELECT * FROM welcome WHERE email='$email'");
          $r=mysqli_fetch_row($query);
          if($r==0)
          {
          $stmt = "INSERT INTO welcome (comeid, name, email, phone, service,password) VALUES (NULL, '$name', '$email', '$phone', '$service','$password')";
           if ($conn->query($stmt)) {
             header("location:service.php");
              } else {
                  $error="Failed to record: " . $conn->error;
              }
           }
           else
           {
            $error="You Already have any account!. Please login.";
           }
        }
        ?>
        <p class="property-features">Property Features</p>
        <table>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Home</title>
    <style>
        body {
            background-image: url(/collective_new_home_mode/background.jpg);
            opacity: 0.9;
            background-repeat: no-repeat;
            background-size: cover;
            height: 1000px;
            margin: 0;
            font-family: Arial, sans-serif;
            color: aliceblue;
        }

        a {
            text-decoration: none;
            color: rgb(145, 145, 28);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 150vh;
            margin-top: 50px;
        }

        .form-container {
            width: 400px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            font-size: 18px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: black;
            color: yellow;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }

        .welcome-message {
            font-size: 25px;
            text-align: center;
            color: black;
            background-color: aquamarine;
            padding: 15px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .property-features {
            margin-top: 20px;
        }

        .property-features img {
            width: 150px;
            margin: q0px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        header a {
            color: yellow;
            margin: 0 10px;
            font-size: 18px;
        }

        header a:hover {
            text-decoration: underline;
        }

        #registration-button {
            color: yellow;
            text-align: right;
            font-size: large;
            width: 90px;
            background-color: black;
            margin: 0 10px;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<script>
    function showRegistrationContent() {
            var registrationContent = document.getElementById("display");
            registrationContent.style.display = "block";
        }
</script>

<body style="overflow-X:hidden;">
    <?php include 'header.php' ?>
    <div class="container">
        <button id="registration-button" onclick="showRegistrationContent()">Register</button>
        <a href="/collective_new_home_mode/login.php" target="_self">
            <button style="color: yellow; text-align: right; font-size: large;width:60px; background-color:black;margin: 0 10px;">
                Login
            </button>
        </a>
</p>
        <div id="display" class="form-container">
            <form action="" method="post">
            <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name is" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="123-456-678-345" required>

                <label for="service">Services:</label>
                <select id="service" name="service" style="font-size: 20px;" required>
                    <option value="landlord">Landlord</option>
                    <option value="renter">Renter</option>
                    <option value="admin">Admin</option>
                </select>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="hidden" id="datetime" name="datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <input type="submit" value="Submit" name="send" style="font-size: 20px;">
                
            </form>
        </div>
        <p class="welcome-message">
            <strong>
                Welcome to our website, where renters and landlords come together to find
                their perfect match in the world of property rentals.
                We're excited to have you on board and are dedicated to providing you
                with a user-friendly platform to make your renting and leasing journey effortless.
                Explore, connect, and discover your next rental adventure right here!
            </strong>
        </p>

        <?php include "connection.php" ?>
<?php
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $password = $_POST['password'];
    $datetime = $_POST['datetime'];
    
    $query = mysqli_query($conn, "SELECT * FROM welcome WHERE email='$email'");
    $r = mysqli_fetch_row($query);

    if ($r > 0) {
        $error = "Email is already in use. Please use a different email.";
    } else {
        $stmt = "INSERT INTO welcome (comeid, name, email, phone, service,password,datetime, status) VALUES (NULL, '$name', '$email', '$phone', '$service','$password','$datetime','0')";
        if ($conn->query($stmt)) {
            header("location: service.php");
        } else {
            $error = "Failed to record: " . $conn->error;
        }
    }
}
?>

        ?>
        <p class="property-features">Property Features</p>
        <table>
            <tr>
                <td><img src="/collective_new_home_mode/isoko.jpeg" alt=""></td>
                <td><img src="/collective_new_home_mode/mordenmarket.jpeg" alt=""></td>
                <td><img src="/collective_new_home_mode/icyumba.jpg" alt=""></td>
                <td><img src="/collective_new_home_mode/botique.jpeg" alt=""></td>
            </tr>
        </table>
        <?php include 'tail.php' ?>

