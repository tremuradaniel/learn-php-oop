<?php
    declare(strict_types = 1);
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
                echo "<h1>Scope Resolution Operators</h1>";
                echo "<hr>";
                echo "<h3>First Class</h3>";
                $a = FirstClass::EXAMPLE;
                $a1 = FirstClass::$iAmAStaticProp;
                echo '<br>';

                echo $a;
                echo '<br>';
                echo $a1;
                echo "<hr>";
                echo "<h3>Second Class</h3>";
                $b = SecondClass::anotherTest();
                echo '<br>';
                echo '<br>';
            ?>
            </div>
        </div>
    </div>
</body>

</html>
