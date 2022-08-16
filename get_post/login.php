<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
</head>

<body>
  <h1>Connexion</h1>

  <form action="authentication.php" method="POST">
    <div>
      <label for="username">Nom d'utilisateur</label>
      <input type="text" name="username" id="username" />
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" />
    </div>
    <button type="submit">Connexion</button>
  </form>
</body>

</html>