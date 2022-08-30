<?php
// LISTE UTILISATEURS

require_once 'db.php';
$pdo = getPdoInstance();

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