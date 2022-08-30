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

  <form action="auth.php" method="post">
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" />
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" />
    </div>
    <div>
      <button type="submit">Connexion</button>
    </div>
  </form>
</body>

</html>