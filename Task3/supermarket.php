<html lang="en">

<head>
    <title>SuperMarket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-12 text-center text-primary ">
            <h2 class="text-primaryg">Super Marke</h2>
        </div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control text-primary" placeholder=" User Name" value="<?= $_POST['username'] ?? '' ?>">
                    <?= $errors['name-required'] ?? '' ?>
                </div>
                <div class="form-group">
                    <label for="City" class="text-primary">City</label>
                    <select class="custom-select" name="city">
                        <option value="Cairo" <?php if (isset($_POST['city'])) {
                                                    echo $_POST['city'] == 'Cairo' ? 'selected' : '';
                                                } ?>>Cairo</option>
                        <option value="Giza" <?php if (isset($_POST['city'])) {
                                                    echo $_POST['city'] == 'Giza' ? 'selected' : '';
                                                } ?>>Giza</option>
                        <option value="Alexandria" <?php if (isset($_POST['city'])) {
                                                        echo $_POST['city'] == 'Alexandria' ? 'selected' : '';
                                                    } ?>>Alexandria</option>
                        <option value="Other" <?php if (isset($_POST['city'])) {
                                                    echo $_POST['city'] == 'Other' ? 'selected' : '';
                                                } ?>>Other</option>
                    </select>
                    <?= $errors['city-required'] ?? '' ?>
                </div>
                <div class="form-group">
                    <input type="numeber" name="VarietiesNumber" id="number" class="form-control text-primary" placeholder=" Number Of products" value="<?= $_POST['VarietiesNumber'] ?? '' ?>">
                    <?= $errors['VarietiesNumber-required'] ?? '' ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary col-6" name='submit'> Submit</button>
                </div>
                <?php if (isset($_POST['submit'])) { ?>
                    <table class="table table-bordered">
                        <form method="post">
                            <thead>
                                <tr>
                                    <th class='text-primary text-center' name='Name'>Name</th>
                                    <th class='text-primary text-center' name='Price'>Price</th>
                                    <th class='text-primary text-center' name='Quantity'>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($cellsnumber = 1; $cellsnumber <= $_POST['VarietiesNumber']; $cellsnumber++) { ?>
                                    <tr>
                                        <td> <input type="text" name="productname<?= $$cellsnumber ?>" value="<?= $POST['Name' . $cellsnumber] ?? '' ?>"></input> </td>
                                        <td> <input type="number" name="productprice<?= $cellsnumber ?>" value="<?= $POST['Price' . $cellsnumber] ?? '' ?>"></input> </td>
                                        <td> <input type="number" name="productquantity<?= $cellsnumber ?>" value="<?= $POST['Quantity' . $cellsnumber] ?? '' ?>"></input> </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </form>
                    </table>
                    <div class="form-group">
                        <button class="btn btn-primary col-6" name='enterproduct'> Enter Products</button>
                    </div>
                <?php } ?>

                <?php if (isset($_POST['enterproduct'])) { ?>
                    <table class="table table-bordered">
                        <form method="post">
                            <tbody>
                                <?php $total = 0;
                                for ($cellsnumber = 1; $cellsnumber <= $_POST['VarietiesNumber']; $cellsnumber++) {
                                    $subtotal = $_POST['productprice' . $cellsnumber] * $_POST['productquantity' . $cellsnumber];
                                    $total += $subtotal;
                                    if ($total < 1000) {
                                        $discount = 0;
                                    } elseif ($total > 1000 && $total < 3000) {
                                        $discount = 0.10;
                                    } elseif ($total > 3000 && $total < 4500) {
                                        $discount = 0.15;
                                    } else {
                                        $discount = 0.20;
                                    }
                                    if ($_POST['city'] == 'Cairo') {
                                        $delivery = 0;
                                    } elseif ($_POST['city'] == 'Giza') {
                                        $delivery = 30;
                                    } elseif ($_POST['city'] == 'Alexandria') {
                                        $delivery = 50;
                                    } else {
                                        $delivery = 100;
                                    }
                                    $totalafterdiscount =  $total - ($total * $discount);
                                    $nettotal = $totalafterdiscount + $delivery;
                                }
                                ?>
                                <div class="alert alert-primary">
                                    Client name :<?= $_POST['username'] ?> <br> City : <?= $_POST['city'] ?> <br> Sub Total : <?= $subtotal ?> <b>EGP</b> <br> Total : <?= $total ?> <b>EGP</b>
                                    Discount : <?= $discount * 100 ?><b>%</b> <br>
                                    Total after discount: <?= $totalafterdiscount ?> <b>EGP</b>
                                </div>

                            </tbody>
                        </form>
                    </table>
                <?php } ?>
        </div>
    </div>
</body>

</html>