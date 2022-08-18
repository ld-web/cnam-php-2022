<?php

$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=cnam-php-2022;charset=utf8mb4",
  "cnam-php-2022",
  "YfIbuy151ESIejLI"
);

var_dump($pdo);

$stmt = $pdo->query("SELECT * FROM users");
var_dump($stmt);

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
