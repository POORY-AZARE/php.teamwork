<?php include 'header.php'; ?>

<h2>Service Request Form:</h2>
<form name="serviceForm" method="post" action="submit_service.php"> 
    <div class="form-group">
        <label for="FirstName">First Name:</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required minlength="3" maxlength="20">
        <span id="firstNameError"></span>
    </div>

    <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required minlength="3" maxlength="20">
        <span id="lastNameError"></span>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required >
        <span id="emailError"></span>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="text" class="form-control" id="contact_number" placeholder="Enter your phone number" name="contact_number" required minlength="8" maxlength="20">
        <span id="phoneError"></span>
    </div>

    <div class="form-group">
        <label for="CarType">Car Type:</label>
        <input type="text" class="form-control" id="car_type" placeholder="Enter your car type" name="car_type" required>
        <span id="CarTypeError"></span>
    </div>
    <button type="submit" class="btn btn-primary" name="ServiceRequest">Submit</button>
</form>

<script>
// JavaScript :

function validateFirstName() {
    const first_name = document.getElementById("first_name").value;
    const firstNameError = document.getElementById("firstNameError");
    if (first_name.length < 3 || first_name.length > 20) {
        firstNameError.innerHTML = "First Name must be more than 3 & less than 20 characters";
        return false;
    } else {
        firstNameError.innerHTML = "";
        return true;
    }
}

function validateLastName() {
    const last_name = document.getElementById("last_name").value;
    const lastNameError = document.getElementById("lastNameError");
    if (last_name.length < 3 || last_name.length > 20) {
        lastNameError.innerHTML = "Last Name must be more than 3 & less than 20 characters";
        return false;
    } else {
        lastNameError.innerHTML = "";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("emailError");
    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Please enter a correct type of  Email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}

function validatePhoneNumber() {
    const contact_number = document.getElementById("contact_number").value;
    const phoneError = document.getElementById("phoneError");
    if (contact_number.length < 8 || contact_number.length > 20) {
        phoneError.innerHTML = "Phone Number must be more than 8 & less than 20 characters";
        return false;
    } else {
        phoneError.innerHTML = "";
        return true;
    }
}

function validateCarType() {
    const car_type = document.getElementById("car_type").value;
    const carTypeError = document.getElementById("CarTypeError");
    if (car_type.length < 3 || car_type.length > 20) {
        carTypeError.innerHTML = "Car Type must be more than 3 & less than 20 characters";
        return false;
    } else {
        carTypeError.innerHTML = "";
        return true;
    }
}

// result of submiting:
document.getElementById("first_name").addEventListener("input", validateFirstName);
document.getElementById("last_name").addEventListener("input", validateLastName);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("contact_number").addEventListener("input", validatePhoneNumber);
document.getElementById("car_type").addEventListener("input", validateCarType);
</script>

<?php include 'footer.php'; ?>
