</main>

    <footer>
    <?php
   
    $filePath = $_SERVER['SCRIPT_FILENAME'];
    $fileName = basename($filePath);
    $lastModifiedTime = filemtime($filePath);
    $formattedTime = date("F d Y H:i:s", $lastModifiedTime);

    echo "<footer>";
    echo "Last modified: " . $formattedTime . " (File: " . $fileName . ")";
    echo "</footer>";
?>
      <div class="footer-rectangle">
        <div class="footer-content">
          <div class="footer-section about">
            <h3>About us</h3>
            <p>
              "Discover the story of our journey in becoming Finland's premier
              destination for luxury and performance vehicles. With a legacy
              built on passion and quality, we bring you an unmatched selection
              of premium pre-owned automobiles."
            </p>
          </div>
          <div class="footer-section working-hours">
            <h3>Working hours</h3>
            <p>
              Our showroom doors are open for you from Monday to Friday, 9 AM to
              6 PM. We welcome you to explore our collection at your
              convenience.
            </p>
            <p>
              "Find us at the heart of Espoo, where the finest cars meet
              exceptional service.
              <a href="https://www.google.com/maps/place/Espoo/" target="_blank"
                >Click here to view on map.</a
              >"
            </p>
          </div>
          <div class="footer-section social">
            <h3>Follow us</h3>
            <p>
              Follow us on social media to stay updated with the latest arrivals
              and exclusive offers.
            </p>
            <div class="social-links">
              <a href="your-instagram-url"
                ><img src="images/instagram.png" alt="Instagram"
              /></a>
              <a href="your-facebook-url"
                ><img src="images/facebook.png" alt="Facebook"
              /></a>
              <a href="your-twitter-url"
                ><img src="images/twitter.png" alt="twitter"
              /></a>
            </div>
          </div>
          <div class="footer-section newsletter">
            <h3>Join our newsletter</h3>
            <p>
              "Join our newsletter to receive updates on new arrivals, special
              offers, and all the news."
            </p>
            <a href="mailto:your@email.address"
              ><img src="images/email.png" alt="Email Icon"
            /></a>
          </div>
          <div class="footer-section to-top">
            <a href="#top" class="to-top-button">CARSHOP WEBSITE</a>
          </div>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.9979278557506!2d24.65590091608029!3d60.20546598196954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468dfbfb3a6d4911%3A0x400b47314eed30!2sEspoo!5e0!3m2!1sen!2sfi!4v1597842241509!5m2!1sen!2sfi"
              width="400"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
