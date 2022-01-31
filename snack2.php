<?php 
/**
 * Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito
 * , altrimenti “Accesso negato”
 */
if (empty($_GET['name']) && empty($_GET['$mail']) && empty($_GET['age'])) {
    $message = 'uno dei tre parametri non è inserito correttamente';
    $message_access = 'accesso negato';
    //echo $message;
} else {
    $message = 'ok dati correttamente inseriti';
    $mail = $_GET['mail'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    if ((strlen($name) > 3) && (is_numeric($age) == true) && (strpos($mail, '@') !== false && strpos($mail, '.') !== false)) {
        $message_access = 'accesso riuscito';
    } else {
        $message_access = 'accesso negato';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $message?></p>
    <p><?php echo $message_access?></p>
</body>
</html>