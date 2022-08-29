<?php
require_once('functions.php');
// Démarre ou récupère une session existante
session_start();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) { // Si pas connecté
  redirect('login.php');
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
  <h1>Administration</h1>

  <p>Données confidentielles</p>

  <?php var_dump($_SESSION); ?>

  <p><a href="logout.php">Déconnexion</a></p>
</body>

</html>