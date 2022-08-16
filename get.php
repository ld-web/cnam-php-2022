<?php
// $_GET contient l'ensemble des paramètres d'URL
// Il va les mapper sous la forme suivante :
// nom du paramètre = clé dans le tableau
// valeur du paramètre = valeur associée à la clé
// var_dump($_GET);

echo "Hello et bienvenue, " . $_GET['greet'];
