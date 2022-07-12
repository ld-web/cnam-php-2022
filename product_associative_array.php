<?php
// Première structure
$product = [
  "name" => "Téléviseur HD",
  "price" => 550,
  "color" => "green",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon produit</title>
</head>

<body>
  <div>
    <h3><?php echo $product['name']; ?></h3>
    <p><?php echo $product['color']; ?></p>
    <h4><?php echo $product['price']; ?>€</h4>
  </div>
</body>

</html>