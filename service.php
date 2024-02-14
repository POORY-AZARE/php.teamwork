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
// function to validate firstname
function validateFname (){
const FirstName= document.getElementById("FirstName").value;
const firstNameError= document.getElementById ("firstNameError");
if(FirstName.length < 3 || FirstName.length > 20 ){

    firstNameError.innerHTML= "First Name is wrong, it should be more than 3 and less than 20.";
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

    lastNameError.innerHTML= "Last Name is wrong, it should be more than 3 and less than 20.";
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
    emailError.innerHTML= "Your Email Address is not Valid, Please try again.";
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

    phoneError.innerHTML= "Phone Number is wrong, it should be more than 3 and less than 20.";
return false ; 
}
else {
    phoneError.innerHTML=""; 
return true;
}
function validateCarType (){
    const CarType= document.getElementById("CarType").value;
    const CarType= document.getElementById ("CarType");
if(CarType.length < 2 || CarType.length > 20 ){

    CarTypeError.innerHTML= "CarTyp is wrong, it should be more than 2 and less than 20.";
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
document.getElementById("CarType").addEventListener("input", validateCarType);


</script>

<?php include 'footer.php'; ?>
