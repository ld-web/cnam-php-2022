<?php
$title = "Nos produits";
// require_once inclut UNE ET UNE SEULE FOIS un fichier
require_once 'data/products.php'; // les données de produits issues d'un fichier
require_once 'layout/header.php'; // la section de code de début de page
?>

<h1>Nos produits</h1>

<section class="list">
  <?php foreach ($products as $product) {
    require 'templates/product_card.php';
  } ?>
</section>

<?php require_once 'layout/footer.php'; ?>