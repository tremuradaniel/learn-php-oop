<?php
    declare(strict_types = 1);
    require '../vendor/autoload.php';
    // include 'class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.inc.php'; ?> 

<body>
    <div class="container">
        <div class="row">
            <div class="col-3 sidebar">
                <?php include 'menu.inc.php'; ?>
            </div>
            <div class="col-9">
                <?php 
                    $testObj = new TestDb();
                    $testObj->getUsers();
                ?>
            </div>
        </div>
    </div>
</body>

</html>
