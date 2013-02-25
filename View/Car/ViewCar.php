<html>
<head></head>
<body>
<?php 
    echo 'Car Name:' . $car->getName() . '<br/>';
    echo 'Car Price:' . $car->getPrice() . '<br/>';
?>
    <table>
        <tbody><tr><td>Current Fuels</td></tr></tbody>
        <?php 
            foreach ($car->getFuels() as $fuel)
            {
                echo '<tr><td>'.$fuel->getName().'</td></tr>';
            }
        ?>
    </table>
    
    <table>
        <tbody><tr><td>Current Oils</td></tr></tbody>
        <?php 
            foreach ($car->getOils() as $oil)
            {
                echo '<tr><td>'.$oil->getName().'</td></tr>';
            }
        ?>
    </table>
    <div><a href="index.php">Home page</a></div>
</body>
</html>