# CNAM - PHP - Introduction

## Instructions pour PDO

Renommer le fichier `pdo/db.ini.template` en `pdo/db.ini` ou bien créer un fichier `pdo/db.ini` et inscrire les informations de connexion à la  base de données sous ce format :

```ini
DB_HOST="xxx.xxx.xxx.xxx"
DB_NAME="name"
DB_USER="user"
DB_PASSWORD="password"
```

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

## Programmation orientée objet

La POO représente un changement de paradigme significatif. Nous allons parler dans cette partie des différentes notions à savoir pour pouvoir concevoir une architecture qui s'articule autour d'objets, capables de représenter des structures plus complexes que des variables simples (int, string, bool, etc...).

### Les classes

Pour représenter ces structures plus complexes, on peut commencer par définir des **classes** dans notre application.

Une classe représente un **nouveau type** utilisable dans notre application. C'est comme un squelette, une structure, ou un template, si vous voulez, qui représente une notion complexe présente dans notre application.

Par exemple, si nous voulons manipuler des produits dans notre application, au lieu de définir un tableau associatif avec clés et valeurs, nous pouvons **structurer** notre application de manière plus rigoureuse en définissant un nouveau type `Produit`.

Par la suite, nous pourrons instancier des objets de type `Produit`. Nous allons donc parler dans un premier temps de la définition d'une classe, puis de l'instanciation d'objets.

#### 1. Définition d'une classe

On utilise le mot-clé `class` pour définir un nouveau type :

```php
class Produit
{}
```

##### Attributs & méthodes

Dans la définition d'une classe, on va pouvoir ajouter des **attributs**. Ces attributs appartiennent donc à la classe.

On peut généralement appliquer le verbe **avoir** quand veut déterminer les différents attributs d'une classe. Par exemple : "Un produit a un nom et un prix" nous donne donc :

```php
class Produit
{
  public string $nom;
  public float $prix;
}
```

L'autre intérêt de créer de nouveaux types structurés dans notre application est de lui donner certaines **capacités**.

Ces capacités se matérialisent sous forme de **méthodes** de classe.

Par exemple, nous pourrions dire que notre classe `Produit` possède la capacité de renvoyer le prix TTC du produit, à partir de son attribut `prix` et d'un taux passé en paramètre :

```php
class Produit
{
  public string $nom;
  public float $prix;

  public function prixTTC(float $taux): float
  {
    return $this->prix + $this->prix * $taux;
  }
}
```

> Dans une méthode, on peut accéder aux attributs de la même classe en utilisant le mot-clé `$this`

Chaque attribut ou méthode possède une **portée** : `public`, `protected` et `private`.

##### Portées

Les portées sont définies pour indiquer au code qui va instancier un objet d'un certain type ce à quoi il peut accéder ou non.

Dans la classe `Produit` que nous avons définie plus haut, les 2 attributs sont publiques.

Cela signifie qu'on pourra y accéder directement depuis une instance d'objet avec la syntaxe suivante :

```php
$monNomDeProduit = $monInstanceDeProduit->nom;
```

Si on rend un attribut `private` ou privé, alors on ne peut plus accéder à l'attribut directement depuis une instance.

En réalité, nous allons définir ces attributs comme `private` afin de respecter le principe d'**encapsulation**.

##### Encapsulation

L'encapsulation consiste à placer les attributs d'une classe en `private`, puis de définir des méthodes d'**accession** et de **modification** de ces attributs, ou encore des **getters** et des **setters**.

L'intérêt principal de ce principe est de permettre à la classe de garder le contrôle sur ses attributs. On décide de la façon dont on va pouvoir renvoyer un attribut à tout code extérieur manipulant une instance de cette classe.

> Un autre intérêt peut être de passer un attribut en lecture seule par exemple, donc ne pas déclarer de méthode de modification pour cet attribut. Vu que l'attribut est privé, et qu'on ne dispose que d'une méthode publique d'accession à cet attribut, alors on ne peut que le récupérer, pas le modifier

Réécriture de la classe `Produit` pour respecter le principe d'encapsulation :

```php
class Produit
{
  private string $nom;
  private float $prix;

  // Getter / Accesseur, pour l'encapsulation de notre attribut $nom
  public function getNom(): ?string
  {
    // Ici on décide de renvoyer tout le temps le nom d'un produit en majuscules
    return strtoupper($this->nom);
  }

  // Setter / Modificateur, toujours pour l'encapsulation
  public function setNom(string $nom): void
  {
    $this->nom = $nom;
  }

  public function getPrix(): float
  {
    return $this->prix;
  }

  public function setPrix(float $prix)
  {
    $this->prix = $prix;
  }

  // Méthode utilitaire pour un produit, ne concerne pas l'encapsulation
  public function getPrixTtc(float $taux): float
  {
    return $this->prix + $this->prix * $taux;
  }
}
```

#### 2. Instanciation d'objets de classes

Une fois notre structure définie, à l'extérieur de la classe, nous avons la possibilité d'instancier et manipuler des produits. Pour ça, on peut tout simplement déclarer une variable et utiliser le mot-clé `new` avec le type souhaité :

