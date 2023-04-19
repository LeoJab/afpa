/* Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix ) */
SELECT date_commande, nom_client, telephone_client, email_client, adresse_client, plat.libelle, plat.prix 
from commande 
JOIN plat on commande.id_plat = plat.id

/* Afficher la liste des plats en spécifiant la catégorie */
SELECT plat.libelle AS 'Plat', categorie.libelle AS 'Categorie'
from plat
join categorie on plat.id_categorie = categorie.id

/* Afficher les catégories et le nombre de plats actifs dans chaque catégorie */
SELECT categorie.libelle AS 'Categorie', count(plat.id) AS 'Nombre de plats'
from categorie
join plat on plat.id_categorie = categorie.id
where categorie.active like 'Yes'
group by categorie.libelle

/* Liste des plats les plus vendus par ordre décroissant */
SELECT plat.libelle AS 'Nom Plat', count(commande.quantite) AS 'Quantite'
from commande
join plat on commande.id_plat = plat.id
group by plat.libelle
ORDER BY Quantite DESC

/* Le plat le plus rémunérateur */
SELECT plat.libelle, SUM(total)
from commande
join plat on commande.id_plat = plat.id
group by commande.id_plat
order by SUM(total) DESC

/* Liste des clients et le chiffre d'affaire généré par client (par ordre décroissant) */
SELECT nom_client AS 'Nom Prenom', total
from commande
order by total DESC

/* 1. Ecrivez une requête permettant de supprimer les plats non actif de la base de données */
DELETE plat
WHERE ACTIVE LIKE 'no'

/* 2. Ecrivez une requête permettant de supprimer les commandes avec le statut livré */
DELETE commande
where etat like 'Livrée'

/* 3. Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie. */
INSERT INTO plat (libelle, description, prix, image, id_categorie, active)
VALUES ('Burger', 'Burger', 14, 'burger.jpg', 5, 'Yes')

/* 4. Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza' */
UPDATE plat
set prix = (prix * 1.10)
where plat.id_categorie = (select categorie.id
                            from categorie
                            where categorie.libelle = "Pizza")