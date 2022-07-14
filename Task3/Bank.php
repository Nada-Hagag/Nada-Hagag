<?php
if ($_POST) {
    define('month', 12);
    $userName = $_POST['username'];
    $loanAmount = $_POST['loanAmount'];
    $loanYears = $_POST['loanYears'];
    if ($loanYears <= 3) {
        $Rate = 0.10 * $loanAmount * $loanYears;
    } else {
        $Rate = 0.15 * $loanAmount * $loanYears;
    }
    $loanAfterInterest = $Rate + $loanAmount;
    $monthly = $loanAfterInterest / (month * $loanYears);
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-12 text-center text-success">
            <h2 class="text-success"> Bank </h2>
        </div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="username" value="<?= $userName ?? "" ?>" id="number" placeholder=" User Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="loanAmount" value="<?= $loanAmount ?? "" ?>" id="number" placeholder=" Loan Amount" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="loanYears" value="<?= $loanYears ?? "" ?>" id="number" placeholder=" Loan Years" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success col-12" name='submit'> Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php if ($_POST) { ?>
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-success text-center" scope="col">User Name</th>
                    <th class="text-success text-center" scope="col">Rate</th>
                    <th class="text-success text-center" scope="col">Loan after interest</th>
                    <th class="text-success text-center" scope="col">Monthly</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-success text-center"> <?= $userName ?? ""  ?> </td>
                    <td class="text-success text-center"><?= $Rate ?? ""  ?></td>
                    <td class="text-success text-center"><?= $loanAfterInterest ?? ""  ?></td>
                    <td class="text-success text-center"> <?= $monthly ?? "" ?> </td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
    </div>
</body>

</html>