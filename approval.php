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
            margin: auto; /* Center the container */
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

$q = "SELECT * FROM landlord WHERE landid=$id";
$results = mysqli_query($conn, $q);
echo $id;

if (!$results) {
    die("Something went wrong." . mysqli_error($conn));
}

if ($row = mysqli_fetch_array($results)) {
    echo '<form action="" method="post">';
    echo '<table>';
    echo '<tr>';
    echo '<td colspan="2">';
    echo '<h2><a href="dash.php">Back to Dashboard</a></h2>';
    echo '<hr />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan="2">';
    echo '<img src="' . $row['file'] . '" alt="House Image">';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="name">Image name:</label></td>';
    echo '<td>' . $row['fullname'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="price">Price:</label></td>';
    echo '<td>' . $row['price'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="LOCATION">LOCATION:</label></td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><label for="Phone">Phone number:</label></td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan="2">';
    echo '<label for="pdfcontract">PDF Contract:</label><br>';
    echo '<iframe src="' . $row['pdfcontract'] . '" width="100%" height="500px" style="border: none;"></iframe>';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan="2">';
    echo '<button type="button" class="approval-btn" onclick="approveProperty(' . $row['landid'] . ')">Approval</button>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</form>';
}
?>



        

    </div>

    <script>
        function approveProperty(propertyId) {
            var confirmation = confirm("Are you sure you want to approve this property?");
            if (confirmation) {
                fetch('approveProperty.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'propertyId=' + propertyId,
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Property approved successfully.');
                            // Optionally, you can update the UI here
                        } else {
                            alert('Error approving property: ' + data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }
    </script>
</body>

</html>


