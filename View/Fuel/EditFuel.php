<html>
<head></head>

<body>
<form method="GET">
    <input type="hidden" name="type" value="fuel">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="fuelId" value="<?php echo $fuel->getId(); ?>">
    Fuel name:<input type="text" name="fuelName" value="<?php echo $fuel->getName(); ?>">
    Fuel price: <input type="text" name="fuelPrice" value="<?php echo $fuel->getPrice(); ?>">
    <input type="submit">
    <div><a href="index.php">Home page</a></div>
</form>
</body>
</html>