<?php
// Nom + paramètre(s) + type de retour = signature de la fonction
function addition(int $a, int $b): int
{
  // return = je retourne une valeur au code qui m'a appelée
  return $a + $b;
}

function showAdditionResult(int $a, int $b): void
{
  $additionResult = addition($a, $b);
  echo $additionResult;
}

function direBonjour(string $nom = "Sam"): void
{
  echo "Bonjour $nom !";
}

function getAsParagraph(string $text, string $filter = null): string
{
  switch ($filter) {
    case "reverse":
      // Reverse string
      break;
    case "uppercase":
      $text = strtoupper($text);
      break;
    case "lowercase":
      $text = strtolower($text);
      break;
    default:
      // unnecessary as all filters are supported above
  }

  return "<p>$text</p>";
}
