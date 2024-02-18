<?php

$selectedCar = $_GET['carSelection'] ?? '';


switch ($selectedCar) {
    case 'Mercedes-Benz luopuu':
        header('Location: Mercedes-Benz-luopuu.php');
        break;
    case 'Mercedes-Benz unveils':
        header('Location: Mercedes-Benz-unveils.php');
        break;
    case 'Mercedes Benz G63 AMG':
        header('Location: Mercedes-Benz-G63.php');
        break;
    case 'Mercedes-Benz C-Class':
        header('Location: Mercedes-Benz-C-Class.php');
        break;
    case 'New Tesla Cybertruck':
        header('Location: New-Tesla-Cybertruck.php');
        break;
    case 'BMW 5 Series Sedan':
        header('Location: BMW-5-Series.php');
        break;
    case 'The new BMW i7 | British GQ':
        header('Location: BMW-i7.php');
        break;
    case 'Audi RS7 Sportback':
        header('Location: Audi-RS7.php');
        break;
    case 'Audi A8 TFSI':
        header('Location: Audi-A8-TFSI.php');
        break;
    default:
        echo '
        The desired car was not found.';
        break;
}

exit();
?>
