<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php'; ?>

<h3> 2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.
     (18 or more than 18 years is eligible for voting, use form to get user input).</h3>


<h2>Check Your Voting Eligibility</h2>

<!-- The form for user input -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <input type="submit" value="Check">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    if ($age >= 18) {
        echo "<p>Hello, $name! You are eligible to vote.</p>";
    } else {
        echo "<p>Sorry, $name. You must be at least 18 years old to vote.</p>";
    }
}
?>

<h3> 3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
     depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>

<?php
// Geting the current month
$currentMonth = date('F');

switch ($currentMonth) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth so I don't have any holidays.";
        break;
}

?>


<h3> 4. For Loop: Write a PHP script that will print the multiplication table of a number 
    (n, use form to get user input).</h3>

    <!-- The form for user input -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Generate Table">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);

    // Generate and display the multiplication table
    echo "<h4>Multiplication Table for $number</h4>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$number</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>" . ($number * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>


<h3> 5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Enter a number: <input type="number" name="number" min="1" required>
    <input type="submit" value="Print Numbers">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);

    // Initialize counter
    $i = 1;

    // Generate and display the numbers using a while loop
    echo "<p>Numbers from 1 to $number:</p>";
    while ($i <= $number) {
        echo $i;
        if ($i < $number) {
            echo ", "; // Add a comma separator for all but the last number
        }
        $i++;
    }
}
?>
<h3> 6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript")</h3>

<?php
// Define the array
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

// Use foreach loop to iterate through the array and print each element
foreach ($myarray as $element) {
    echo $element . "<br>";
}
?>

<?php
include 'footer.php'; ?>