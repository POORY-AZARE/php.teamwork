<?php
$title = "Advance search";

include 'header.php'; ?>

<h2>Input Car Information Below:</h2>
<form name="carFeaturesForm" method="post" action="submitCarFeatures.php">
    <div class="form-group">
        <label for="make">Make:</label>
        <input type="text" class="form-control" id="make" placeholder="Enter car make" name="make" required>
    </div>
    <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" class="form-control" id="model" placeholder="Enter car model" name="model" required>
    </div>
    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" id="year" placeholder="Enter car year" name="year" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" placeholder="Enter car price" name="price" required>
    </div>
    <div class="form-group">
        <label for="type">Type:</label>
        <select class="form-control" id="type" name="type" required>
            <option value="Electric">Electric</option>
            <option value="Gasoline">Gasoline</option>
            <option value="Hybrid">Hybrid</option>
            <option value="Diesel">Diesel</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include 'footer.php'; ?>