```php
$produit = new Produit();
```

Une fois qu'on possède une instance de classe, on a accès à ses méthodes **publiques** :

```php
$produit->setNom("Téléviseur");
echo $produit->getNom(); // Affichera "Téléviseur"

$produit->setPrix(800);
echo $produit->getPrixTTC(0.2); // Affichera 960
```

#### Constructeur

Lors de l'instanciation d'une classe, on peut vouloir initialiser certaines valeurs par exemple. Pour cela, il est possible de définir un **constructeur** de classe, méthode qui s'exécutera automatiquement lors de l'instanciation de la classe :

```php
class Produit
{
  // ...

  public function __construct(string $nom = "Téléviseur")
  {
    $this->nom = $nom;
  }
}
```

Pour utiliser le constructeur, on peut alors instancier notre objet avec des paramètres, comme si on appelait une fonction :

```php
// Mon produit aura pour nom "Téléphone", mais si j'avais instancié mon produit sans passer d'argument il se serait automatiquement appelé "Téléviseur"
$produit = new Produit("Téléphone");
```

> En PHP, le constructeur d'une classe s'appelle une méthode **magique**, tout simplement car elle est automatiquement appelée dans un certain contexte (ici l'instanciation d'un objet de cette classe). Le nom d'une méthode magique est toujours précédé de 2 "underscores", caractère `_`

#### Constantes de classe

Il est possible de définir des constantes dans une classe. Cela peut être utile pour centraliser des données qu'on ne souhaite pas modifier au niveau de la classe elle-même, et ainsi pouvoir travailler avec dans ses différentes méthodes :

```php
<?php
class Email
{
  private string $email;

  //...

  public function getDomain(): string
  {
    $emailParts = explode('@', $this->email);
    return $emailParts[1];
  }
}

class SpamChecker
{
  private const SPAM_DOMAINS = ['youhou.com', 'mailinator.com', 'free.fr', 'hello.net'];

  public function isSpam(Email $email): bool
  {
    return array_search($email->getDomain(), self::SPAM_DOMAINS) !== false;
  }
}
```

> La manière d'accéder à une constante de classe diffère de l'accès à un attribut. Pour accéder à un attribut, on va utiliser une flèche `->` précédée du mot-clé `$this`. Pour accéder à une constante, on utilisera `self::MA_CONSTANTE` au sein de la classe, et `NomDeLaClasse::MA_CONSTANTE` en-dehors de la classe

## Bases de données - PDO

Nous avons, pour le moment, impliqué 2 acteurs dans le fonctionnement de notre application : un client (le navigateur) et un serveur (notre application PHP).

Si nous souhaitons réaliser une application retenant des données, et donnant la possibilité à ces données d'évoluer avec le temps, alors nous devons inclure un troisième acteur : un serveur de bases de données.

> Le serveur de bases de données représente la couche permettant de **persister** vos données, ou les sauvegarder, les retenir, si vous préférez

Ainsi, depuis notre application PHP, nous allons communiquer avec une base de données à l'aide d'un objet de type `PDO`.

