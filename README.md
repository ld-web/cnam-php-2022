# CNAM - PHP - Introduction

## Bases

### Fichiers

Le fichier par défaut est `index.php`.

Dans notre exemple, avec WampServer, si on crée un nouveau dossier `cnam-php-intro` à la racine du serveur web (dossier `www`), alors on pourra accéder à la page `index.php` automatiquement en allant consulter la page `http://localhost/cnam-php-intro`.

Si on crée une autre page `test.php` dans le dossier `cnam-php-intro`, alors on pourra y accéder en consultant la page `http://localhost/cnam-php-intro/test.php`.

### Tags d'ouverture et fermeture

Pour écrire du code PHP, on doit utiliser la balise d'ouverture `<?php`

Si on écrit du PHP dans du HTML, on doit bien séparer les sections de code PHP en les refermant avec `?>`

Exemple :

```php
//...
<body>
  <h1><?php echo "Coucou"; ?></h1>
  <?php
  $numero = 1;
  echo "Numéro : $numero<br />";
  echo '$numero<br />';
  echo 'Numéro : ' . $numero . '<br />';
  ?>

  <br />
//...
```

### Bases à retenir

> - Les variables commencent par le caractère `$`
> - Les instructions se terminent par un `;`
> - On peut utiliser les guillemets doubles `"` ou simples `'` pour délimiter une chaîne de caractères
> - Quand on utilise des guillemets doubles, on peut directement insérer des variables dans la chaîne, sans les concaténer
> - L'opérateur de concaténation de chaîne en PHP est le point `.`

## Commentaires

En PHP, comme dans n'importe quel langage, il est possible de **commenter** son code.

### Syntaxe

Il y a deux syntaxes possibles :

- Commentaire sur une seule ligne : `// Mon commentaire`
- Commentaire sur plusieurs lignes :

```php
/*
Première ligne
Seconde ligne
*/
```

## Constantes

Une constante en PHP se définir par une valeur **non modifiable**. On peut la déclarer avec le mot-clé `const`.

> On peut aussi utiliser la méthode `define` de la SPL (Standard Php Library)

```php
const MA_CONSTANTE = 4;
```

- Une constante n'est pas préfixée par `$`, comme les variables
- On écrira le nom d'une constante en majuscules

## Tableaux

Un tableau est une suite de valeurs accolées sous forme de **collection**. C'est une structure de données très courante dans les langages de programmation.

```php
<?php
// Déclaration d'un tableau
$monTableau = [1, 2, 3];
```

Chaque élément d'un tableau est **indexé**. Dans l'exemple ci-dessus, les indexes (ou bien **clés**) du tableau sont numérotés automatiquement **à partir de 0**.

Si on veut accéder au premier élément, on écrira donc :

```php
<?php
// Utiliser les crochets pour accéder à l'élément d'un tableau
echo $monTableau[0];

// On peut remplacer 0 par une variable ou une expression
// Par exemple, si je souhaite accéder au dernier élément
$nbElements = count($monTableau);
$derniereValeur = $monTableau[$nbElements - 1];
```

On peut également personnaliser les clés du tableau. Cela constitue alors un **tableau associatif**, ou bien **tableau clé/valeur**.

```php
// Tableau associatif
// Clés / Valeurs
// On spécifie nous-mêmes les clés
$arrayIndexes = [2 => 1, "autre test" => 4];
```

Dans ce cas, on pourra accéder à un élément en indiquant sa clé, même personnalisée ou de type `string` :

```php
$value = $arrayIndexes["autre test"]; // $value contiendra la valeur 4
```

Plusieurs structures de contrôle permettent d'effectuer des actions sur les tableaux (affichage, manipulation).

Généralement, on va utiliser des **boucles** pour afficher chaque élément d'un tableau.

> Voir le fichier `array.php` :
>
> - `for`
> - `while`
> - `foreach`
> - `do...while`

## Comparaison et égalité, différence

Quand on veut vérifier qu'une valeur est égale à une autre en PHP, on va utiliser l'opérateur de comparaison `==`.

On peut également tester l'égalité de manière plus **stricte**, en comparant **à la fois la valeur et le type** des variables. Dans ce cas, on va utiliser `===`.

```php
$a = "3"; // type string
$b = 3; // type int

$a == $b; // Vrai => comparaison sur les valeurs
$a === $b; // Faux => comparaison sur les valeurs ET le type, les types sont différents
```

L'opérateur "différent de" en PHP est `!=`. De la même façon, on pourra comparer de manière stricte 2 variables en utilisant `!==`.

## Switch

La structure de contrôle `switch` permet d'exécuter du code de manière conditionnelle. Dans ce sens, elle se rapproche du `if`.

En revanche, sa syntaxe consiste simplement, à partir d'une variable, d'énumérer les cas possibles pour lesquels on aimerait qu'une ou plusieurs actions soient effectuées, ainsi qu'un cas par défaut qui couvrera la cas non supportés (un peu comme un `else` à la fin d'un `if`).

Pour chaque cas, PHP exécutera les lignes suivantes (**y compris les `cases` suivant**) jusqu'à la prochaine instruction `break`, qui provoque la sortie du `switch`.

```php
// Syntaxe
switch ($variable) {
  case "valeur 1":
    //actions pour la valeur 1...
    break;
  case "valeur 2":
    //actions pour la valeur 2...
    break;
  case "valeur 3":
    //actions pour la valeur 3 ET la valeur 4...
  case "valeur 4":
    //actions pour la valeur 4...
    break;
  default:
    //actions pour la valeur 5 et le reste des valeurs, non supportées
    //le break sur le cas par défaut, qui est le dernier, n'est pas nécessaire
}
```
