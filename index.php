<!-- ## Snack 1

-Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 

-Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

-Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->


<?php


$basketMacht = [
    [
        'home_team' => 'Roma',
        'guest_team' => 'Lazio',
        'home_score' => '5',
        'guest_score' => '10',
    ],
    [
        'home_team' => 'Roma',
        'guest_team' => 'Lazio',
        'home_score' => '5',
        'guest_score' => '10',
    ],
    [
        'home_team' => 'Roma',
        'guest_team' => 'Lazio',
        'home_score' => '5',
        'guest_score' => '10',
    ],
    [
        'home_team' => 'Roma',
        'guest_team' => 'Lazio',
        'home_score' => '5',
        'guest_score' => '10',
    ],
];

//$game = [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <?php foreach ($basketMacht as $game) : ?>
        <li><?php echo $game['home_team'] . ' - ' . $game['guest_team'] . ' - ' . $game['home_score'] . ' - ' . $game['guest_score'] ?></li>
    <?php endforeach; ?>

</body>

</html>