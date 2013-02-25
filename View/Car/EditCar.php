<html>
<head></head>

<body>
<form method="GET">
    <input type="hidden" name="type" value="car">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="carId" value="<?php echo $car->getId(); ?>">
    Fuel name:<input type="text" name="carName" value="<?php echo $car->getName(); ?>">
    Fuel price: <input type="text" name="carPrice" value="<?php echo $car->getPrice(); ?>">
    <input type="submit">
    <div><a href="index.php">Home page</a></div>
    <table>
        <tbody><tr><td>Current Fuels for this car</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($car->getFuels() as $fuel)
            {
                echo '<tr><td>'.$fuel->getName().'</td><td><a href="?type=car&action=removeFuel&carId='.$car->getId().'&fuelId='.$fuel->getId().'">Remove</a></td></tr>';
            }
        ?>
    </table>
    <div><a href="?type=car&action=addFuel&carId=<?php echo $car->getId(); ?>">Add More Fuels</a></div>
    <table>
        <tbody><tr><td>Current Oils for this car</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($car->getOils() as $oil)
            {
                echo '<tr><td>'.$oil->getName().'</td><td><a href="?type=car&action=removeOil&carId='.$car->getId().'&fuelId='.$oil->getId().'">Remove</a></td></tr>';
            }
        ?>
    </table>
    <div><a href="?type=car&action=addOil&carId=<?php echo $car->getId(); ?>">Add More Oils</a></div>
</form>
</body>
</html>