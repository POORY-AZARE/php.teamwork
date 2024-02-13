<?php
if (isset($_POST['submitTestDrive'])) {
    // Retrieve data from the form and store it in variables
    $FirstName = $_POST['FirstName'];     
    $LastName = $_POST['LastName'];     
    $Email = $_POST['Email'];       
    $PhoneNumber = $_POST['PhoneNumber']; 
    $VehicleModel = $_POST['VehicleModel'];
    $Date = $_POST['Date'];
    // Include the database connection file
    include 'pz.php'; 

    // Define an SQL query to insert data into the 'TestDriveBookings' table
    $sql = "INSERT INTO TestDriveBookings (FirstName, LastName, Email, PhoneNumber, VehicleModel, Date)
            VALUES ('$FirstName', '$LastName', '$Email', '$PhoneNumber', '$VehicleModel', '$Date')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added successfully.";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
