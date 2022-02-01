<?php 
/**
 * Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */
$array_numeri = [];
$n_items = 15;
while (count($array_numeri) < $n_items) {
    $numero_random = rand(1, 17);
    while (in_array($numero_random, $array_numeri) == true) {
        $numero_random = rand(1, 17);
    }
    $array_numeri[] = $numero_random;
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
    <div>
        <?php
        for ($i=0; $i<count($array_numeri); $i++) {
            echo '<p>' . $array_numeri[$i] . "</p>"; 
        }
        ?>
    </div>
</body>
</html>