<?php
$title="Feedback";
include 'header.php'; ?>

<h2>Submit Your Feedback:</h2>
<form name="feedbackForm" method="post" action="feedbackProcess.php" required minlength="3" maxlength="20"> 

    <div class="form-group">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" id="Title" placeholder="Enter a title for your feedback" name="Title"  required minlength="3" maxlength="20">
    </div>
    <div class="form-group">
        <label for="Comment">Comment:</label>
        <textarea class="form-control" id="Comment" placeholder="Enter your feedback" name="Comment" required rows="4"required minlength="3" maxlength="100"></textarea>
    </div>
    <div class="form-group">
        <label for="Rating">Rating:</label>
        <select class="form-control" id="Rating" name="Rating" required>
            <option value="">Choose a rating</option>
            <option value="1">1 - Very Poor</option>
            <option value="2">2 - Poor</option>
            <option value="3">3 - Average</option>
            <option value="4">4 - Good</option>
            <option value="5">5 - Excellent</option>
        </select>
    </div>
    <div class="form-group">
        <label for="DateSubmitted">Date:</label>
        <input type="date" class="form-control" id="DateSubmitted" name="DateSubmitted" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submitFeedback">Submit Feedback</button>
</form>

<script>
// function to validate firstname
function validateName (){
const Name= document.getElementById("Name").value;
const NameError= document.getElementById ("NameError");
if(Name.length < 3 || FirstName.length > 20 ){

    NameError.innerHTML= "Name must be between 3 & 20 characters";
    return false ; 
}
else {
    NameError.innerHTML=""; 
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
