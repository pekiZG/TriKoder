<html>
<head></head>
<body>
    <span><a href="index.php?type=car&action=create">Create new Car</a></span>
    <table>
        <tbody><tr><td>Car Name</td><td>Car Price</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($cars as $carKey => $car)
            {
                echo '<tr><td><a href="index.php?type=car&action=read&carId='.$car->getId().'">'.$car->getName().'</a></td><td>'.$car->getPrice().'</td><td><a href="index.php?type=car&action=edit&carId='.$car->getId().'">Edit</a> | <a href="index.php?type=car&action=delete&carId='.$car->getId().'">Delete</a></td></tr>';
            }
        ?>
    </table>
</body>
</html>