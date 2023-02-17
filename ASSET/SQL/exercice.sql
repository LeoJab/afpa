-------------------------------- HOTEL --------------------------------

-------- Lot 1 --------

select hot_nom AS 'Nom Hotel', hot_ville AS 'Ville Hotel'
from hotel

select cli_nom AS 'Nom Client', cli_prenom AS 'Prenom Client', cli_adresse AS 'Adresse Client'
FROM clientt
WHERE cli_nom LIKE 'white'

select sta_nom AS 'Nom Station', sta_altitude AS 'Altitude Station'
from station
where sta_altitude < 1000

select cha_numero As 'Numero Chambre', cha_capacite AS 'Capacite Chambre'
from chambre
where cha_capacite > 1

select cli_nom AS 'Nom Client', cli_ville AS 'Ville Client'
from clientt
where cli_ville not like 'Londres'

select hot_nom AS 'Nom Hotel', hot_ville AS 'Ville Hotel', hot_categorie AS 'Categorie Hotel'
from hotel
where hot_ville like 'bretou' and hot_categorie > 3


-------- Lot 2 --------

select  sta_nom AS 'Nom Station', hot_nom AS 'Nom Hotel', hot_categorie AS 'Categorie Hotel', hot_ville AS 'Ville Hotel'
from hotel
inner join station on hot_sta_id = sta_id

select hot_nom AS 'Nom Hotel', hot_categorie AS 'Categorie Hotel', hot_ville AS 'Ville Hotel', cha_numero AS 'Numero Chambre'
from hotel
inner join chambre on hot_id = cha_hot_id

select hot_nom AS 'Nom Hotel', hot_categorie AS 'Categorie Hotel', hot_ville AS 'Ville Hotel', cha_numero AS 'Numero Chambre', cha_capacite AS 'Capacite Chambre'
from hotel
inner join chambre on hot_id = cha_hot_id
where cha_capacite > 1 and hot_ville like 'bretou'
order by cha_capacite

select cli_nom AS 'Nom Client', hot_nom AS 'Nom Hotel', res_date AS 'Date Reservation'
from reservation
inner join clientt on cli_id = res_cli_id
inner join chambre on cha_id = res_cha_id
inner join hotel on hot_id = cha_hot_id
order by res_date

select cha_numero AS 'Numero Chambre', cha_capacite AS 'Capacite Chambre', hot_nom AS 'Nom Hotel', sta_nom AS 'Nom Station'
from chambre
inner join hotel on hot_id = cha_hot_id
inner join station on sta_id = hot_sta_id
group by cha_capacite
order by cha_numero

select cli_nom AS 'Nom Client', hot_nom AS 'Nom Hotel', res_date_debut AS 'Début du séjour', datediff(res_date_fin, res_date_debut) AS 'Durée du séjour'
from reservation
inner join clientt on cli_id = res_cli_id
inner join chambre on cha_id = res_cha_id
inner join hotel on hot_id = cha_hot_id
order by res_date_debut


-------- Lot 3 --------

select sta_nom AS 'Nom Station', COUNT(hot_sta_id) as 'Nombre Hotels'
from hotel
inner join station on hot_sta_id = sta_id
group by hot_sta_id

select hot_nom AS 'Nom Hotel', COUNT(cha_hot_id) AS 'Nombre de chambre'
from hotel
inner join chambre on hot_id = cha_hot_id
inner join station on hot_sta_id = sta_id
group by hot_sta_id

select hot_nom AS 'Nom Hotel', COUNT(cha_hot_id) AS 'Nombre de chambre'
from hotel
inner join chambre on hot_id = cha_hot_id
inner join station on hot_sta_id = sta_id
where cha_capacite > 1
group by hot_sta_id

select cli_nom AS 'Nom Client', COUNT(res_cha_id) AS 'Nombre Reservation', hot_nom AS 'Nom Hotels'
from reservation
inner join clientt on res_cli_id = cli_id
inner join chambre on res_cha_id = cha_id
inner join hotel on cha_hot_id = hot_id
where cli_nom like 'Squire'
group by hot_id

