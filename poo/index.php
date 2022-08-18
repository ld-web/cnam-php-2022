<?php
// classe, attributs, portées, encapsulation, instance, méthodes, new, objet, constructeur

// 1 - Définition d'une classe = définition d'un nouveau type
// Contenu = structure & comportement(s)
require_once 'Product.php';

// 2 - Instancier un objet qui aura pour type une classe
// Le mot-clé "new" déclenche l'appel de la méthode magique __construct
$product = new Product(1); // $product : instance de Produit
$product->setPrice(50);
echo $product->getPrice() . "<br />";
echo $product->ttcPrice();
var_dump($product);

$otherProduct = new Product(2); // <-- mot-clé new pour créer un objet
$otherProduct->setPrice(400);
var_dump($otherProduct->ttcPrice());
var_dump($otherProduct);

require_once 'User.php';

$user = new User();
$user->setAge(52);
var_dump($user);
var_dump($user->isMajeur());
