<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitFeedback'])) {
    // Validation
    $errors = array();

    // Check if Full Name is not empty and within the specified length
    if (empty($_POST['Fullname']) || strlen($_POST['Fullname']) < 3 || strlen($_POST['Fullname']) > 20) {
        $errors['Fullname'] = "Full Name must be between 3 & 20 characters";
    } else {
        $Fullname = $_POST['Fullname'];
    }

    // Check if Comment is not empty and within the specified length
    if (empty($_POST['Comment']) || strlen($_POST['Comment']) < 3 || strlen($_POST['Comment']) > 100) {
        $errors['Comment'] = "Comment must be between 3 & 100 characters";
    } else {
        $Comment = $_POST['Comment'];
    }

    // Check if Rating is selected
    if (!isset($_POST['Rating']) || $_POST['Rating'] === "") {
        $errors['Rating'] = "Please choose a rating";
    } else {
        $Rating = $_POST['Rating'];
    }

    // Check if Date Submitted is not empty and in the correct format
    if (empty($_POST['DateSubmitted']) || !strtotime($_POST['DateSubmitted'])) {
        $errors['DateSubmitted'] = "Please select a valid date";
    } else {
        $DateSubmitted = date("Y-m-d", strtotime($_POST['DateSubmitted']));
    }

    // If there are no validation errors, proceed to insert data into the database
    if (empty($errors)) {
        // Include the database connection file
        include 'pz.php';

        // Define an SQL query to insert data into the 'Feedback' table
        $sql = "INSERT INTO Feedback (Fullname, Comment, Rating, DateSubmitted) 
                VALUES (?, ?, ?, ?)";

        // Prepare the SQL statement to prevent SQL injection
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters to the prepared statement as strings
            $stmt->bind_param("ssis", $Fullname, $Comment, $Rating, $DateSubmitted);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // Close statement
                $stmt->close();

                // Close the database connection
                $conn->close();

                // Redirect to a thank you page or display a success message
                header("Location: car.shop.php");
                exit();
            } else {
                $errors['general'] = "Error: Unable to add feedback. Please try again later.";
            }
        } else {
            $errors['general'] = "Error: Unable to prepare SQL statement.";
        }

        // Close the database connection
        $conn->close();
    }
}
?>

