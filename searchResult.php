<?php
// تعریف آرایه‌ای از ماشین‌ها
$cars = [
    "Mercedes-Benz luopuu" => ["image" => "images/03.jpeg", "description" => "Mercedes-Benz luopuu", "price" => "ID_OF_CAR_1"],
    "Mercedes-Benz unveils" => ["image" => "images/04.jpeg", "description" => "Mercedes-Benz unveils", "price" => "ID_OF_CAR_2"],
    "Mercedes Benz G63 AMG" => ["image" => "images/05.jpeg", "description" => "Mercedes Benz G63 AMG", "price" => "ID_OF_CAR_3"],
    "Mercedes-Benz C-Class" => ["image" => "images/06.jpeg", "description" => "Mercedes-Benz C-Class", "price" => "ID_OF_CAR_4"],
    "New Tesla Cybertruck" => ["image" => "images/07.jpeg", "description" => "New Tesla Cybertruck", "price" => "ID_OF_CAR_5"],
    "BMW 5 Series Sedan" => ["image" => "images/08.jpeg", "description" => "BMW 5 Series Sedan", "price" => "ID_OF_CAR_6"],
    "The new BMW i7 | British GQ" => ["image" => "images/09.jpeg", "description" => "The new BMW i7 | British GQ", "price" => "ID_OF_CAR_7"],
    "Audi RS7 Sportback" => ["image" => "images/010.jpeg", "description" => "Audi RS7 Sportback", "price" => "ID_OF_CAR_8"],
    "Audi A8 TFSI" => ["image" => "images/011.jpg", "description" => "Audi A8 TFSI", "price" => "ID_OF_CAR_9"],
];

// دریافت انتخاب کاربر از فرم
$selectedCar = $_GET['car_selection'] ?? '';

// بررسی اینکه آیا انتخاب کاربر در آرایه ماشین‌ها موجود است
if (array_key_exists($selectedCar, $cars)) {
    $car = $cars[$selectedCar];
    echo "<div class='car-item'>";
    echo "<img src='{$car['image']}' alt='Car Image' style='width: 100%;'/>";
    echo "<div class='car-description'>{$car['description']}</div>";
    echo "<div>قیمت: {$car['price']}</div>";
    echo "<form action='payment_processor.php' method='post'>";
    echo "<input type='hidden' name='car_id' value='{$car['price']}' />";
    echo "<input type='submit' value='Buy Now' />";
    echo "</form>";
    echo "</div>";
} else {
    echo "ماشین انتخابی یافت نشد.";
}
?>
