<?php
include("connection.php");

if (isset($_GET['id'])) {
    $articleID = $_GET['id'];

    $detailsQuery = "SELECT * FROM landlord WHERE landid = $articleID"; 
    $detailsResult = $conn->query($detailsQuery);

    if ($detailsResult === false) {
        die("Error in SQL query: " . $conn->error);
    }

    if ($detailsResult->num_rows > 0){
        $detailsRow = $detailsResult->fetch_assoc();
        $location = $detailsRow['location'];
        $type = $detailsRow['type'];
        $price = $detailsRow['price'];
        $description = $detailsRow['characte'];
        $moreAboutContract = $detailsRow['contract'];
        $imagePath = $detailsRow['file'];
        $email = $detailsRow['email'];
        $id = $detailsRow['landid']
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="styles.css" />
            
        <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-direction: column;
    background-color: #f4f4f4;
    margin: 20px;
    padding: 20px;
}

.top {
    text-align: center;
    background-color: #3498db;
    color: #fff;
    padding: 0px;
}

.bottom {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.left {
    width: 60%;
}

.right {
    width: 35%;
}

p {
    font-size: 18px;
}

textarea {
    width: 100%;
    resize: none;
}

button {
    color: #fff;
    background-color: #27ae60;
    padding: 10px;
    font-size: 20px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #2ecc71;
}

img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}


        </style>
        </head>
        <body style="overflow-x:hidden">
            <div class="container">
                <div class="top">
                    <h2>Details for Article ID: <?php echo $articleID; ?></h2>
                </div>
                <div class="bottom">
                    <div class="left">
                        <p style="font-size: 25px;">
                            <strong>Location:</strong> <?php echo $location; ?><br>
                            <br>
                            <strong>Type:</strong> <?php echo $type; ?><br>
                            <br>
                            <strong>Price:</strong> <?php echo $price; ?>
                        </p>
                        <label for="description"><strong>Description:</strong></label>
                        <textarea id="description" name="description" rows="5" cols="50" readonly><?php echo $description; ?></textarea><br><br>
                        <label for="description"><strong>More about contract:</strong></label>
                        <textarea id="displayArea" rows="6" cols="50" readonly><?php echo $moreAboutContract; ?></textarea>
                        <strong>if want to cantact to landlord if <br>are you satisfied</strong>
                        <?php
                        echo '<a href="booking.php?id=' . $id . '" target="_blank"><button>Booking</button></a>';
                        ?>
                    </div>
                    <div class="right">
                        <?php
                     echo '<img src="' . $imagePath . '" alt="Your Image" width="700px" height="500px">';
                           ?> 
                    </div>
                </div>
            </div>
        </body>
        </html>

        <?php
    } else {
        echo 'Article not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
