<?php include 'header.php'; ?>

<form action="subprocess.php" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <button type="submit" name="subscribe">Subscribe</button>
</form>

<?php include 'footer.php'; ?>