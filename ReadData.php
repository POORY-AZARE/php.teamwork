<?php include 'header.php'; ?>

<?php
include 'pz.php'; 

// SQL query to retrieve data from the 'TestDrives' table
$sql = "SELECT * FROM TestDrives";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Test Drive ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Vehicle Model</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['TestDriveID']}</td>
                <td>{$row['FirstName']}</td>
                <td>{$row['LastName']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['PhoneNumber']}</td>
                <td>{$row['VehicleModel']}</td>
                <td>{$row['Date']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No results found.";
}

// Close the database connection when done
$conn->close();
?>

<?php include 'footer.php'; ?>
