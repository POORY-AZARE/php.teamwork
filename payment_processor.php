<?php

// Assuming you've received the car ID and price from the POST request
$car_id = $_POST['car_id'];
$car_price = $_POST['car_price'];

// Here you would typically process the payment through a payment gateway
// For now, let's just redirect to a hypothetical online payment page

header('Location: https://example.com/online-payment?car_id=' . urlencode($car_id) . '&price=' . urlencode($car_price));
exit;
