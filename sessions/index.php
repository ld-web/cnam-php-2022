<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Sessions</h1>
  <?php
  // Je démarre ma session
  session_start();
  // Seulement après avoir démarré ma session, je manipule mon tableau $_SESSION
  // $_SESSION['connected'] = false;
  var_dump($_SESSION);
  ?>
  <p><a href="admin.php">Administration</a></p>
</body>

</html>