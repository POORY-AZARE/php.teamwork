<?php
if (isset($_POST['TestDrives'])) { // This should match the name attribute of your submit button
    // Retrieve data from the form and store it in variables
    $firstName = $_POST['FirstName'];     
    $lastName = $_POST['LastName'];     
    $email = $_POST['Email'];       
    $scheduledDate = $_POST['ScheduledDate']; // Assuming this is the intended date field
    // Assuming CarID, Status, and OrderID are also received from the form
    $carID = $_POST['CarID'];
    $status = $_POST['Status'];
    $orderID = $_POST['OrderID']; // This might not be needed if it's auto-incremented

    // Include the database connection file
    include 'pz.php'; 

    // Define an SQL query to insert data into the 'TestDrives' table
    $sql = "INSERT INTO TestDrives (CarID, FirstName, LastName, Email, ScheduledDate, Status)
            VALUES (?, ?, ?, ?, ?, ?)"; // Only include fields that are provided by the form

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("isssss", $carID, $firstName, $lastName, $email, $scheduledDate, $status);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If the query was successful, display a success message
        echo "New record added successfully.";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $stmt->error;
    }

    $conn->close();
}
?>
