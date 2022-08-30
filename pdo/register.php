<?php
// Traitement du formulaire
if (
  !empty($_POST) &&
  !empty($_POST['name']) && // Validation : champ requis
  !empty($_POST['firstname']) &&
  !empty($_POST['password']) &&
  !empty($_POST['email']) &&
  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false // Vérifier le format de l'email
) {
  // Récupération des données de formulaire
  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 15]);
  $email = $_POST['email'];

  var_dump($name);
  var_dump($firstname);
  var_dump($passwordHash);
  var_dump($email);

  require_once 'db.php';
  $pdo = getPdoInstance();

  // Définition de la requête
  // Requête non préparée (dangereux, car vulnérable aux injections SQL)
  // $query = "INSERT INTO `users`(`name`, `firstname`, `email`) VALUES
  // ('$name', '$firstname', '$email')";

  // Requête préparée
  $stmt = $pdo->prepare("INSERT INTO users (name, firstname, password, email) VALUES (:name, :firstname, :password, :email)");
  $res = $stmt->execute([
    "name" => $name,
    "firstname" => $firstname,
    "password" => $passwordHash,
    "email" => $email
  ]);

  // Exécution de la requête
  // $res = $pdo->query($query);
  var_dump($res);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>

<body>
  <h1>Inscription</h1>

  <form method="post">
    <div>
      <label for="name">Nom</label>
      <input type="text" name="name" id="name" />
    </div>
    <div>
      <label for="firstname">Prénom</label>
      <input type="text" name="firstname" id="firstname" />
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" />
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" />
    </div>
    <div>
      <button type="submit">Inscription</button>
    </div>
  </form>
</body>

</html>