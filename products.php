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
  [
    "id" => 8,
    "name" => "CNAM",
    "price" => 350,
    "color" => "blue",
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="products.css">
</head>

<body>
  <div id="wrapper">
    <h1>Nos produits</h1>

    <!-- Liste des produits -->
    <section class="list">
      <?php foreach ($products as $product) { ?>
        <article class="item">
          <h2><?php echo $product['name']; ?></h2>
          <h3><?php echo $product['price']; ?>€</h3>
          <p>
            <?php echo $product['color']; ?>
          </p>
        </article>
      <?php } ?>
    </section>
  </div>
</body>

</html>