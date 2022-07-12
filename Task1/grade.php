<?php
if ($_POST) {
    $Physics = $_POST['Physics'];
    $Chemistry = $_POST['Chemistry'];
    $Biology = $_POST['Biology'];
    $math = $_POST['Math'];
    $Computer = $_POST['Computer'];


    $add = $Physics + $Chemistry + $Biology + $math + $Computer;
    $per = $add * 100 / 500;
    if ($per >= 90) {
        $grade = "A";
    } elseif ($per >= 80) {
        $grade = "B";
    } elseif ($per >= 70) {
        $grade = "C";
    } elseif ($per >= 60) {
        $grade = "D";
    } elseif ($per >= 40) {
        $grade = "E";
    } elseif ($per >= 0) {
        $grade = "F";
    } else {
        $grade = "UNDIFIEND VALUE";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h3 class="text-success">Enter Your Grade</h3>
        <div class=" col-4 offset-4">
            <form method="post">
                <div clas='form-group'>
                    <input type="number" name="Physics" id="Physics" class="form-control mt-1 mb-4" placeholder=" Physics">
                    <input type="number" name="Chemistry" id="Chemistry" class=" form-control  mt-1 mb-4" placeholder=" Chemistry">
                    <input type="number" name="Biology" id="Biology" class=" form-control  mt-1 mb-4" placeholder=" Biology">
                    <input type="number" name="Math" id="Math" class=" form-control  mt-1 mb-4" placeholder=" Math">
                    <input type="number" name="Computer" id="Computer" class=" form-control  mt-1 mb-4" placeholder="Computer">
                </div>

                <button class="btn btn-success w-60 mb-5 mt-2">Result</button>
            </form>
            <?php
            if (isset($add, $grade)) {
                echo "<div class='alert alert-success'>
                    Your Total Grade Is <br>  <b>{$add}/500</b>  <br>
                    Your Percentage Is <br>  <strong>{$per}%</strong>  <br>
                    Your Grade Is <br>  <strong>{$grade}</strong>  <br>
                    </div>";
            } elseif (isset($message)) {
                echo $message;
            }
            ?>

        </div>
    </div>
    </div>

</html>