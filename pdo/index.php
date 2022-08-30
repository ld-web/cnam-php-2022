<?php

require_once 'db.php';
$pdo = getPdoInstance();

var_dump($pdo);

$stmt = $pdo->query("SELECT * FROM users");
var_dump($stmt);

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
