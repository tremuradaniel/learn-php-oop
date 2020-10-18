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
                <form action="includes/calc.inc.php" method="post">
                    <p>My own calculator!</p>
                    <input type="number" name="num1" placeholder="First number">
                    <select name="oper" id="">
                        <option value="add">Addition</option>
                        <option value="sub">Substraction</option>
                        <option value="div">Division</option>
                        <option value="mul">Multiplication</option>
                    </select>
                    <input type="number" name="num2" placeholder="Second number">
                    <button class="btn btn-primary" type="submit">Calculate</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
