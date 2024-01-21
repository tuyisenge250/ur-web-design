<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px;
            padding: 20px;
        }

        .table {
            border: 1px solid rgb(218, 197, 197);
            background-color: white;
            width: 100%;
            color: black;
            margin-top: 20px;
        }

        td {
            border: 1px solid rgb(218, 197, 197);
            border-radius: 4px;
            padding: 12px;
        }

        tr {
            border: 1px solid black;
            border-radius: 4px;
            padding: 12px;
        }

        #termsLink {
            display: none;
        }

        textarea {
            width: 100%;
            box-sizing: border-box;
            margin-top: 8px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $articleID = $_GET['id'];
    }
    ?>
    <div class="container">
        <table class="table">
            <form method="post">
                <tr>
                    <td colspan="2">
                        Put your person information here
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="first" placeholder="First name" required>
                    </td>
                    <td>
                        <input type="text" name="last" placeholder="Last name" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="email" placeholder="Email" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="number" placeholder="Phone number" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="field" placeholder="Field or job">
                    </td>
                    <td>
                        <input type="text" name="location" placeholder="Location">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="description" placeholder="Description about contract" rows="3"></textarea><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" id="agreeCheckbox" onclick="showTermsLink()">
                        <label for="agreeCheckbox">I agree to the terms and conditions</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="termsLink">
                        <input type="checkbox" name ="terms" required>
                        <a href="#">Terms and Conditions</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <script>
        function showTermsLink() {
            var checkbox = document.getElementById('agreeCheckbox');
            var termsLink = document.getElementById('termsLink');

            if (checkbox.checked) {
                termsLink.style.display = 'block';
            } else {
                termsLink.style.display = 'none';
            }
        }
    </script>
    <?php
    include 'connection.php';

    if (isset($_GET['id'])) {
        $articleID = $_GET['id'];

        // Assuming other form data is available via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST["first"];
            $lname = $_POST["last"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $jobtitle = $_POST["field"];
            $location = $_POST["location"];
            $description = $_POST["description"];

            $q = "INSERT INTO booking (landid, firstname, lastname, email, phone, job, location, discuption,status)
                VALUES ('$articleID', '$fname', '$lname', '$email', '$phone', '$jobtitle', '$location', '$description','0')";

            $result = mysqli_query($conn, $q);

            if (!$result) {
                echo 'failed to insert data' . $conn->error;
            } else {
                echo 'success to insert';
                header('Location: available2.php');
                exit;
            }
        }
    }
?>
</body>

</html>