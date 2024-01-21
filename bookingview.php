<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 600px;
            margin: auto;
            margin-top: 20px;
        }

        nav {
            background-color: #333;
            color: #ffcc00;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        nav span {
            font-size: 1.5em;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        td a {
            color: #ffcc00;
            text-decoration: none;
            padding: 10px;
            background-color: #1E5C37;
            border-radius: 5px;
            display: inline-block;
        }

        td a:hover {
            background-color: #135225;
        }

        h2 {
            color: #ffcc00;
            margin-top: 20px;
        }

        form {
            margin: 20px;
        }

        img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .approval-btn {
            width: 100%;
            text-align: center;
            font-size: 16px;
            color: #fff;
            background-color: #3067c6;
            padding: 10px;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .approval-btn:hover {
            background-color: #1E5C37;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <span>This is a way to approve property and display to the customer. Be careful!</span>
        </nav>

        <?php
include "connection.php";
$id = $_GET['userid'];

$q = "SELECT * FROM booking WHERE bookid=$id";
$results = mysqli_query($conn, $q);

if (!$results) {
    die("Something went wrong." . mysqli_error($conn));
}

if ($r = mysqli_fetch_array($results)) {
    $status = ($r['status'] == 1) ? 'sending' : 'send';

    echo '<table>';
    echo '<tr>';
    echo '<td><label for="name">first name:</label></td>';
    echo '<td>' . $r['firstname'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">last name:</label></td>';
    echo '<td>' . $r['lastname'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">Email:</label></td>';
    echo '<td>' . $r['email'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $r['phone'] . '</td>';
    echo '<td><label for="name">Phone:</label></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">discuption:</label></td>';
    echo '<td>' . $r['discuption'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">phone:</label></td>';
    echo '<td>' . $r['phone'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">Status/td>';
    echo '<td>' . $status . '</td>';
    echo '</tr>';
    echo '</table>';
    echo '<br>';
}
?>