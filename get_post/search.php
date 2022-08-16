<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résultats de recherche</title>
</head>

<body>
  <?php $search_query = $_GET['q']; ?>
  <h1>Résultats pour <?php echo $search_query; ?></h1>
  <p><a href="index.php">Retour</a></p>

  <?php
  // Recherche des résultats dans une base de données, etc...
  ?>
</body>

</html>