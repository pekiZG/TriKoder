<html>
<head></head>

<body>
<form method="GET">
    <input type="hidden" name="type" value="oil">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="oilId" value="<?php echo $oil->getId(); ?>">
    Oil name:<input type="text" name="oilName" value="<?php echo $oil->getName(); ?>">
    Oil price: <input type="text" name="oilPrice" value="<?php echo $oil->getPrice(); ?>">
    <input type="submit">
    <div><a href="index.php">Home page</a></div>
</form>
</body>
</html>