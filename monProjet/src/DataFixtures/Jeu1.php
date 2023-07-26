<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Commande;
use App\Entity\Utilisateur;
use App\Entity\Detail;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //CATEGORIES
        $categorieBurger = new Categorie();
        $categorieBurger->setLibelle('Burger');
        $categorieBurger->setImage('burger_cat.jpg');
        $categorieBurger->setActive('Yes');
        $manager->persist($categorieBurger);

        $categoriePizza = new Categorie();
        $categoriePizza->setLibelle('Pizza');
        $categoriePizza->setImage('pizza_cat.jpg');
        $categoriePizza->setActive('Yes');
        $manager->persist($categoriePizza);

        $categoriePasta = new Categorie();
        $categoriePasta->setLibelle('Pasta');
        $categoriePasta->setImage('pasta_cat.jpg');
        $categoriePasta->setActive('Yes');
        $manager->persist($categoriePasta);

        $categorieSandwich = new Categorie();
        $categorieSandwich->setLibelle('Sandwich');
        $categorieSandwich->setImage('sandwich_cat.jpg');
        $categorieSandwich->setActive('Yes');
        $manager->persist($categorieSandwich);

        $categorieWraps = new Categorie();
        $categorieWraps->setLibelle('Wraps');
        $categorieWraps->setImage('wraps_cat.jpg');
        $categorieWraps->setActive('Yes');
        $manager->persist($categorieWraps);

        $categorieSalade = new Categorie();
        $categorieSalade->setLibelle('Salades');
        $categorieSalade->setImage('salade_cat.jpg');
        $categorieSalade->setActive('Yes');
        $manager->persist($categorieSalade);

        //PLATS
        $platBurger = new Plat();
        $platBurger->setLibelle('Burger');
        $platBurger->setDescription('Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .');
        $platBurger->setPrix('8');
        $platBurger->setImage('hamburger.jpg');
        $platBurger->setActive('Yes');
        $platBurger->setCategorie($categorieBurger);
        $manager->persist($platBurger);

        $platPizzaBianca = new Plat();
        $platPizzaBianca->setLibelle('Pizza Bianca');
        $platPizzaBianca->setDescription('Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.');
        $platPizzaBianca->setPrix('14');
        $platPizzaBianca->setImage('pizza-salmon.jpg');
        $platPizzaBianca->setActive('Yes');
        $platPizzaBianca->setCategorie($categoriePasta);
        $manager->persist($platPizzaBianca);

        $platBuffaloChicken = new Plat();
        $platBuffaloChicken->setLibelle('Buffalo Chicken Wrap');
        $platBuffaloChicken->setDescription('Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.');
        $platBuffaloChicken->setPrix('5');
        $platBuffaloChicken->setImage('buffalo-chicken.jpg');
        $platBuffaloChicken->setActive('Yes');
        $platBuffaloChicken->setCategorie($categorieWraps);
        $manager->persist($platBuffaloChicken);

        $platCheeseburger = new Plat();
        $platCheeseburger->setLibelle('Cheeseburger');
        $platCheeseburger->setDescription('Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.');
        $platCheeseburger->setPrix('8');
        $platCheeseburger->setImage('cheeseburger.jpg');
        $platCheeseburger->setActive('Yes');
        $platCheeseburger->setCategorie($categorieBurger);
        $manager->persist($platCheeseburger);

        $platSaladeCesar = new Plat();
        $platSaladeCesar->setLibelle('Salade César');
        $platSaladeCesar->setDescription('Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.');
        $platSaladeCesar->setPrix('7');
        $platSaladeCesar->setImage('cesar_salad.jpg');
        $platSaladeCesar->setActive('Yes');
        $platSaladeCesar->setCategorie($categorieSalade);
        $manager->persist($platSaladeCesar);

        $platPizzaMargherita = new Plat();
        $platPizzaMargherita->setLibelle('Pizza Margherita');
        $platPizzaMargherita->setDescription('Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...');
        $platPizzaMargherita->setPrix('14');
        $platPizzaMargherita->setImage('pizza-margherita.jpg');
        $platPizzaMargherita->setActive('Yes');
        $platPizzaMargherita->setCategorie($categoriePizza);
        $manager->persist($platPizzaMargherita);

        //UTILISATEUR
        $utilisateur1 = new Utilisateur();
        $utilisateur1->setNom('Jabelin');
        $utilisateur1->setPrenom('Léo');
        $utilisateur1->setTelephone('0611516547');
        $utilisateur1->setEmail('leojabelin@laposte.net');
        $utilisateur1->setPassword('1234');
        $utilisateur1->setAdresse("319 rue d'oresmaux");
        $utilisateur1->setCp('80680');
        $utilisateur1->setVille('Grattepanche');
        $utilisateur1->setRoles('ROLE_ADMIN');
        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateur();
        $utilisateur2->setNom('Jabelin');
        $utilisateur2->setPrenom('Client');
        $utilisateur2->setTelephone('0611516547');
        $utilisateur2->setEmail('leojabelin@laposte.net');
        $utilisateur2->setPassword('1234');
        $utilisateur2->setAdresse("319 rue d'oresmaux");
        $utilisateur2->setCp('80680');
        $utilisateur2->setVille('Grattepanche');
        $utilisateur2->setRoles('ROLE_CLIENT');
        $manager->persist($utilisateur2);

        //Commande
        $commande1 = new Commande();
        $commande1->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande1->setTotal(16.00);
        $commande1->setEtat(1);
        $commande1->setUtilisateur($utilisateur2);
        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande2->setTotal(32.00);
        $commande2->setEtat(3);
        $commande2->setUtilisateur($utilisateur2);
        $manager->persist($commande2);

        $commande3 = new Commande();
        $commande3->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande3->setTotal(24.00);
        $commande3->setEtat(0);
        $commande3->setUtilisateur($utilisateur2);
        $manager->persist($commande3);

        $commande4 = new Commande();
        $commande4->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande4->setTotal(10.00);
        $commande4->setEtat(2);
        $commande4->setUtilisateur($utilisateur2);
        $manager->persist($commande4);

        $commande5 = new Commande();
        $commande5->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande5->setTotal(50.00);
        $commande5->setEtat(1);
        $commande5->setUtilisateur($utilisateur2);
        $manager->persist($commande5);

        $commande6 = new Commande();
        $commande6->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande6->setTotal(20.00);
        $commande6->setEtat(3);
        $commande6->setUtilisateur($utilisateur2);
        $manager->persist($commande6);

        $commande7 = new Commande();
        $commande7->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande7->setTotal(30.00);
        $commande7->setEtat(0);
        $commande7->setUtilisateur($utilisateur2);
        $manager->persist($commande7);

        $commande8 = new Commande();
        $commande8->setDateCommande(new \DateTime('2022-07-12 15:30:00'));
        $commande8->setTotal(5.00);
        $commande8->setEtat(1);
        $commande8->setUtilisateur($utilisateur2);
        $manager->persist($commande8);

        // Detail
        $detail1 = new Detail();
        $detail1->setQuantite(2);
        $detail1->setCommande($commande1);
        $detail1->setPlats($platBurger);
        $manager->persist($detail1);

        $detail2 = new Detail();
        $detail2->setQuantite(4);
        $detail2->setCommande($commande2);
        $detail2->setPlats($platPizzaBianca);
        $manager->persist($detail2);

        $detail3 = new Detail();
        $detail3->setQuantite(1);
        $detail3->setCommande($commande3);
        $detail3->setPlats($platBuffaloChicken);
        $manager->persist($detail3);

        $detail4 = new Detail();
        $detail4->setQuantite(5);
        $detail4->setCommande($commande4);
        $detail4->setPlats($platCheeseburger);
        $manager->persist($detail4);

        $detail5 = new Detail();
        $detail5->setQuantite(3);
        $detail5->setCommande($commande5);
        $detail5->setPlats($platSaladeCesar);
        $manager->persist($detail5);

        $detail6 = new Detail();
        $detail6->setQuantite(3);
        $detail6->setCommande($commande6);
        $detail6->setPlats($platPizzaMargherita);
        $manager->persist($detail6);

        $detail7 = new Detail();
        $detail7->setQuantite(2);
        $detail7->setCommande($commande7);
        $detail7->setPlats($platBurger);
        $manager->persist($detail7);

        $detail8 = new Detail();
        $detail8->setQuantite(1);
        $detail8->setCommande($commande8);
        $detail8->setPlats($platCheeseburger);
        $manager->persist($detail8);

        $manager->flush();
    }
}
