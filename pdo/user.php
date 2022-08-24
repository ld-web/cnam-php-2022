<?php
// FICHE UTILISATEUR UNIQUE

// Création de la connexion à la base de données
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=cnam-php-2022;charset=utf8mb4",
  "cnam-php-2022",
  "YfIbuy151ESIejLI"
);

// requête SQL NON PREPAREE
// $query = "SELECT * FROM users WHERE id=$id";
// $stmt = $pdo->query($query);

// requête PREPAREE
// 1 - Je prépare ma requête
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
// 2 - J'exécute ma requête en fournissant une valeur au(x) paramètre(s)
$stmt->execute([
  'id' => $_GET['id']
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($user);
