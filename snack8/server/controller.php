<?php
include __DIR__ . '/db.php';
header('Content-type: application/json');

if (isset($_GET['tipologia']) !== false) {
    $tipologia = $_GET['tipologia'];
    if ($tipologia === 'all') {
      $productsFiltered = $products;
    } else {
      $productsFiltered = [];
      foreach ($products as $product) {
        if ($product['tipologia'] === $tipologia) {
            $productsFiltered [] = $product;
        }
      }
    }
    echo json_encode([
      'results' =>  $productsFiltered,
    ]);
  } else {
    echo json_encode([
      'error' =>  'prodotto non selezionato'
    ]);
  }
?>