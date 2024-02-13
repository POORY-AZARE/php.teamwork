<?php
// Check if the search form has been submitted
if (isset($_GET['search'])) { // Assuming there's a search button with the name 'search'
    // Retrieve data from the form and store it in variables
    $type = $_GET['type'];
    $make = $_GET['make'];
    $model = $_GET['model'];
    $year = $_GET['year'];
    $price = $_GET['price'];
    $keyword = $_GET['keyword'];

    // Include the database connection file
    include 'pz.php';

    // Start building the SQL query
    $sql = "SELECT * FROM Cars WHERE 1 = 1";
    
    // Append to the SQL query for each filter
    if (!empty($type)) {
        $sql .= " AND Type = '{$type}'";
    }
    if (!empty($make)) {
        $sql .= " AND Make = '{$make}'";
    }
    if (!empty($model)) {
        $sql .= " AND Model = '{$model}'";
    }
    if (!empty($year)) {
        $sql .= " AND Year = {$year}";
    }
    if (!empty($price)) {
        $sql .= " AND Price <= {$price}";
    }
    if (!empty($keyword)) {
        $sql .= " AND (Make LIKE '%{$keyword}%' OR Model LIKE '%{$keyword}%' OR Type LIKE '%{$keyword}%')";
    }

    // Execute the SQL query using the database connection
    $result = $conn->query($sql);
    if ($result) {
        // Fetch all matching records
        $cars = $result->fetch_all(MYSQLI_ASSOC);
        // Display the cars or process them as needed
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
