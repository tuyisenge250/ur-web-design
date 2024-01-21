<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 32px;
        }

        .adm-buttons {
            display: flex;
            gap: 10px;
            margin-right: auto;
        }

        .adm,
        .adm-tool,
        .adm-delete,
        .adm-clients,
        .adm-publish,
        .adm-update,
        .adm-logout {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    border: none;
    font-size: 20px;
    padding: 10px;
    border-radius: 3px;
    cursor: pointer;
    background-color: #3067c6;
    margin-right: auto;
        }

        .adm-logout {
            background-color: rgb(43, 5, 72);
            color: white;
        }

        .adm:hover,
        .adm-tool:hover,
        .adm-delete:hover,
        .adm-clients:hover,
        .adm-publish:hover,
        .adm-update:hover,
        .adm-logout:hover {
            background-color: rgb(139, 169, 30);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: space-evenly;
            width: 100%;
        }

        .table-container {
            width: 60%;
        }

        .adm-buttons-container {
            width: 35%;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
        }

        .photo-upload {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 80%;
        }

        .table th,
        .table td {
            border: 1px solid gray;
            padding: 8px;
            text-align: left;
        }

        .table tbody tr:nth-child(even) {
            background-color: lightgrey;
        }
        #viewPage {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        z-index: 1000;
    }
    </style>
    <script>
       
        function toggleView() {
        var viewPage = document.getElementById("viewPage");
        var otherContent = document.getElementById("otherContent");

        if (viewPage.style.display === "none") {
            viewPage.style.display = "block";
            otherContent.style.display = "none";
        } else {
            viewPage.style.display = "none";
            otherContent.style.display = "block";
        }
    </script>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="header">
        <h2 color="yellow">Admin</h2>
        <div class="adm-buttons">
            <button class="adm-tool">booking</button>
            <button onclick="Message()" class="adm-delete">Message</button>
            <a href="clients.php"><button class="adm-clients">Clients</button></a>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">Update</button>
            <button onclick="Logout()" class="adm-logout">Logout</button>
        </div>
    </div>

    <div class="container">
    <?php
include("Connection.php");

$q = "SELECT * FROM booking";
$results = mysqli_query($conn, $q);

if (!$results) {
    die('Error in query: ' . mysqli_error($conn));
}

echo "<table class=\"table\">
        <tr bgcolor='#C9C0BB'>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Job/Field</th>
            <th>Status</th>
            <th>Land Email</th>
            <th colspan=3>Action</th>
        </tr>";

while ($r = mysqli_fetch_array($results)) {
    $status = ($r['status'] == 1) ? 'sending' : 'pending';

    $landid = $r['landid']; 
    $p = "SELECT email FROM landlord WHERE landid = '$landid'";
    $re = mysqli_query($conn, $p);

    if (!$re) {
        die('Error in query: ' . mysqli_error($conn));
    }

    echo "<tr>
            <td>" . $r['bookid'] . "</td>
            <td>" . $r['firstname'] . "</td>
            <td>" . $r['lastname'] . "</td>
            <td>" . $r['email'] . "</td>
            <td>" . $r['phone'] . "</td>
            <td>" . $r['job'] . "</td>
            <td>" . $status . "</td>";

    $land = mysqli_fetch_array($re);
    if ($land) {
        echo "<td>" . $land['email'] . "</td>";
    } else {
        echo "<td>No Land Email</td>";
    }

    echo "<td><a href='bookingview.php?userid={$r['bookid']}' onclick='toggleView()'><button>View</button></a></td>
            <td><button>Edit</button></td>
            <td><a href='bookingapproval.php?userid={$r['bookid']}' onclick='toggleView()'><button>sending</button></a></td>
        </tr>";
}

echo "</table>";
?>

    </div>
</body>

</html>