<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60


$arr_partite = [
    [
        [
            'nome' => 'Olimpia Milano',
            'di_casa' => true,
            'punteggio' => 55
        ],
        [
            'nome' => 'Cantù',
            'di_casa' => false,
            'punteggio' => 60
        ]
    ],
    [
        [
            'nome' => 'Torino',
            'di_casa' => true,
            'punteggio' => 85
        ],
        [
            'nome' => 'Milano',
            'di_casa' => false,
            'punteggio' => 66
        ],
    ],
    [
        [
            'nome' => 'Imola',
            'di_casa' => true,
            'punteggio' => 100
        ],
        [
            'nome' => 'Bologna',
            'di_casa' => false,
            'punteggio' => 90
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squdre torneo basket</title>
</head>
<body>
<?php
$arr_lenght = count($arr_partite);

    for ($_i = 0; $_i < $arr_lenght ; $_i++) { 
        $partita = $arr_partite[$_i];
        echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}</div>";
    }

    ?>    
</body>
</html>