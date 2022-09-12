<?php
var_dump($_POST); // Pas de fichiers dans le tableau $_POST
var_dump($_FILES);

if (isset($_FILES['myFile'])) {
  $file = $_FILES['myFile'];

  if ($file['error'] !== UPLOAD_ERR_OK) {
    // Gestion d'erreur
    //...
  } else {
    $path = pathinfo($file['name']);
    var_dump($path);
    $filename = $path['filename'] . md5(uniqid("img")) . "." . $path['extension'];

    $destination = __DIR__ . "/img/" . $filename;
    if (move_uploaded_file($file['tmp_name'], $destination)) {
      echo "Fichier $filename enregistré";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File upload</title>
</head>

<body>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="myFile" />
    <input type="submit" value="Envoyer" />
  </form>
</body>

</html>