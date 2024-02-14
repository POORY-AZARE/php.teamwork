<?php include 'header.php'; ?>

<h2>Book Your Test Drive:</h2>
<form name="testDriveForm" method="post" action="process.php"> 
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
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required >
        <span id="emailError"></span>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="number" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" name="PhoneNumber" requiredminlength="8" maxlength="20">
        <span id="phoneError"></span>
    </div>

    <div class="form-group">
        <label for="VehicleModel">Vehicle Model:</label>
        <select class="form-control" id="VehicleModel" name="VehicleModel">
            <option value="Model1">THE MERCEDES MAYBACH</option>
            <option value="Model2">BMW iX M60</option>
            <option value="Model3">BMW i4 M50
ELECTRIC</option>
            <option value="Model4">Tesla Cybertruck</option>
            <option value="Others">lamborghini Revuelto</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Date">Date:</label>
        <input type="date" class="form-control" id="Date" name="Date" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submitTestDrive">Submit</button>
</form>

<script>
// function to validate firstname
function validateFname (){
const FirstName= document.getElementById("FirstName").value;
const firstNameError= document.getElementById ("firstNameError");
if(FirstName.length < 3 || FirstName.length > 20 ){

    firstNameError.innerHTML= "First Name must be between 3 & 20 characters";
    return false ; 
}
else {
    firstNameError.innerHTML=""; 
    return true;
}

}  
// function to validate lastname
function validateLname (){
    const LastName= document.getElementById("LastName").value;
    const lastNameError= document.getElementById ("lastNameError");
 
if(LastName.length < 3 || LastName.length > 20 ){

    lastNameError.innerHTML= "Last Name must be between 3 & 20 characters";
return false ; 
}
else {
    lastNameError.innerHTML=""; 
return true;
}
    
} 
// function to validate email
function validateEmail (){
    const Email= document.getElementById("Email").value;
    const emailError= document.getElementById ("emailError");

if( Email === "" || !Email.includes("@") ){
    emailError.innerHTML= "Please Enter a Valid Email Address";
return false ; 
}
else {
    emailError.innerHTML=""; 
return true;
}

}
// function to validate PhoneNumber
function validatePhoneNumber (){
    const PhoneNumber= document.getElementById("PhoneNumber").value;
    const phoneError= document.getElementById ("phoneError");
if(PhoneNumber.length < 3 || PhoneNumber.length > 20 ){

    phoneError.innerHTML= "Phone Number must be between 8 & 20 number";
return false ; 
}
else {
    phoneError.innerHTML=""; 
return true;
}

}

// event listeners for real time validation
document.getElementById("FirstName").addEventListener("input", validateFname);
document.getElementById("LastName").addEventListener("input", validateLname);
document.getElementById("Email").addEventListener("input", validateEmail);
document.getElementById("PhoneNumber").addEventListener("input", validatePhoneNumber);

</script>

<?php include 'footer.php'; ?>