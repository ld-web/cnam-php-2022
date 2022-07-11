<?php
echo "<h1>Boucles</h1>";
// Tableau = array
$array = [1, 1, "test", true, "coucou"];
// Affiche à l'écran le contenu d'une variable
// Attention, cette fonction affiche le contenu de manière brute
// Elle ne doit donc pas être utilisée en production
var_dump($array);

// Accéder au deuxième élément du tableau :
// J'affiche la valeur qui se trouve derrière l'index n°1
echo "Deuxième élément : " . $array[1] . "<br /><br />";

// Boucler sur le tableau $array
// afin d'afficher chaque élément à l'écran
// Pour cela, utilisez 4 boucles différentes présentes en PHP
// Exemple :
// - while(..) {}
// - for (...) {}
// - ...

echo "<h2>Boucle while</h2>";
$i = 0; // <-- instruction d'initialisation
$arraySize = count($array);
while ($i < $arraySize) { // <-- condition de maintien
  echo $array[$i] . "<br />";
  $i++; // <-- instruction de pas
}

echo "<h2>Boucle for</h2>";
// instruction d'initialisation, condition de maintien et instruction de pas sont toutes dans la déclaration du for
for ($i = 0; $i < $arraySize; $i++) {
  echo $array[$i] . "<br />";
}

echo "<h2>Boucle do...while</h2>";
// do...while : peut être dangereux si le tableau est vide, comme dans notre cas
$i = 0; // <-- instruction d'initialisation
do {
  echo $array[$i] . "<br />";
  $i++; // <-- instruction de pas
} while ($i < $arraySize); // <-- condition de maintien

echo "<h2>Boucle foreach</h2>";
foreach ($array as $item) {
  echo $item . "<br />";
}