SELECT sta_nom, avg(DATEDIFF(res_date_fin, res_date_debut)) AS 'Durée Moyenne de Reservation'
FROM reservation, chambre, station
inner join hotel on hot_sta_id = sta_id
WHERE res_cha_id = cha_id AND cha_hot_id = hot_id  
GROUP BY hot_sta_id





------------------------------- PAPYRUS -------------------------------
------------------------ Extraction de Données ------------------------

select numcom AS 'Numero de Commande', numfou AS 'Numero de Fournisseur'
from fournis
natural join entcom
where numfou = 9120

select numfou AS 'Numero de Fournisseur'
from vente

select numfou AS 'Numero de Fournisseur', COUNT(codart) AS 'Nombre de Commande'
from vente
group by numfou

select *
from produit
where stkphy <= stkale and qteann < 1000

select numfou AS 'Numero de Fournisseur', nomfou AS 'Nom du Fournisseur', posfou AS 'CP du Fournisseur'
from fournis
where (posfou between 75000 and 75999) or (posfou between 78000 and 78999) or (posfou between 92000 and 92999) or (posfou between 77000 and 77999)
order by posfou

select numcom AS 'Numero de Commande', derliv
from ligcom
where (derliv between 20180401 and 20180430) or (derliv between 20190401 and 20190430) or (derliv between 20200401 and 20200430) or (derliv between 20210401 and 20210430) or (derliv between 20220401 and 20220430)
or (derliv between 20180301 and 20180330) or (derliv between 20190301 and 20190330) or (derliv between 20200301 and 20200330) or (derliv between 20210301 and 20210330) or (derliv between 20220301 and 20220330)

select numcom AS 'Numero de Commande', priuni * qtecde AS 'Prix Total'
from ligcom
where priuni * qtecde > 10000
group by priuni * qtecde

select numfou AS 'Numero de Fournisseur', numcom AS 'Numero de Commande', derliv
from ligcom
natural join entcom
natural join fournis

select numcom AS 'Numero de Commande', numfou AS 'Numero de Fournisseur', libart AS 'Produit', priuni * qtecde AS 'Prix Total'
from entcom 
natural join ligcom
natural join fournis
natural join produit
where obscom like 'Commande urgente'

-- 12 ----------

select nomfou
from fournis
natural join entcom
where numcom is not null
group by nomfou

select nomfou
from entcom
natural join fournis
where numcom is not null
group by nomfou

-- 13 ----------

select numcom, derliv
from ligcom
natural join entcom
natural join fournis
where numcom = 70210

select numcom, derliv
from fournis
natural join entcom
natural join ligcom
where numcom = 70210

----------------

select libart AS 'Produit', prix1 AS 'Prix'
from vente 
natural join produit 
where prix1 < 120

select libart AS 'Produit', nomfou AS 'Nom du Fournisseur'
from produit
natural join ligcom
natural join entcom
natural join fournis
where stkphy <= ((150 * stkale) / 100)
order by produit ASC, nomfou ASC

select libart AS 'Produit', nomfou AS 'Nom du Fournisseur'
from produit
natural join ligcom
natural join entcom
natural join fournis
natural join vente 
where stkphy <= ((150 * stkale) / 100) and delliv < 30
order by produit ASC, nomfou ASC

select nomfou AS 'Nom du Fournisseur', stkphy AS 'Stock Physique'
from produit
natural join vente
natural join fournis
group by nomfou
order by stkphy DESC

select libart AS 'Produit', stkphy AS 'Stock Physique', qteann AS 'Quantité Annuelle'
from produit
where stkphy < ((10 * qteann) / 100)

select nomfou AS 'Nom du Fournisseur', (priuni * qteliv - ((20 * (priuni * qteliv)) / 100)) AS "Chiffre d'Affaire"
from vente
natural join ligcom
natural join fournis
where derliv between 20180101 and 20181231





------------------------------- PAPYRUS -------------------------------
---------------------- Mettre à jour des données ----------------------

update vente
set prix1 = prix1 * 1.04, prix2 = prix2 * 1.02
where numfou = 9180

update vente
set prix2 = prix1
where prix2 = 0
--where prix2 is null

update entcom
natural join fournis
set obscom = '*****'
where satisf < 5

-- 4 -----------

delete from ligcom
where codart = 'I110'

delete from vente
where codart = 'I110'

delete from produit
where codart = 'I110'

----------------