<?php
if ($_POST) {
    $number = $_POST['number'];
    $power = $_POST['power'];
    $root = 1 / $power;
    $result = $number ** $root;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Root</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h3 class="text-success">ROOT</h3>
        <div class="col-4 offset-4">
            <form method="post">
                <div class='form-group'>
                    <input type="number" name="number" id="number" class="form-control mt-1 mb-4" placeholder=" Enter the number">
                    <input type="number" name="power" id="power" class="form-control mt-1 mb-3" placeholder=" Enter the root">
                </div>
                <button class="btn btn-success w-50 mb-5 mt-2">Result</button>
            </form>
            <?php

            if (isset($number, $power)) {
                echo "<div>
                    The Root <strong>{$power}</strong>  Of  Number <strong>{$number}</strong> Is   <br><strong> {$result} </strong>
                
                    </div>";
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>