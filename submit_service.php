<?php
// Check if the 'submitServiceRequest' button in the form was clicked
if (isset($_POST['ServiceRequest'])) {
    // Retrieve data from the form and store it in variables
    $FirstName = $_POST['first_name'];     
    $LastName = $_POST['last_name'];     
    $Email = $_POST['email'];       
    $PhoneNumber = $_POST['contact_number']; 
    $CarType = $_POST['car_type'];

    // Include the database connection file
    include 'pz.php';

    // Define an SQL query to insert data into the 'SERVICE' table
    $sql = "INSERT INTO SERVICE (first_name, last_name, contact_number, car_type, email) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare the SQL statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $FirstName, $LastName, $PhoneNumber, $CarType, $Email);

        // Execute the statement and check if it was successful
        if ($stmt->execute()) {
            echo "New service request added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
