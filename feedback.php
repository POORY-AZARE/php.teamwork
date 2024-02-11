<?php
$title="feedback";
include 'header.php'; ?>
<h2>Submit Your Feedback:</h2>
<form name="feedbackForm" method="post" action="submitFeedback.php">
    <div class="form-group">
        <label for="CarID">Car ID:</label>
        <input type="number" class="form-control" id="CarID" placeholder="Enter the Car ID" name="CarID" required>
    </div>
    <div class="form-group">
        <label for="OrderID">Order ID (Optional):</label>
        <input type="number" class="form-control" id="OrderID" placeholder="Enter the Order ID (if applicable)" name="OrderID">
    </div>
    <div class="form-group">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" id="Title" placeholder="Enter a title for your feedback" name="Title" required>
    </div>
    <div class="form-group">
        <label for="Comment">Comment:</label>
        <textarea class="form-control" id="Comment" placeholder="Enter your feedback" name="Comment" required rows="4"></textarea>
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


<?php
include 'footer.php'; ?>