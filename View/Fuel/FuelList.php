<html>
<head></head>
<body>
    <span><a href="index.php?type=fuel&action=create">Create new Fuel</a></span>
    <table>
        <tbody><tr><td>Fuel Name</td><td>Fuel Price</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($fuels as $fuelKey => $fuel)
            {
                echo '<tr><td><a href="index.php?type=fuel&action=read&fuelId='.$fuel->getId().'">'.$fuel->getName().'</a></td><td>'.$fuel->getPrice().'</td><td><a href="index.php?type=fuel&action=edit&fuelId='.$fuel->getId().'">Edit</a> | <a href="index.php?type=fuel&action=delete&fuelId='.$fuel->getId().'">Delete</a></td></tr>';
            }
        ?>
    </table>
</body>
</html>