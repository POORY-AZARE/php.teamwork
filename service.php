<?php include 'header.php'; ?>

<h2>Service Request Form:</h2>
<form name="serviceForm" method="post" action="submit_service.php"> 
    <div class="form-group">
        <label for="FirstName">First Name:</label>
        <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="first_name" required minlength="3" maxlength="20">
        <span id="firstNameError"></span>
    </div>

    <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="last_name" required minlength="3" maxlength="20">
        <span id="lastNameError"></span>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="email" required >
        <span id="emailError"></span>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" name="contact_number" required minlength="8" maxlength="20">
        <span id="phoneError"></span>
    </div>

    <div class="form-group">
        <label for="CarType">Car Type:</label>
        <input type="text" class="form-control" id="CarType" placeholder="Enter your car type" name="car_type" required>
    </div>
    <button type="ServiceRequest" class="btn btn-primary" name="ServiceRequest">Submit</button>
</form>

<script>
// JavaScript validation functions...

// Similar to the above, you will add event listeners for real-time validation
// and the corresponding validate functions for each input field.

// Add your JavaScript validation here...

</script>

<?php include 'footer.php'; ?>
