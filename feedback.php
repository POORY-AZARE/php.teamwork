<?php
$title = "Feedback";
include 'header.php'; ?>

<h2>Submit Your Feedback:</h2>
<form name="feedbackForm" method="post" action="feedbackProcess.php">

    <div class="form-group">
        <label for="FullName">Full Name:</label>
        <input type="text" class="form-control" id="Fullname" placeholder="Enter your Full Name" name="Fullname" required minlength="3" maxlength="20">
        <span id="fullNameError"></span> <!-- Corrected the ID to match with JavaScript -->
    </div>

    <div class="form-group">
        <label for="Comment">Comment:</label>
        <textarea class="form-control" id="Comment" placeholder="Enter your feedback" name="Comment" required rows="4" minlength="3" maxlength="100"></textarea>
        <span id="commentError"></span>
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
        <span id="ratingError"></span>
    </div>

    <div class="form-group">
        <label for="DateSubmitted">Date:</label>
        <input type="date" class="form-control" id="DateSubmitted" name="DateSubmitted" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submitFeedback">Submit Feedback</button>
</form>

<script>
// JavaScript validation functions
function validateFullName() {
    const fullName = document.getElementById("Fullname").value; // Corrected the ID to match with HTML
    const fullNameError = document.getElementById("fullNameError"); 
    if (fullName.length < 3 || fullName.length > 20) {
        fullNameError.innerHTML = "Full Name must be between 3 & 20 characters";
        return false;
    } else {
        fullNameError.innerHTML = "";
        return true;
    }
}

function validateComment() {
    const comment = document.getElementById("Comment").value;
    const commentError = document.getElementById("commentError");
    if (comment.length < 3 || comment.length > 100) {
        commentError.innerHTML = "Comment must be between 3 & 100 characters";
        return false;
    } else {
        commentError.innerHTML = "";
        return true;
    }
}

function validateRating() {
    const rating = document.getElementById("Rating").value;
    const ratingError = document.getElementById("ratingError");
    if (rating === "") {
        ratingError.innerHTML = "Please choose a rating";
        return false;
    } else {
        ratingError.innerHTML = "";
        return true;
    }
}

// Event listeners for real-time validation
document.getElementById("Fullname").addEventListener("input", validateFullName); 
document.getElementById("Comment").addEventListener("input", validateComment);
document.getElementById("Rating").addEventListener("change", validateRating);

</script>

<?php include 'footer.php'; ?>
