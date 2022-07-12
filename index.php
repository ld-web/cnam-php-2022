<?php
/*
Sur plusieurs lignes
Etc...
etc...
*/

// echo est une méthode de la SPL
echo "Hello world !

";

$numero = 1;
$b = $numero + 1;

// Incrément
$numero = $numero + 1;
$numero += 4; // équivalent à la ligne au-dessus, mais avec la valeur 4
$numero++; // Juste pour + 1

echo $b . "<br />";

// booléen, string, int (integer), float, array
$hasLegalAge = true;
$price = 25.54;
$name = "Bob";
$firstname = 'John';
$age = 54;

// oprérateur de concaténation : .
echo $name . " " . $firstname . " a " . $age . " ans";
echo "<br />";
// On peut insérer des variables dans des guillemets doubles
// Elles seront interprétées
echo "$name $firstname a $age ans";
echo "<br />";
// En revanche, dans des apostrophes, elles ne le seront pas
echo '$name $firstname a $age ans';
echo "<br />";
// L'antislash '\' peut servir à échapper des caractères spéciaux
// Par "échapper", on entend échapper à l'analyse (parsing) de PHP
// Dans le cas ci-dessous, on indique à PHP que notre apostrophe
// précédée d'un \ ne doit pas être considérée comme un délimiteur
// de chaîne
echo 'L\'ami ' . $name . ' ' . $firstname . ' a ' . $age . ' ans';

// Constante - On fixe une et une seule fois une valeur
echo "<br />";
const APP_VERSION = "1.2.6";

echo "Version : " . APP_VERSION;

// Comparaison avec == et === (strict)
var_dump(2 == 2);
var_dump(2 == 3);

var_dump(2 == "2");
var_dump(2 === "2");

var_dump(0 == false);
var_dump(0 === false);
