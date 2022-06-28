<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php
$arr_posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body><?php

$keys = array_keys($arr_posts);
$arr_lenght = count($keys);

//ciclo per data
for ($_i = 0; $_i < count($keys); $_i++) {
    echo "<h1>{$keys[$_i]}</h1>";
    
    $arr_lenght_interno = count($arr_posts[$keys[$_i]]);

    //ciclo post interni
    for ($i = 0; $i < $arr_lenght_interno; $i++) {
        
        $postData = $arr_posts[$keys[$_i]];

        echo "<div>{$postData[$i]['title']} - {$postData[$i]['author']} | {$postData[$i]['text']} </div>";
        
    }
};


?>
</body>
</html>

<!-- Con il ciclo Foreach -->
<?php
foreach($arr_posts as $date => $posts_of_date){
    echo "<h1>$date(Con ciclo forEach)</h1>";
    foreach ($posts_of_date as $post) {
       echo "<div>{$post['title']} - {$post['author']} | {$post['text']} </div>";
    }
}