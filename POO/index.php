<?php 

// Inclusion des fichiers Plat.php, Categorie.php, PlatSpecial.php
require_once('categorie.php');
require_once('plat.php');
require_once('platspecial.php');

// Création d'une instance de la classe Categorie
$categoriePizza = new Categorie(1, "Pizzas", "Les meilleures pizzas du monde !");

// Création d'une instance de la classe Plat
$platMargherita = new Plat(1, "Margherita", "Tomate, mozzarella, basilic", 9.50, $categoriePizza);

// Création d'une instance de la classe PlatSpecial
$calzone = new PlatSpecial(1, "Calzone", "Tomate, mozzarella, jambon, champignons", 12.50, $categoriePizza, "Spécialité du chef");

// Affichage des propriétés des objets
$categoriePizza->afficher() ;
echo "\n";

// Affiche "1 Pizzas : Les meilleures pizzas du monde !"
$platMargherita->afficher();
echo "\n";
// Affiche "1 Margherita : Tomate, mozzarella, basilic (9.5€) 1 - Pizzas"
$calzone->afficher(); 
echo "\n";
// Affiche "1 Calzone : Tomate, mozzarella, jambon, champignons" (12.5€) Spécialité de chef

?>

