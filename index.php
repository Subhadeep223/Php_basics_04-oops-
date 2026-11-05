<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

    <?php
    require_once "Car.php";

    $car01= new Car("BMW","green");

    echo $car01->setBrand("Volvo");
    echo $car01->getBrand();
    echo "<pre>";
    echo $car01->setColor("Blue");
    echo $car01->getColor();
    echo "</pre>";

    ?>
    
</body>
</html>