<html>
<head></head>
<body>
    <div>Available car oils</div>
    <table>
        <tbody><tr><td>Oil Name</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($oils as $oilKey => $oil)
            {
                echo '<tr><td><a href="index.php?type=oil&action=read&oilId='.$oil->getId().'">'.$oil->getName().'</a></td><td><a href="?type=car&action=insertOil&carId='.$car->getId().'&fuelId='.$oil->getId().'">Add</a></td></tr>';
            }
        ?>
    </table>
</body>
</html>