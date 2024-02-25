<?php include 'header.php'; ?>

<h2>Subscribe to Our Newsletter:</h2>
<form name="subscribeForm" method="post" action="subprocess.php" onsubmit="return validateForm()"> 
    <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName" required minlength="3" maxlength="20">
        <span id="firstNameError"></span>
    </div>

    <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName" required minlength="3" maxlength="20">
        <span id="lastNameError"></span>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
        <span id="emailError"></span>
    </div>

    <button type="submit" class="btn btn-primary" name="subscribe">Subscribe</button>
</form>

<script>
// Function to validate the entire form
function validateForm() {
    // Validate each field by calling the appropriate function
    return validateFirstName() && validateLastName() && validateEmail();
}

// Function to validate the first name
function validateFirstName() {
    const firstName = document.getElementById("firstName").value;
    const firstNameError = document.getElementById("firstNameError");
    if(firstName.length < 3 || firstName.length > 20) {
        firstNameError.innerHTML = "First Name must be between 3 & 20 characters";
        return false;
    } else {
        firstNameError.innerHTML = "";
        return true;
    }
}

// Function to validate the last name
function validateLastName() {
    const lastName = document.getElementById("lastName").value;
    const lastNameError = document.getElementById("lastNameError");
    if(lastName.length < 3 || lastName.length > 20) {
        lastNameError.innerHTML = "Last Name must be between 3 & 20 characters";
        return false;
    } else {
        lastNameError.innerHTML = "";
        return true;
    }
}

// Function to validate the email
function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("emailError");
    if(email === "" || !email.includes("@")) {
        emailError.innerHTML = "Please enter a valid email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}

// Event listeners for real-time validation
document.getElementById("firstName").addEventListener("input", validateFirstName);
document.getElementById("lastName").addEventListener("input", validateLastName);
document.getElementById("email").addEventListener("input", validateEmail);
</script>

<?php include 'footer.php'; ?>
