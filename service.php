<?php
$title = "Service Request";
include 'header.php'; ?>

<h2>Submit Your Service Request:</h2>
<form name="serviceForm" method="post" action="submit_service.php"> 

    <div class="form-group">
        <label for="FirstName">First Name:</label>
        <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="FirstName" required minlength="3" maxlength="20">
        <span id="firstNameError"></span>
    </div>

    <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="LastName" required minlength="3" maxlength="20">
        <span id="lastNameError"></span>
    </div>

    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
        <span id="emailError"></span>
    </div>

    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" name="PhoneNumber" required minlength="8" maxlength="20">
        <span id="phoneError"></span>
    </div>

    <div class="form-group">
    <label for="CarType">Car Type:</label>
    <input type="text" class="form-control" id="CarType" placeholder="Enter your car type" name="CarType" required>
    <span id="CarTypeError"></span>
</div>

    <button type="submit" class="btn btn-primary" name="submitServiceRequest">Submit Service Request</button>
</form>

<script>
// JavaScript validation functions

function validateFirstName() {
    const firstName = document.getElementById("FirstName").value;
    const firstNameError = document.getElementById("firstNameError");
    if (firstName.length < 3 || firstName.length > 20) {
        firstNameError.innerHTML = "First Name must be between 3 & 20 characters";
        return false;
    } else {
        firstNameError.innerHTML = "";
        return true;
    }
}

function validateLastName() {
    const lastName = document.getElementById("LastName").value;
    const lastNameError = document.getElementById("lastNameError");
    if (lastName.length < 3 || lastName.length > 20) {
        lastNameError.innerHTML = "Last Name must be between 3 & 20 characters";
        return false;
    } else {
        lastNameError.innerHTML = "";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById("Email").value;
    const emailError = document.getElementById("emailError");
    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Please enter a valid Email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}

function validatePhoneNumber() {
    const phoneNumber = document.getElementById("PhoneNumber").value;
    const phoneError = document.getElementById("phoneError");
    if (phoneNumber.length < 8 || phoneNumber.length > 20) {
        phoneError.innerHTML = "Phone Number must be between 8 & 20 characters";
        return false;
    } else {
        phoneError.innerHTML = "";
        return true;
    }
}

function validateCarType() {
    const carType = document.getElementById("CarType").value;
    const carTypeError = document.getElementById("CarTypeError");
    if (carType.length < 3 || carType.length > 20) {
        carTypeError.innerHTML = "Car Type must be between 3 & 20 characters";
        return false;
    } else {
        carTypeError.innerHTML = "";
        return true;
    }
}

// Event listeners for real-time validation
document.getElementById("FirstName").addEventListener("input", validateFirstName);
document.getElementById("LastName").addEventListener("input", validateLastName);
document.getElementById("Email").addEventListener("input", validateEmail);
document.getElementById("PhoneNumber").addEventListener("input", validatePhoneNumber);
document.getElementById("CarType").addEventListener("input", validateCarType);
</script>

<?php include 'footer.php'; ?>
