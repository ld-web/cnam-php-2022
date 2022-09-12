<?php

function getPdoInstance(): PDO
{
  $dbParams = parse_ini_file("db.ini");
  //var_dump($dbParams);

  $dsn = "mysql:host=" . $dbParams['DB_HOST'] .
    ";dbname=" . $dbParams['DB_NAME'] .
    ";charset=utf8mb4";

  $user = $dbParams["DB_USER"];
  $password = $dbParams["DB_PASSWORD"];

  // Création de la connexion à la base de données
  return new PDO($dsn, $user, $password);
}
