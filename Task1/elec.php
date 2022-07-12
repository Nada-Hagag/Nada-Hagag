<?php
if ($_POST) {
    define('subcharge', 0.2);
    $units = $_POST['units'];
    if ($units > 0 &&  $units <= 50) {
        $price = $units * (50 / 100);
    } elseif ($units > 50 && $units <= 150) {
        $price = $units * (75 / 100);
    } elseif ($units > 150 && $units <= 250) {
        $price = $units * (120 / 100);
    } else {
        $price = $units * (150 / 100);
    }
    $total = $price + ($price * subcharge);
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Electricity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
    <h2 class="text-primary">Electricity</h2>
            <div class="col-4 offset-4">
                <form method="POST">
                    <div class="form-group ">
                        <input type="text" name="units" id="Name" class="form-control m-2 " placeholder=" Enter the number">
                    </div>
                    <button class="btn btn-primary w-50 mb-5 mt-2">Result</button>
                    <div class="bg-primary h4 text-light ">
                        <?php if (isset($total)) {
                            echo $units . "  EGP";
                        } ?> </b>
                    </div>
                </form>
            </div>
        </div>
  </body>

</html>