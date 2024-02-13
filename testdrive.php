<?php include 'header.php'; ?>

<h2>Book Your Test Drive:</h2>
<form name="testDriveForm" method="post" action="process.php">
    <div class="form-group">
        <label for="FirstName">First Name:</label>
        <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="FirstName" required minlength="3" maxlength="30">
        <span id = "nameError"></span>
    </div>

    <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="LastName" required>
        <span id = "nameError"></span>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
        <span id = "emailError"></span>
    </div>
    <div class="form-group">
        <label for="CarID">Car ID:</label>
        <input type="number" class="form-control" id="CarID" placeholder="Enter the Car ID" name="CarID" required>
        <span id = "caridError"></span>
    </div>
    <div class="form-group">
        <label for="Date">Test Drive Date:</label>
        <input type="date" class="form-control" id="Date" name="Date" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submitTestDrive">Submit</button>
</form>
<script>
    // function for name 
    function validateName() {
    const name= document.getElementById("name").valu;
    const nameEroor= document.getElementById("nameEroor")

    if(name.length < 3 || name.length > 20){
        nameError.innerHtml = "Name must be between 3 & 20 characters";
        return false ;
    }
    else{
        nameError.innerHTML = "";
        return true;
    }
    }

        // function for email 
        function validateEmail() {
            const name= document.getElementById("email").valu;

    }
            // function for carid 
            function validateCarID() {
                const name= document.getElementById("carid").valu;


    }
// event listeners for real time validation
document.getElementById("name").addEventListener("input", )
</script>


<?php include 'footer.php'; ?>