> Retrouvez la documentation de la classe `PDO` sur la [documentation PHP](https://www.php.net/manual/fr/book.pdo.php)

### Accès

Dans un premier temps, il faut définir les propriétés d'accès à la base de données. Pour ça, on va devoir fournir à notre application certaines informations :

- Un hôte (l'endroit où se trouve le serveur de bases de données), éventuellement suivi d'un port
- Un nom de base de données (le "catalogue" contenant nos données, dans des tables)
- Un utilisateur
- Un mot de passe
- Un jeu de caractères

#### DSN

Le constructeur de la classe `PDO` attend, en premier paramètre, un **DSN** (Data Source Name).

Nous allons le définir de la façon suivante :

```php
/*
mysql:  => le pilote à utiliser pour la connexion
dbname  => le nom de la base de données
host    => l'hôte auquel il faut se connecter
charset => le jeu de caractères à utiliser
*/
$dsn = 'mysql:dbname=studi-php;host=127.0.0.1;charset=utf8mb4';
```

#### Connexion

Ensuite, en second et troisième paramètres, un utilisateur et un mot de passe, et nous pouvons instancier un nouvel objet de type `PDO` :

```php
$dsn = 'mysql:dbname=studi-php;host=127.0.0.1;charset=utf8mb4';
$user = 'mon_user';
$password = 'mon_mot_de_passe';

try {
  $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}
```

> La documentation nous indique que si la connexion a échoué, le constructeur de la classe peut lancer une exception. Il convient donc d'encadrer la construction de l'objet par un bloc `try/catch` afin d'avoir une gestion d'erreurs minimale

### Requêtes

Une fois que notre objet `PDO` est instancié, nous allons pouvoir l'utiliser pour émettre des requêtes SQL vers notre serveur de bases de données.

La manière la plus rapide d'exécuter une requête est d'utiliser la méthode `query` :

```php
$query = "SELECT * FROM users";
$stmt = $pdo->query($query);
```

Cette méthode nous renvoie une instace d'objet `PDOStatement`.

Par la suite, nous allons donc devoir parcourir les enregistrements de ce statement. Commençons par récupérer le premier :

```php
// row = ligne (contenant les données d'un enregistrement)
// fetch signifie "lire"/"récupérer"
$row = $stmt->fetch();
var_dump($row);
```

Si nous voulions récupérer tous les enregistrements, un par un donc, avec la méthode `fetch`, nous devrions utiliser une boucle :

```php
// Le while s'arrêtera automatiquement après la dernière ligne des résultats, puisque la méthode fetch renverra false
while ($row = $stmt->fetch()) {
  var_dump($row);
}
```

Enfin, si nous voulions récupérer tous les enregistrements directement dans une variable, nous pourrions également utiliser la méthode `fetchAll` :

```php
$results = $stmt->fetchAll();
```

#### Mode de lecture

##### Tableau

Par défaut, `fetch` ou `fetchAll` nous renvoient un tableau mélangeant des index numériques et des clés portant le nom des colonnes du résultat.

Si on veut récupérer seulement un tableau associatif, on peut l'indiquer à PDO :

```php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  var_dump($row);
}
```

On pourra ainsi exploiter chaque `$row` en accédant à ses colonnes via leur nom, comme un tableau associatif (`$row['nom']` par exemple).

#### Requêtes préparées

Utiliser `query` sur une instance de PDO peut être utile pour des requêtes simples ou statiques. Pour des requêtes dynamiques, et particulièrement des requêtes dans lesquelles on va vouloir utiliser des données provenant de l'utilisateur (paramètres GET/POST essentiellement), on va **préparer** la requête au lieu d'utiliser la concaténation.

Dans ce cas-là, le processus va se dérouler en 2 étapes :

- On prépare un `Statement` avec un ou plusieurs **paramètres de requête**
- On exécute le `Statement` en fournissant les valeurs que doivent prendre les paramètres de requête

```php
// 1 - Je prépare ma requête
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
// 2 - J'exécute ma requête en fournissant une valeur au(x) paramètre(s)
$stmt->execute([
  'id' => $_GET['id']
]);
```

> Ceci permet de se protéger contre les injections SQL, très faciles à mettre en oeuvre dans l'URL ou un formulaire

## Sessions

Les sessions permettent au serveur PHP de reconnaître une session de navigation donnée, donc potentiellement un utilisateur connecté. C'est grâce aux sessions, par exemple, qu'une fois connecté, on n'a pas besoin de se reconnecter à chaque page consultée.

L'identification d'une sessions par le serveur s'effectue par la lecture d'un **cookie**.

Par défaut, ce cookie sera nommé `PHPSESSID`, et contient une valeur aléatoire : l'identifiant de session.

Côté serveur, s'il identifie avec succès un `PHPSESSID`, alors il sera capable de restituer un contexte (un tableau de clés/valeurs) préalablement défini, et qu'on peut faire évoluer au fil des pages consultées.

Ainsi, une session peut suivre un utilisateur durant toute sa navigation sur notre application.

Les sessions permettent de fournir des fonctionnalités comme l'authentification ou un panier de produits par exemple.

### Démarrer une session

Pour utiliser les sessions dans notre application, il est obligatoire d'utiliser en premier lieu la fonction `session_start()` de la SPL.

Si aucune session n'était démarrée, le serveur crée un nouvel identifiant de session et le cookie associé pour le renvoyer au navigateur. Il initialise également la variable superglobale `$_SESSION`, vide par défaut.

S'il existait déjà une session stockée sur le serveur, alors le serveur restitue le tableau `$_SESSION` avec les paires de clés/valeurs que l'on a pu définir pour cet utilisateur (connecté ? Est-ce qu'il y a un panier ? Avec quel(s) produit(s) dedans ? Etc...).

```php
// 1ère exécution : création d'un identifiant de session
// exécutions suivantes : lecture du cookie PHPSESSID et restitution de la session
// Attention : si on n'utilise pas session_start(), le tableau $_SESSION n'est pas défini !
session_start();

// Ici, $_SESSION est vide
var_dump($_SESSION);

$_SESSION['connected'] = false;

// A présent, $_SESSION contient une clé "connected" associée à la valeur false
// Si on recharge la page, alors le var_dump d'avant, qui présentait une session vide, présentera à présent le tableau contenant déjà la clé "connected"
var_dump($_SESSION);
```

> Note importante : si vous appelez `session_start()` plusieurs fois, une erreur sera générée par PHP. Veillez à l'appeler une et une seule fois au début de l'exécution de votre script. Vous pouvez également vous documenter pour trouver un moyen de vérifier si une session a déjà été démarrée, et la démarrer si ce n'est pas le cas

### Détruire une session

Pour mettre fin à une session (déconnexion de l'utilisateur par exemple), on va dans un premier temp vider le tableau superglobal `$_SESSION`, puis détruire la session avec une méthode de la SPL :

```php
session_start(); // Bien penser à utiliser session_start
$_SESSION = [];
session_destroy();
```
