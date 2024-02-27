<?php
if (isset($_POST['submitFeedback'])) {
    // Retrieve data from the form and store it in variables
    $Fullname = $_POST['Fullname'];
    $Comment = $_POST['Comment'];
    $Rating = $_POST['Rating'];
    $DateSubmitted = $_POST['DateSubmitted'];
    
    // Include the database connection file
    include 'pz.php';

    // Define an SQL query to insert data into the 'Feedback' table
    $sql = "INSERT INTO Feedback (Fullname, Comment, Rating, DateSubmitted) 
            VALUES (?, ?, ?, ?)";

    // Prepare the SQL statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the prepared statement as strings
        // Note: 's' is for string, 'i' is for integer, 'd' is for double, 'b' is for blob
        $stmt->bind_param("ssis", $Fullname, $Comment, $Rating, $DateSubmitted);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "New feedback record added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
