<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fonctions</title>
</head>

<body>
  <h1>Fonctions</h1>

  <h2>Additions</h2>

  <?php showAdditionResult(4, 9); ?>

  <h2>Salutations</h2>

  <?php
  direBonjour("Andrés");
  direBonjour();

  // fonction qui prendrait en paramètre un texte, et qui retournerait ce texte entouré de balises <p></p>
  echo getAsParagraph("Coucou c'est moi !", "uppercase");
  ?>
</body>

</html>