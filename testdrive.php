<?php include 'header.php'; ?>

<h2>Book Your Test Drive:</h2>
<form name="testDriveForm" method="post" action="process.php">
    <div class="form-group">
        <label for="FirstName">First Name:</label>
        <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="FirstName" required>
    </div>
    <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="LastName" required>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
    </div>
    <div class="form-group">
        <label for="CarID">Car ID:</label>
        <input type="number" class="form-control" id="CarID" placeholder="Enter the Car ID" name="CarID" required>
    </div>
    <div class="form-group">
        <label for="Date">Test Drive Date:</label>
        <input type="date" class="form-control" id="Date" name="Date" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submitTestDrive">Submit</button>
</form>

<?php include 'footer.php'; ?>
