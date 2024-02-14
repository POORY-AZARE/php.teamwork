<?php
include 'pz.php'; // Database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST['car_id'];
    $action = $_POST['action'];

    if ($action == 'Update Car') {
        // Retrieve form data
        $model = $_POST['model'];
        $price = $_POST['price'];
        // ... add other fields as necessary

        // Prepare an UPDATE statement
        $sql = "UPDATE Cars SET Model = ?, Price = ? WHERE CarID = ?";
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssi", $model, $price, $car_id);
            // ... bind other parameters as necessary

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                echo "Car updated successfully.";
            } else{
                echo "Error: $sql. " . $conn->error;
            }
        }
    } elseif ($action == 'Delete Car') {
        // Prepare a DELETE statement
        $sql = "DELETE FROM Cars WHERE CarID = ?";
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $car_id);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                echo "Car deleted successfully.";
            } else{
                echo "Error: $sql. " .
