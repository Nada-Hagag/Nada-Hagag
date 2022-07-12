<?php

$users = [
    (object)[
        'id' => 1,
        'name' => 'Nada',
        "gender" => (object)[
            'gender' => 'F'
        ],
        'hobbies' => [
            'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'Mohamed',
        "gender" => (object)[
            'gender' => 'M'
        ],
        'hobbies' => [
            'swimming'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'Esraa',
        "gender" => (object)[
            'gender' => 'F'
        ],
        'hobbies' => [
            'running', 'swimming'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 4,
        'name' => 'Ahmed',
        "gender" => (object)[
            'gender' => 'M'
        ],
        'hobbies' => [
            'running'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
];
$table = "<table class='table offset-2 bg-info col-8 text-center text-light '>
            <thead>
                <tr>";
foreach ($users[0] as $property => $value) {
    $table .= "<th>{$property}</th>";
}
$table .=        "</tr>
            </thead>
            <tbody>";
foreach ($users as $index => $user) {
    $table .=   "<tr>";
    foreach ($user as $property => $value) {
        $table .=   "<td>";
        if (gettype($value) == 'array' || gettype($value) == 'object') {
            foreach ($value as $key => $objectOrArrayValue) {
                if ($property == 'gender' && $key == 'gender') {
                    if ($objectOrArrayValue == 'M')
                        $objectOrArrayValue = 'Male';
                    else
                        $objectOrArrayValue = 'Female';
                }
                $table .=   $objectOrArrayValue . ', ';
            }
        } else {
            $table .=   $value;
        }
    }
    $table .=    "</td>";
    $table .=    "</tr>";
}
$table .=   "</tbody>
        </table>";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-info">
        <h2> Dynamic Table </h2>
    </div>
    <?= $table ?>
    </div>
</body>

</html>