<?php include 'header.php'; ?>

<div class="car-gallery">
    <!-- Car Item 1 -->
    <div class="car-item">
        <img src="images/03.jpeg" alt="Car Image 1" />
        <a href="Mercedes-Benz-luopuu.php" class="car-description-link">
        <div class="car-description">Mercedes-Benz luopuu</div>
        <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_1" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_1" />
            <input type="submit" value="Buy Now" />
        </form>
    </div>
    <!-- Car Item 2 -->
       <div class="car-item">
        <img src="images/04.jpeg" alt="Car Image 2" />
        <div class="car-description">Mercedes-Benz unveils </div>
        <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
    </div>
        <!-- Car Item 3 -->
        <div class="car-item">
          <img src="images/05.jpeg" alt="Car Image 3" />
          <a href="Mercedes-Benz-G63.php" class="car-description-link">
            <div class="car-description">Mercedes Benz G63 AMG</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 4 -->
        <div class="car-item">
          <img src="images/06.jpeg" alt="Car Image 4" />
          <a href="Mercedes-Benz-C-Class.php" class="car-description-link">
            <div class="car-description">Mercedes-Benz C-Class</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 5 -->
        <div class="car-item">
          <img src="images/07.jpeg" alt="Car Image 5" />
          <a href="New-Tesla-Cybertruck.php" class="car-description-link">
            <div class="car-description">New Tesla Cybertruck</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 6 -->
        <div class="car-item">
          <img src="images/08.jpeg" alt="Car Image 6" />
          <a href="BMW-5-Series.php" class="car-description-link">
            <div class="car-description">BMW 5 Series Sedan</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 7 -->
        <div class="car-item">
          <img src="images/09.jpeg" alt="Car Image 7" />
          <a href="BMW-i7.php" class="car-description-link">
            <div class="car-description">The new BMW i7 | British GQ</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 8 -->
        <div class="car-item">
          <img src="images/010.jpeg" alt="Car Image 8" />
          <a href="Audi-RS7.php" class="car-description-link">
            <div class="car-description">Audi RS7 Sportback</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
        <!-- Car Item 9 -->
        <div class="car-item">
          <img src="images/011.jpg" alt="Car Image 9" />
          <a href="Audi-A8-TFSI.php" class="car-description-link">
            <div class="car-description">Audi A8 TFSI</div>
          </a>
          <!-- Buy Now button form -->
        <form action="payment_processor.php" method="post">
            <input type="hidden" name="car_id" value="ID_OF_CAR_2" />
            <input type="hidden" name="car_price" value="PRICE_OF_CAR_2" />
            <input type="submit" value="Buy Now" />
        </form>
        </div>
      </div>
      <div class="vehicles-display">
      </div>

      <?php include 'footer.php'; ?>