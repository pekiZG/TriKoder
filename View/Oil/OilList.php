<html>
<head></head>
<body>
    <span><a href="index.php?type=oil&action=create">Create new Oil</a></span>
    <table>
        <tbody><tr><td>Oil Name</td><td>Oil Price</td><td>Action</td></tr></tbody>
        <?php 
            foreach ($oils as $oilKey => $oil)
            {
                echo '<tr><td><a href="index.php?type=oil&action=read&oilId='.$oil->getId().'">'.$oil->getName().'</a></td><td>'.$oil->getPrice().'</td><td><a href="index.php?type=oil&action=edit&oilId='.$oil->getId().'">Edit</a> | <a href="index.php?type=oil&action=delete&oilId='.$oil->getId().'">Delete</a></td></tr>';
            }
        ?>
    </table>
</body>
</html>