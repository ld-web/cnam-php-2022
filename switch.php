<?php
$color = "yellow"; // <-- peut venir de n'importe où (par l'exemple l'URL)

if ($color === "green") {
  echo "Vert !";
} elseif ($color === "yellow") {
  echo "Jaune !!";
} else {
  echo "Probablement bleu";
}

echo "<br />";

switch ($color) {
  case "green":
  case "vert":
    echo "switch vert !";
    break;
  case "yellow":
    echo "switch yellow !";
  case "jaune":
    echo "vf : jaune";
    break;
  default:
    echo "switch Probablement bleu";
}
