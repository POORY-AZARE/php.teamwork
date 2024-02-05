<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
  Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.”
   inside an h3 tag. Table & Form Guide</h3>
 <h3>3.  Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag.
     BootStrap Guide </h3>

    <div class="container mt-5">
        <form method="post" action="wellcom.php">
            <!-- First Name section-->
            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <!-- Last Name section -->
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <!-- Submit Button section -->
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>

    <!-- Optional JavaScript bootstrap -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <h3>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it.
                Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>
                <?php
                  $g1 = 5 ;
                  $g2 = 4 ;
                  $g3 = 5 ;

                     ?>
                


                <div class="container mt-5">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1 ?></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2 ?></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<h3>     5. String Variables: Write a PHP script with two string variables
     ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>

     <?php
    // Defining string variables
    $str1 = "Hello";
    $str2 = "World";

    // Concatenating the strings with a space in between
    $combinedStr = $str1 . " " . $str2;

    // Printing the combined string and its length
    echo $combinedStr . "<br>";
    echo "Length of the Combined String: " . strlen($combinedStr);
?>

<h3>6. Number Addition: Write a script to add up the numbers:
     298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>

     <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
   
    $sum = $num1 + $num2 + $num3;

    echo "The sum of the numbers is: " . $sum;
?>


<h3>7. Browser Detection: Write a PHP script to detect the browser being used 
    to view your pages. Hint: Use predefined variables: $_SERVER  </h3>

    <?php
    // Get the User-Agent string from the server variable
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Detect the browsers
    if (strpos($userAgent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($userAgent, 'Chrome') !== false) {
        
        if (strpos($userAgent, 'OPR') !== false) {
            $browser = 'Opera';
        } else {
            $browser = 'Google Chrome';
        }
    } elseif (strpos($userAgent, 'Safari') !== false) {
        
        $browser = 'Safari';
    } elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
        $browser = 'Internet Explorer';
    } elseif (strpos($userAgent, 'Edge') !== false) {
        $browser = 'Microsoft Edge';
    } else {
        $browser = 'Unknown';
    }

    // Output the browser
    echo "You are using: " . $browser;
    ?>
<h3>8. File Modification Time: Write a PHP script in the footer section of your universal footer to display
     the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename
     , filetime function to get the last modified time & date function to print the date and time</h3>



<?php
include 'footer.php'; ?>