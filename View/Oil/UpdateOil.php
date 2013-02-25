<html>
<head></head>
<body>
    <div>Uspješna izmjena</div>
<?php 
    echo 'Oil Id:' . $oil->getId() . '<br/>';
    echo 'Oil Name:' . $oil->getName() . '<br/>';
    echo 'Oil Price:' . $oil->getPrice() . '<br/>';
?>
    <div><a href="index.php">Home page</a></div>
</body>
</html>