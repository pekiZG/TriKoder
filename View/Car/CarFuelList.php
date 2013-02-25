<html>
<head></head>
<body>
    <div>Available car fuel</div>
    <table>
        <tbody><tr><td>Fuel Name</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($fuels as $fuelKey => $fuel)
            {
                echo '<tr><td><a href="index.php?type=fuel&action=read&fuelId='.$fuel->getId().'">'.$fuel->getName().'</a></td><td><a href="?type=car&action=insertFuel&carId='.$car->getId().'&fuelId='.$fuel->getId().'">Add</a></td></tr>';
            }
        ?>
    </table>
</body>
</html>