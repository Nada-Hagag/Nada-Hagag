<?php

    if ($_POST) {

        $number = $_POST['number'];
        
        if ( $number >= 0) {
            $check= "Positive";
        } else{
            $check="Negative";
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Negative OR Postive</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h2 class="text-success">Negative OR Postive </h2>
            <div class="col-4 offset-4">
                <form method="post">
                <div class="form-group ">
                        <input type="number" name="number" id="Number" class="form-control mt-1 mb-3" placeholder=" Enter the number">
                    <div>
                   

                    <button class="btn btn-success w-60 mb-5 mt-2">Result</button>
                </form>
                <?php
                if (isset($check) ){
                    echo
                    " <div class='alert alert-success'>
            The Number =$number is $check 
            </div>";}
            ?>
            </div>
        </div>
    </div>

</body>

</html> 