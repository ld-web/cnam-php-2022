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

## Fonctions

Une fonction est une suite d'instructions nommée, qu'on peut appeler partout où on en a besoin.

```php
<?php
function maFonction(string $param1, string $param2 = 'defaultValue'): string
{
  // Instructions à exécuter
}
```

La ligne de définition d'une fonction contient le mot-clé `function`, le nom de la fonction, ses éventuels paramètres, et son type de retour. Il s'agit de la **signature** de la fonction.

### Paramètres, valeurs par défaut

Les paramètres d'une fonction définissent les valeurs qui seront passées en entrée par le code appelant la fonction.

Il est possible de définir des paramètres **facultatifs**, en spécifiant une valeur par défaut.

```php
<?php
// Définition de la fonction
function direBonjour(string $nom = "Sam"): void // signature de la fonction
{
  echo "BONJOUR $nom !!!";
}
```

Je peux ainsi appeler la fonction avec ou sans paramètre :

```php
direBonjour("Bob"); // avec un paramètre
direBonjour(); // sans paramètre : valeur par défaut = "Sam"
```

> Voir le fichier `functions.php`

### Valeur de retour

Une fonction peut **retourner une valeur** au code appelant, avec l'instruction `return`.

> L'instruction `return`, quand elle est utilisée, **provoque la sortie** de la fonction

```php
<?php
function getAsParagraph(string $text): string
{
  return "<p>$text</p>";
  // Après un return, on n'écrit pas de code, car "return" provoque la sortie de la fonction
}
```

Dans ce cas, on peut récupérer la valeur retournée dans le code appelant :

```php
// on récupère et on met dans la variable $paragraph la valeur retournée depuis la fonction paragraphMajuscules
$paragraph = getAsParagraph("Hello world");
```

## L'inclusion de fichiers

En PHP, il est possible d'inclure un fichier dans un autre, à l'aide de plusieurs méthodes de la SPL.

