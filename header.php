<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAR SHOP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">CAR SHOP</div>
       
        <div class="nav-links">
        <a href="testdrive.php">Test Deriv Reservation</a>
          <a href="feedback.php">Feedback</a>
          <a href="#events">EVENTS</a>
          <a href="#events">SERVICE</a>
          <a href="#events">CONTACT</a>
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
        <!-- Your existing search bar code goes here -->
      </div>

      <div class="search-bar">
        <select name="type" id="type">
          <option value="">Type</option>
          <!-- Add more option elements here -->
        </select>
        <select name="brand" id="brand">
          <option value="">Brand</option>
          <!-- Add more option elements here -->
        </select>
        <select name="model" id="model">
          <option value="">Model</option>
          <!-- Add more option elements here -->
        </select>
        <select name="price" id="price">
          <option value="">Price</option>
          <!-- Add more option elements here -->
        </select>
        <input type="text" placeholder="Search for cars..." />
        <button type="submit">Search</button>
      </div>


    </header>

    <main>