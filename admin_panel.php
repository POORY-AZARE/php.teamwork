<?php

session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


include 'pz.php';


?>

<!-- HTML form for adding a new car -->
<h2>Add a New Car</h2>
<form action="add_car.php" method="post">
    <input type="text" name="model" placeholder="Car Model" required>
    <input type="text" name="price" placeholder="Price" required>
    <!-- Add other fields as necessary -->
    <input type="submit" value="Add Car">
</form>

<!-- HTML form for updating/deleting a car -->
<h2>Update/Delete a Car</h2>
<form action="update_delete_car.php" method="post">
    <input type="text" name="car_id" placeholder="Car ID" required>
    <input type="text" name="model" placeholder="New Car Model">
    <input type="text" name="price" placeholder="New Price">

    <input type="submit" name="action" value="Update Car">
    <input type="submit" name="action" value="Delete Car">
</form>
