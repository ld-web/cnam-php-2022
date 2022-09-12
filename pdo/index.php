<?php

require_once 'db.php';
$pdo = getPdoInstance();

var_dump($pdo);

$stmt = $pdo->query("SELECT * FROM users");
var_dump($stmt);

// fetchAll, sur un statement, permet de récupérer tous les éléments
// d'un seul coup.
// Ici, on lui indique qu'on souhaite que ces éléments soient des tableaux
// associatifs, indexés sur les noms des colonnes de la table
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);

// Autre méthode : lire les éléments un par un
// Dans ce cas, on n'utilise plus la méthode fetchAll, mais la méthode fetch
while (($user = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
  var_dump($user);
}
