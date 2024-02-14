<?php
include 'pz.php'; // Database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $model = $_POST['model'];
    $price = $_POST['price'];
    // ... add other fields as necessary

    // Prepare an INSERT statement
    $sql = "INSERT INTO Cars (Model, Price) VALUES (?, ?)";
    if($stmt = $conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ss", $model, $price);
        // ... bind other parameters as necessary

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            echo "Car added successfully.";
        } else{
            echo "Error: $sql. " . $conn->error;
        }
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