Les deux plus couramment utilisées sont [`require`](https://www.php.net/manual/fr/function.require.php) et [`require_once`](https://www.php.net/manual/fr/function.require-once.php).

> ### Lorsqu'on inclut un fichier PHP B dans un autre fichier PHP A, alors on importe tous les symboles (constantes, variables, fonctions...) définis dans B dans le fichier A. Par ailleurs, B peut consommer n'importe quel symbole préalablement défini dans A

On va donc pouvoir séparer les différentes parties de notre script PHP en plusieurs fichiers, afin de découper plus proprement notre application, par exemple :

- Définition de données
- Réutilisation d'un élément d'interface
- Affichage d'un élément
- etc...

> Voir les fichiers `layout/header.php` et `layout/footer.php` qui sont inclus dans le fichier `list.php` par exemple

## Variables superglobales, paramètres GET

PHP nous permet de réaliser des sites **dynamiques**, c'est-à-dire que, par exemple, si on souhaite visiter la page d'un produit, on peut changer l'URL pour afficher le produit voulu.

La page affichée contiendra donc des informations différentes suivant le contexte de la requête. C'est cela qu'on entend ici par **dynamique**.

### Variables superglobales

Les variables superglobales sont des variables réservées à PHP et gérées par lui-même. Elles s'écrivent sous la forme `$_NOM`.

Les variables superglobales sont des tableaux (arrays). Chaque variable superglobale a un rôle particulier dans la prise en charge de la requête par PHP.

### $\_GET

Le tableau `$_GET` va contenir les paramètres d'URL.

Si je pars de l'URL suivante : `http://mondomaine.com/product.php`, alors je peux ajouter des paramètres à cette URL.

Pour ce faire, à la suite de l'URL, je vais ajouter un point d'interrogation `?`, suivi du nom de mon premier paramètre, le signe `=`, et la valeur du paramètre : `http://mondomaine.com/product.php?monParametre=maValeur`.

Du côté de PHP, quand il reçoit une requête avec une telle URL, il va prendre en charge les paramètres en **mappant** les paramètres d'URL dans le tableau `$_GET`.

> Encore une fois, c'est le rôle du tableau `$_GET`, et ceci est prévu dans le fonctionnement de PHP. Nous verrons petit à petit le rôle des différents tableaux superglobaux

Si je souhaite passer plusieurs paramètres dans mon URL, je peux les séparer par un caractère `&` : `http://mondomaine.com/product.php?monParametre=maValeur&monAutreParametre=monAutreValeur`.

Ce qu'il faut donc retenir :

- Le tableau `$_GET` contient les paramètres d'URL
- Dans l'URL, chaque paramètre est présenté de la manière suivante : `nom=valeur`
- Pour inscrire le premier paramètre dans l'URL, il faut le précéder du caractère `?`
- Pour séparer différents paramètres d'URL, on va utiliser le caractère `&`

> Dans le tableau `$_GET`, les paramètres sont représentés sous forme de tableau associatif : index = nom du paramètre, valeur = valeur du paramètre

### $\_POST

Le tableau `$_POST` contient les variables passées dans le corps de la requête.

> L'utilisation la plus répandue de ce tableau va être avec les formulaires

Ce qu'il est important de retenir, c'est que le tableau `$_POST`, tout comme `$_GET`, est nommé à partir de la méthode HTTP du même nom.

Par défaut, quand on affiche une page web, on utilise la méthode `GET`.

Mais, dans le cas d'un formulaire par exemple, on peut également utiliser la méthode `POST`.

Le fonctionnement est le même que pour la méthode `GET` : les variables passées dans le corps de la requête seront mappées dans le tableau sous forme nom/valeur => clé/valeur.

Voir ci-dessous le chapitre sur les formulaires.

## Formulaires

Les formulaires, en PHP, vont nous permettre de déclencher des traitements à partir de valeurs saisies par l'utilisateur.

Pour ça, on va réceptionner les valeurs dans le tableau `$_GET` ou `$_POST`.

### Méthode

Pour déterminer la méthode HTTP à utiliser, on utilisera l'attribut `method` de la balise `form` :

```html
<form method="POST">...</form>
```

### Cible

On peut également préciser la cible du formulaire : la page qui va réceptionner et traiter les informations saisies. On utilise pour ça l'attribut `action` :

```html
<form action="traitement.php" method="POST">...</form>
```

A la validation du formulaire, le serveur reçoit les données sur la page cible.

Si on utilise la méthode `GET`, alors les valeurs saisies sont reportées dans l'URL, sour forme de variable d'URL.

> Cela peut être utile dans le cas d'un moteur de recherche par exemple, si on souhaite partager l'URL à quelqu'un. Cette URL embarque alors l'ensemble des paramètres que l'on avait saisis dans le formulaire, on peut donc "reproduire" la même recherche directement à partir de l'URL

Si on utilise la méthode `POST`, alors les variables sont passées dans le cors de la requête.

> La méthode `POST` doit être impérativement utilisée pour un formulaire de login par exemple. Les données saisies ne seront pas exposées dans l'URL, mais seront intégrées dans le cors de la requête. Si on utilise HTTPS, ce corps sera donc chiffré et les données qui s'y trouvent également

Dans le fichier cible, on peut récupérer les valeurs du formulaire dans le tableau `$_POST` ou `$_GET`, selon la méthode choisie dans le formulaire :

```php
$email = $_POST['email'];
```

> Important : si l'attribut `action` n'est pas renseigné, alors la cible par défaut du formulaire sera le script courant. Si l'attribut `method` n'est pas renseigné, alors la méthode par défaut sera `GET`

### Champs du formulaire

Dans un formulaire HTML, on encadre l'ensemble des champs par la balise `form`.

Pour qu'on soit capable de retrouver tous les champs de notre formulaire dans la cible qui va les traiter, il est **obligatoire** que chaque champ ait un attribut `name` :

```html
<form action="traitement.php" method="POST">
  <input type="text" name="prenom" />
</form>
```

Dans `traitement.php`, je pourrai récupérer le prénom saisi :

```php
$prenom = $_POST['prenom'];
```

> Attention, si vous oubliez l'attribut `name`, alors le champ ne sera pas récupéré par PHP et vous ne pourrez pas récupérer la valeur saisie !
