<?php
if (isset($_POST['subscribe']) && !empty($_POST['email'])) {
    // Retrieve email from POST data
    $email = $_POST['email'];

    // Include the database connection file
    include 'pz.php';

    // Prepare an SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");

    // Bind parameters and execute
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        // Handle error, it could be a duplicate entry or a database error
        if ($conn->errno == 1062) {
            echo "This email is already subscribed.";
        } else {
            echo "An error occurred. Please try again later.";
        }
    }
    
    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
