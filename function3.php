<?php
$title="newcars";
include 'header.php'; ?>
<h2>Submit Your Feedback Below:</h2>
<form name="feedbackForm" method="post" action="submitFeedback.php">
    <div class="form-group">
        <label for="carId">Car ID:</label>
        <input type="number" class="form-control" id="carId" placeholder="Enter the Car ID" name="carId" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title for your feedback" name="title" required>
    </div>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" id="comment" placeholder="Enter your comment" name="comment" required rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="rating">Rating:</label>
        <select class="form-control" id="rating" name="rating">
            <option value="">Select a rating</option>
            <option value="1">1 - Poor</option>
            <option value="2">2 - Fair</option>
            <option value="3">3 - Good</option>
            <option value="4">4 - Very Good</option>
            <option value="5">5 - Excellent</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit Feedback</button>
</form>

<?php
include 'footer.php'; ?>