<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAR SHOP</title>
    <link rel="stylesheet" href="pz.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
         <a href="index.php" class="to-top-button">CARSHOP WEBSITE</a>
        </div>
        <div class="nav-links">
        <a href="testdrive.php">Test Deriv Reservation</a>
          <a href="feedback.php">Feedback</a>
          <a href="subscribe.php">subscribe</a>
          <a href="#events">SERVICE</a>
          <a href="login.php">Login</a>
          <!-- More links here -->
          
        </div>
        <div class="language-switcher">
          <a href="?lang=en">EN</a> /
          <a href="?lang=fi">FI</a>
        </div>
      </nav>
      
      <div class="special-message">
        You Will Find New, little-used, luxury and Supercars in Car Shop <br />
        Find Your Perfect Vehicles
      </div>

      <div class="search-bar">
    <!-- The action attribute should point to your search processing script -->
    <form action="serchprocess.php" method="get">
        <select name="type" id="type">
            <option value="">Type</option>
            <option value="Gasoline powered">Gasoline powered</option>
            <option value="Electric">Electric</option>
            <option value="Hybrid">Hybrid</option>
        </select>
        
        <select name="make" id="make">
            <option value="">Make</option>
            <option value="Mercedes Benz">Mercedes Benz</option>
            <option value="Tesla">Tesla</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
            <!-- Add other makes as options -->
        </select>
        
        <select name="model" id="model">
            <option value="">Model</option>
            <!-- You should populate this dynamically based on the selected make if possible -->
            <option value="loupuu">loupuu</option>
            <option value="unveils">unveils</option>
            <option value="G63 AMG">G63 AMG</option>
            <option value="C-Class">C-Class</option>
            <!-- Add other models as options -->
        </select>
        
        <select name="year" id="year">
            <option value="">Year</option>
            <!-- Populate years dynamically or manually -->
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <!-- Add other years as options -->
        </select>

        <!-- Price could be a range or a maximum value. 
             If it's a range, consider using two dropdowns or a slider for min and max values.
             For simplicity, here's a single dropdown to choose a maximum price: -->
        <select name="price" id="price">
            <option value="">Price</option>
            <option value="25000">Up to $25,000</option>
            <option value="30000">Up to $30,000</option>
            <option value="40000">Up to $40,000</option>
            <!-- Add other price ranges as options -->
        </select>



        <button type="submit">Search</button>
    </form>
</div>


    </header>

    <main>