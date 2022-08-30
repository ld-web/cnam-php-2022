<?php
// FICHE UTILISATEUR UNIQUE
require_once 'db.php';
$pdo = getPdoInstance();

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
