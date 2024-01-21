<?php

include 'connection.php';

if (isset($_POST['propertyId'])) {
    $propertyId = $_POST['propertyId'];

    $updateQuery = "UPDATE welcome SET status = 1 WHERE comeid = $propertyId";

    if ($conn->query($updateQuery) === TRUE) {
        $response = array('success' => true);
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'error' => $conn->error);
        echo json_encode($response);
    }
} else {
    $response = array('success' => false, 'error' => 'PropertyId not provided');
    echo json_encode($response);
}

$conn->close();

?>