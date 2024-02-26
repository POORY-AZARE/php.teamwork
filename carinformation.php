<?php include 'header.php'; ?>

<h2>Enter Car Information:</h2>
<form name="carInfoForm" method="post" action="process_car.php">
    <div class="form-group">
        <label for="Make">Make:</label>
        <input type="text" class="form-control" id="Make" placeholder="Enter car make" name="Make" required minlength="2" maxlength="50">
        <span id="makeError"></span>
    </div>

    <div class="form-group">
        <label for="Model">Model:</label>
        <input type="text" class="form-control" id="Model" placeholder="Enter car model" name="Model" required minlength="1" maxlength="50">
        <span id="modelError"></span>
    </div>

    <div class="form-group">
        <label for="Year">Year:</label>
        <input type="number" class="form-control" id="Year" placeholder="Enter car year" name="Year" required min="1900" max="<?php echo date("Y"); ?>">
        <span id="yearError"></span>
    </div>

    <div class="form-group">
        <label for="Price">Price:</label>
        <input type="text" class="form-control" id="Price" placeholder="Enter car price" name="Price" required pattern="^\d+(\.\d{1,2})?$">
        <span id="priceError"></span>
    </div>

    <div class="form-group">
        <label for="Type">Type:</label>
        <input type="text" class="form-control" id="Type" placeholder="Enter car type" name="Type" required minlength="1" maxlength="50">
        <span id="typeError"></span>
    </div>

    <button type="submit" class="btn btn-primary" name="submitCarInfo">Submit</button>
</form>

<script>
// Validate Make
function validateMake() {
    const make = document.getElementById("Make").value;
    const makeError = document.getElementById("makeError");
    if (make.length < 2  make.length > 50) {
        makeError.innerHTML = "Make must be between 2 and 50 characters";
        return false;
    } else {
        makeError.innerHTML = "";
        return true;
    }
}

// Validate Model
function validateModel() {
    const model = document.getElementById("Model").value;
    const modelError = document.getElementById("modelError");
    if (model.length < 1  model.length > 50) {
        modelError.innerHTML = "Model must be between 1 and 50 characters";
        return false;
    } else {
        modelError.innerHTML = "";
        return true;
    }
}

// Validate Year
function validateYear() {
    const year = document.getElementById("Year").value;
    const yearError = document.getElementById("yearError");
    if (year < 1900  year > new Date().getFullYear()) {
        yearError.innerHTML = "Year must be between 1900 and " + new Date().getFullYear();
        return false;
    } else {
        yearError.innerHTML = "";
        return true;
    }
}

// Validate Price
function validatePrice() {
    const price = document.getElementById("Price").value;
    const priceError = document.getElementById("priceError");
    const regex = /^\d+(\.\d{1,2})?$/;
    if (!regex.test(price)) {
        priceError.innerHTML = "Price must be a number with up to two decimal places";
        return false;
    } else {
        priceError.innerHTML = "";
        return true;
    }
}

// Validate Type
function validateType() {
    const type = document.getElementById("Type").value;
    const typeError = document.getElementById("typeError");
    if (type.length < 1  type.length > 50) {
        typeError.innerHTML = "Type must be between 1 and 50 characters";
        return false;
    } else {
        typeError.innerHTML = "";
        return true;
    }
}

// Event listeners for real-time validation
document.getElementById("Make").addEventListener("input", validateMake);
document.getElementById("Model").addEventListener("input", validateModel);
document.getElementById("Year").addEventListener("input", validateYear);
document.getElementById("Price").addEventListener("input", validatePrice);
document.getElementById("Type").addEventListener("input", validateType);
</script>

<?php include 'footer.php'; ?>