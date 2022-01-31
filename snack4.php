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
var_dump($array_numeri);
?>