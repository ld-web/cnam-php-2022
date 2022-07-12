<?php
// Définition des données
$products = [
  [
    "id" => 1,
    "name" => "WqfDuckugkIImyW",
    "price" => 426.1,
    "color" => "RRPMGh",
  ],
  [
    "id" => 2,
    "name" => "VdvdbOzrXZJqpUe",
    "price" => 440.3,
    "color" => "WTnWfqRyaKRENTq",
  ],
  [
    "id" => 3,
    "name" => "MKKAgsEemUDGcnMabBT",
    "price" => 485,
    "color" => "TEHujp",
  ],
  [
    "id" => 4,
    "name" => "pyFWvuXnFajcjsZ",
    "price" => 150.7,
    "color" => "dSkioIFgDfzpw",
  ],
  [
    "id" => 5,
    "name" => "FxMOrwk",
    "price" => 115.5,
    "color" => "ffz",
  ],
  [
    "id" => 6,
    "name" => "NdceJQyYc",
    "price" => 309,
    "color" => "UhS",
  ],
  [
    "id" => 7,
    "name" => "oDTKmvPeyKYfnT",
    "price" => 412.4,
    "color" => "YkHxnrdzS",
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos produits</title>
</head>

<body>
  <h1>Nos produits</h1>

  <!-- Liste des produits -->
  <div class="list">
    <?php foreach ($products as $product) {
      echo $product['name'] . "<br />";
    } ?>
  </div>
</body>

</html>