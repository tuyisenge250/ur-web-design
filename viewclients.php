<!DOCTYPE html>
<html lang="en">

<head>
    <title>View User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        input {
            padding: 10px;
            width: calc(100% - 20px);
            margin-bottom: 15px;
            border: 1px solid #333;
            border-radius: 3px;
            box-sizing: border-box;
            color: #333;
            background-color: #fff;
        }

        input[type="submit"] {
            width: 100%;
            text-align: center;
            font-size: 16px;
            color: #fff;
            background-color: #1E5C37;
            padding: 10px;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="image"] {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <span>views profile of clients</span>
            <table>
                <tr>
                    
                </tr>
            </table>
        </nav>

        <table>
            <tr>
                <td></td>
                <td rowspan="7" valign="top">
                    <h2><a href="dash.php">Dashboard</a></h2>
                    <hr/>
                    <?php
                    include "connection.php";
                    $id = $_GET['userid'];

                    $q = "SELECT * FROM welcome WHERE comeid=$id";

                    $results = mysqli_query($conn, $q);
                    if (!$results) {
                        die("Something went wrong." . mysqli_error($conn));
                    }
                    if ($row = mysqli_fetch_array($results)) {
                    ?>
                        <form action="" method="post">
                            <table>
                                <tr>
                                <td><label for="name">name:</label></td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td><label for="name">Email:</label></td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><label for="price">datatime:</label></td>
                                    <td><?php echo $row['datetime']; ?></td>
                                </tr>
                                <tr>
                                    <td><label for="LOCATION">service:</label></td>
                                    <td><?php echo $row['service']; ?></td>
                                </tr>
                                <tr>
                                    <td><label for="Phone">Phone number:</label></td>
                                    <td><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                    <td><label for="Phone">staus:</label></td>
                                    <td><?php echo $row['status']; ?></td>
                                </tr>
                            </table>
                        </form>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>