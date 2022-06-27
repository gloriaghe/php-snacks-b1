<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php



if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){

    //nome
    $name = $_GET['name'];

    //mail scritta giusta
    $mail = $_GET['mail'];

    $chiocciola_position = strpos($mail, '@');
    $punto_position = strpos($mail, '.', $chiocciola_position);

    //età 
    $age = $_GET['age'];

    if(strlen($name) > 3 && $chiocciola_position !== false && $punto_position !== false && is_numeric($age) === true){
       
            $result = '<div>Accesso Riuscito</div>';
        
    } else {
        $result = '<div>Accesso Negato</div>';
    }

} else {
    $result = 'Accesso negato. Inserisci i dati.';
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <form action="" method="get">
        <div>
        <label for="name">Inserisci il tuo nome: </label>
        <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
        <label for="mail">Inserisci la tua mail: </label>
        <input type="text" name="mail" id="mail">
        </div>
        <br>
        <div>
        <label for="age">Inserisci la tua età (in numero): </label>
        <input type="text" name="age" id="age">
        </div>
        <br>
        <button>Invia</button>
    </form>
    <br>
    <?= $result ?>
</body>
</html>