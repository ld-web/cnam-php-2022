<?php
require_once('functions.php');
// Normalement, je récupère ici les données du formulaire de connexion
// Ces données DOIVENT ETRE envoyées avec la méthode POST

// Par la suite, je génère et prépare une requête SQL
// me permettant de vérifier le login et le mot de passe de l'utilisateur

// Si les vérifications s'avèrent correctes, alors je change le statut
// de ma session à "connecté". Pour ce faire, je vais changer la valeur
// qui se trouve derrière la clé "connected"
session_start();
$_SESSION['connected'] = true;
redirect('admin.php');
