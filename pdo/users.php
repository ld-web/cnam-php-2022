<?php
// LISTE UTILISATEURS

// Création de la connexion à la base de données
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=cnam-php-2022;charset=utf8mb4",
  "cnam-php-2022",
  "YfIbuy151ESIejLI"
);

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
  <thead>
    <th>Nom</th>
    <th>Prénom</th>
    <th></th>
  </thead>

  <?php foreach ($users as $user) { ?>
    <tr>
      <td><?php echo $user['name']; ?></td>
      <td><?php echo $user['firstname']; ?></td>
      <td><a href="user.php?id=<?php echo $user['id']; ?>">Voir la fiche</a></td>
    </tr>
  <?php } ?>
</table>