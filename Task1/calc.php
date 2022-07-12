<?php
if ($_POST) {

    $firstNumber = $_POST["first"];
    $secondNumber = $_POST["second"];
    $oper = $_POST['add'];

    switch ($oper) {
        case "+":
            $result == $firstNumber + $secondNumber;
            break;
        case "-":
            $result = $firstNumber - $secondNumber;
            break;
        case "*":
            $result = $firstNumber * $secondNumber;
            break;
        case "/":
            $result = $firstNumber / $secondNumber;
            break;
        case "**":
            $result = $firstNumber ** $secondNumber;
            break;
        case "%":
            $result = $firstNumber % $secondNumber;
            break;
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-primary">
        <h2>Calculator </h2>
        <form method="post">
            <div class="justify-content">

                <label for="first">First Number</label>
                <input type="number" name="first" id="first">
                <label for="second">Second Number</label>
                <input type="number" name="second" id="second">

                <div class="justify-content-between">

                    <button class="btn btn-info " name="add" value="+">+</button>
                    <button class="btn btn-info " name="add" value="-">-</button>
                    <button class="btn btn-info " name="add" value="*">x</button>
                    <button class="btn btn-info" name="add" value="/">/</button>
                    <button class="btn btn-info" name="add" value="**">^</button>
                    <button class="btn btn-info" name="add" value="%">%</button>

                </div>
            </div>

        </form>
        <?php

        if (isset($result)) {
            echo "<div class='alert alert-info'>
                    <b>$firstNumber</b> $oper <b>$secondNumber</b> = <b>{$result}</b>
                   
                    </div>";
        }
        ?>
    </div>


</body>

</html>