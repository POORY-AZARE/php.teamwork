<?php
$title="Feedback";
include 'header.php'; ?>

<h2>Submit Your Feedback:</h2>
<form name="feedbackForm" method="post" action="feedbackProcess.php"> <!-- Make sure this points to the script above -->

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

<?php include 'footer.php'; ?>
