<html>
<head></head>
<body>
<?php
    echo 'Car Id:' . $car->getId() . '<br/>';
    echo 'Car Name:' . $car->getName() . '<br/>';
    echo 'Car Price:' . $car->getPrice() . '<br/>';
?>
    <div><a href="index.php?type=car&action=edit&carId=<?php echo $car->getId() ?>">Add Fuels & Oils to Car</a></div>
    <div><a href="index.php">Home page</a></div>
</body>
</html>