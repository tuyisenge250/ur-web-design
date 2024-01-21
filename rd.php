<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landlord</title>
    <style>
 body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: rgb(75, 75, 78);
}

.container {
    width: 80%;
    margin: auto;
    border: 10px solid black;
    radius:5px;
}

.top {
    background-color: #333;
    color:
    background-color: white;
    padding: auto;
    text-align: center;
}

.bottom {
    display: flex;
    justify-content: center;
    background-color: white;
    color: rgb(255, 255, 255);
    margin: 20px 0;
}

.left{
    width: 50px
}
.right {
    width: 100%;
    padding: 20px;
    background-color: white;
    color: black;
    border-radius: 5px;
}

.right h1 {
    color: white;
    margin-bottom: 20px;
}

.right p {
    font-size: 18px;
    margin-bottom: 20px;
}

form {
    font-size: 18px;
}

label {
    display: block;
    margin-top: 10px;
}

input,
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #333;
    border-radius: 3px;
    box-sizing: border-box;
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
input[type="radio"] {
    display:;
}

input[type="radio"] + label {
    position: relative;
    padding-left: 10px;
    cursor: pointer;
    display: inline-block;
    line-height: 20px;
    color: black;
}
@media (max-width: 700px) {
    .bottom {
        flex-direction: column;
        align-items: center;
    }

    .left,
    .right {
        width: 100%;
        margin-bottom: 20px;
    }
}
input[type="checkbox"] {
    display: ;
}

input[type="checkbox"] + label {
    display: inline-block;
    margin-right: 20px; 
    position: relative;
    padding-left: 30px;
    cursor: pointer;
    line-height: 20px;
    color: black;
}
input[type="radio"]:checked + label:before {
    background-color: black;
}

input[type="checkbox"] + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 2px;
    width: 16px;
    height: 16px;
    border: 1px solid black;
    border-radius: 3px;
    background-color: white;
    transition: background-color 0.3s;
}
input[type="checkbox"]:checked + label:before {
    background-color: black;
}
    </style>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mtnCheckbox = document.getElementById('mtnCheckbox');
        var airtelCheckbox = document.getElementById('airtelCheckbox');
        var bankCheckbox = document.getElementById('bankCheckbox');

        var mtnDetails = document.getElementById('mtnDetails');
        var bankDetails = document.getElementById('bankDetails');

        mtnCheckbox.addEventListener('change', function () {
            mtnDetails.style.display = mtnCheckbox.checked ? 'block' : 'none';
        });

        airtelCheckbox.addEventListener('change', function () {
            
        });

        bankCheckbox.addEventListener('change', function () {
            bankDetails.style.display = bankCheckbox.checked ? 'block' : 'none';
        });
    });
</script>


<body style="overflow-x:hidden">
<?php include 'header.php'?>
    <div class="container">
        <div class="top">
           
        </div>
        <div class="bottom">
            <div class="left">
                <div class="header"><strong></strong></div>
                <div class="photo">
                    <border style="">
                        <img width="100px" height="100px">
                    </border>
                </div>
                <div class="names"></div>
                <div class="age"></div>
                <div class="numberyouattended"></div>
            </div>
            <div class="right">
                <h1>Welcome, this is your home for doing business with us</h1>
                <p>We are very happy to have you on this site. Building and publishing your business is challenging, but
                    now you have a solution. As a new home, fill out the form, and rest assured, your information will
                    be secure on this site.</p>

                <form action="rd.php" method="post" enctype="multipart/form-data">
                <label for="name">fill your full name</label><br>
            <input type="text" id="name" name="name" placeholder="your name is" required><br>
            <label for="address">location</label><br>
            <input type="text" id="address" name="address" placeholder="location" required><br>
            <label for="kind">choses house you want share</label><br>
            
            <input type="radio"  value="apartment" name="kind">
            <label>apartment</label><br>
            <input type="radio"  name="kind" value="single-family" id="ap">
            <label for="ap">life for family</label><br>
            <input type="radio"  name="kind" value="townhouse" id="si">
            <label for="si">hotel</label><br>
            <input type="radio"  name="kind" value="condo">
            <label>rent_commerical</label><br>
            <input type="radio"  name="kind" value="multiplex">
            <label>slams zone</label><br>
            <label for="pricing">price:</label><br>
            <input type="number" name="price" required><br>
            <label>one who need to be your renter</label><br>
            <select name="propert" required>
                <option>select properties of renter</option>
                <option>one person</option>
                <option>two person</option>
                <option>over 2 or family</option>
                <option>for office</option>
                <option>for  trading</option>
                <option>for short time</option>
                <option>for live long time over one month</option>
            </select><br>
            <label>enter owner use email</label><br>
            <input type="email" placeholder="example@gmail.com" name="email" required><br>
            <label>enter your contact</label><br>
            <input type="tel" placeholder="phone" placeholder="123-456-678-345"  name="phone" required><br>
            <label>upload some picture</label><br>
            <input type="file" value="picture" name="picture" accept="image/*" required><br>
            <label for="description"><strong>Description:</strong></label><br>
        <textarea id="description" rows="6" cols="50" name="character"></textarea><br>
        <label for="description"><strong>more about contract:</strong></label><br>
        <textarea id="displayArea" rows="9" cols="50" name="contract" ></textarea><br>

                    <p class="terms">To approve a property, legal significance is crucial. Only documents with a legal
                        permit, such as a PDF, are accepted. This ensures the authenticity and ownership of the property.
                        Additionally, a photo ID is required to verify the owner's identity. Approval signifies adherence
                        to legal standards, safeguarding both parties involved.</p>

                    <label for="pdfFile">Upload PDF File:</label><br>
                    <input type="file" name="pdfFile" accept=".pdf" required><br>
                    <input type="checkbox" name="agreement" required>Read and Accept Terms and Conditions:<br>
                    <!--<label for="agreement">Read and Accept Terms and Conditions:</label>-->
                    
                    <label for="payment">Choose Payment Method:</label><br>
                    <label for="payment">Choose Payment Method:</label><br>
