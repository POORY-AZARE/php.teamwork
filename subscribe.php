<?php include 'header.php'; ?>

<form action="subscribe.php" method="post">
    <label for="email">Subscribe to our newsletter:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    <button type="submit" name="subscribe">Subscribe</button>
</form>
<?php include 'footer.php'; ?>