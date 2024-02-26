<?php
// Check if the form submit button was clicked
if (isset($_POST['submitCarInfo'])) {
    // Retrieve data from the form and store it in variables
    $Make = $_POST['Make'];     
    $Model = $_POST['Model'];     
    $Year = $_POST['Year'];       
    $Price = $_POST['Price']; 
    $Type = $_POST['Type'];
    
    // Include the database connection file
    include 'db_connection.php';

    // Define an SQL query to insert data into the 'Cars' table
    $sql = "INSERT INTO Cars (Make, Model, Year, Price, Type)
            VALUES (?, ?, ?, ?, ?)";

    // Prepare the SQL statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the prepared statement as strings
        $stmt->bind_param("ssids", $Make, $Model, $Year, $Price, $Type);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            // If the query was successful, display a success message
            echo "New car record added successfully";
        } else {
            // If there was an error in the query, display an error message
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>