<?php
    declare(strict_types = 1);
    include 'class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP OOP</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div>
        <div class="row">
            <div class="col-2">
                <?php include 'menu.inc.php'; ?>
            </div>
            <div class="col-10">
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