<input type="checkbox" name="payment[]" value="mtn" id="mtnCheckbox"> MTN Mobile Money<br>
<input type="checkbox" name="payment[]" value="airtel" id="airtelCheckbox"> Airtel Money<br>
<input type="checkbox" name="payment[]" value="bank" id="bankCheckbox"> Bank Account<br>
<div id="mtnDetails" style="display:none;">
    <label for="mtnPhone">Enter your phone number:</label><br>
    <input type="text" name="mtnPhone" id="mtnPhone"><br>
</div>
<div id="bankDetails" style="display:none;">
    <label for="bankName">Enter the name of the bank:</label><br>
    <input type="text" name="bankName" id="bankName"><br>
    
    <label for="accountNumber">Enter your account number:</label><br>
    <input type="text" name="accountNumber" id="accountNumber"><br>
</div>

                    <input type="submit" value="Submit" onclick="return showTerms()">
                </form>

    </div>
    </div>
    </div>
    <script>
        function showTerms() {
            var agreementCheckbox = document.querySelector('input[name="agreement"]');
            var termsSection = document.getElementById('termsSection');

            if (agreementCheckbox.checked) {
                termsSection.style.display = 'block';
                return false;
            } else {
                termsSection.style.display = 'none';
                alert('Please read and accept the terms and conditions.');
                return false;
            }
        }
        </script>
    <?php include "tail.php" ?>
    <?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $location = $_POST['address'];
    $type = isset($_POST['kind']) ? $_POST['kind'] : '';
    $propert = $_POST['propert'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $char = $_POST['character'];
    $price = $_POST['price'];
    $paymentMethods = isset($_POST['payment']) ? implode(", ", $_POST['payment']) : '';
$mtnPhone = isset($_POST['mtnPhone']) ? $_POST['mtnPhone'] : '';
$bankName = isset($_POST['bankName']) ? $_POST['bankName'] : '';
$accountNumber = isset($_POST['accountNumber']) ? $_POST['accountNumber'] : '';
$additionalPaymentInfo = "$mtnPhone|$bankName|$accountNumber";


    $targetImageDirectory = "uploads/images/";

    if (!file_exists($targetImageDirectory)) {
        mkdir($targetImageDirectory, 0777, true);
    }

    $imageFile = $_FILES['picture'];
    $imageFileName = uniqid() . "_" . basename($imageFile['name']);
    $targetImageFile = $targetImageDirectory . $imageFileName;

    if (move_uploaded_file($imageFile['tmp_name'], $targetImageFile)) {
        echo "Image file uploaded successfully";
    } else {
        echo "Error uploading image file";
    }

    $targetPdfDirectory = "uploads/pdfs/";

    if (!file_exists($targetPdfDirectory)) {
        mkdir($targetPdfDirectory, 0777, true);
    }

    $pdfFile = $_FILES['pdfFile'];
    $pdfFileName = uniqid() . "_" . basename($pdfFile['name']);
    $targetPdfFile = $targetPdfDirectory . $pdfFileName;

    if (move_uploaded_file($pdfFile['tmp_name'], $targetPdfFile)) {
        echo "PDF file uploaded successfully";
    } else {
        echo "Error uploading PDF file";
    }

    // Insert data into the database
    $sql = "INSERT INTO landlord (landid, fullname, location, type, email, phone, propert, characte, price, file, pdfcontract, payment, payment_info, status)
        VALUES ('', '$name', '$location', '$type', '$email', '$phone', '$propert', '$char', '$price', '$targetImageFile', '$targetPdfFile', '$paymentMethods', '$additionalPaymentInfo', '0')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

$conn->close();
?>

    
</body>
</html>