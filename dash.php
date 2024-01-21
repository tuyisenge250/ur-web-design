
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
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
            color: yellow;
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
            color: white;
            margin-right: auto;
        }

        .adm-logout {
            background-color: rgb(43, 5, 72);
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
            margin: 20px;
        }

        .table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 100%;
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
        <script>
    function logout() {
        window.location.href = 'welcome_new_home.php';
    }

        function toggleView() {
            var viewPage = document.getElementById("viewPage");

            if (viewPage.style.display === "none") {
                viewPage.style.display = "block";
            } else {
                viewPage.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="header">
        <h2>Admin</h2>
        <div class="adm-buttons">
            <a href="bookingfetch.php"><button class="adm-tool">booking</button></a>
            <button onclick="Message()" class="adm-delete">Message</button>
            <a href="clients.php"><button class="adm-clients" onclick="ViewClients()">Clients</button></a>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">payment</button>
            <a href="welcome_new_home.php" ><button onclick="Logout()" class="adm-logout">Logout</button></a>
        </div>
    </div>

    <div class="container">
        <?php
        include("Connection.php");
        $q = "SELECT * FROM landlord";
        $results = mysqli_query($conn, $q);
        echo "<table class=\"table\">
                <tr bgcolor='#C9C0BB'>
                    <th>ID </th>
                    <th>HOUSE</th>
                    <th>HOUSENAME </th>
                    <th>PRICE</th>
                    <th>LOCATION </th>
                    <th>PHONE</th>
                    <th>Status</th>
                    <th colspan=3>ACTION </th>
                </tr>";
        while ($r = mysqli_fetch_array($results)) {
            $status = ($r['status'] == 1) ? 'Approved' : 'Not Approved';
            echo "<tr>
                    <td>" . $r['landid'] . "</td>
                    <td>" . $r['file'] . "</td>
                    <td>" . $r['fullname'] . "</td>
                    <td>" . $r['price'] . "</td>
                    <td>" . $r['location'] . "</td>
                    <td>" . $r['phone'] . "</td>
                    <td>" . $status . "</td>
                    <td><a href='view.php?userid=$r[landid]' onclick='toggleView()'><button>View</button></a></td>
                    <td><button>Edit</button></td>
                    <td><a href='approval.php?userid=$r[landid]' onclick='toggleView()'><button>Approval</button></a></td>
                </tr>";
        }
        ?>
    </div>
</body>2

</html>

