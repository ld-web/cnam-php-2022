<?php
require_once 'db.php';
$pdo = getPdoInstance();

if (empty($_POST['email'])) {
  header('Location: login.php');
  exit;
}

$stmt = $pdo->prepare('SELECT password FROM users WHERE email = :email');
$stmt->execute(['email' => $_POST['email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($user);
// Attention, ne pas générer un nouveau hash pour le comparer avec === sur le hash existant en base
// En effet, le hash qui va sortir ne sera tout simplement pas le même
// Décommenter la ligne ci-dessous pour en avoir la preuve à l'écran
// var_dump(password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 15]));

$verify = password_verify($_POST['password'], $user['password']);
var_dump($verify);

// Si $verify est true, alors enregistrer en session que l'utilisateur est connecté