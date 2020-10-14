<?php
    declare(strict_types = 1);
    include_once "../abstract/paymentTypes.abstract.php";
    include_once "../classes/BuyProduct.class.php";
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
                    $buyProduct = new BuyProduct();
                    echo $buyProduct->getPayment();
                ?>
            </div>
        </div>
    </div>
</body>

</html>
