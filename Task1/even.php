<?php
if ($_POST) {
    $number = $_POST['number'];
    if ($number % 2 == 0) {
        $message = $number .=  " is even number";
    } else {
        $message = $number .=  " is odd number";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Even or Odd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h2 class="text-warning">Even or Odd</h2>
        <div class="col-4 offset-4">
            <form method="POST">
                <div class="form-group ">
                    <input type="number" name="number" id="Name" placeholder=" Enter the number" class="form-control mt-1 mb-4">
                </div>
                <button class="btn btn-warning w-50 mb-5 mt-2">Result</button>
                <div class="text-center h4 text-success">
                    <?php
                    if (isset($message))
                        echo $message
                    ?>
                </div>
        </div>

    </div>
</body>

</html>