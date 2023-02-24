-- 1.
select CompanyName AS 'Société', ContactName AS 'Contact', ContactTitle AS 'Fonction', phone AS 'Téléphone'
from customers
where country like 'France'

-- 2.
select productname AS 'Produit', unitprice AS 'Prix'
from products
natural join suppliers
where companyname like 'Exotic Liquids'

-- 3.
select CompanyName AS 'Fournisseur', count(ProductId) AS 'Nbre produits'
from products
natural join suppliers
where country = 'France'
group by companyname
order by count(ProductId) DESC

-- 4.
select CompanyName AS 'Client', count(orderID) AS 'Nbre commandes'
from customers
natural join orders
where country = 'France'
group by companyname
having count(orderID) > 10
order by count(orderID)

-- 5.
select CompanyName AS 'Client', SUM(unitprice * Quantity) AS CA, country AS 'Pays'
from orders
natural join orderdetails
natural join customers
group by customerID
having CA > 30000
order by CA DESC

-- 6.
select shipcountry AS 'Pays'
from orderdetails
natural join products
natural join suppliers
natural join orders
where companyname like 'Exotic Liquids'
group by shipcountry

-- 7.
select SUM(Quantity * unitprice) AS 'Montant Ventes 97'
from orders
natural join orderdetails
where OrderDate between '19970101' and '19971231'
group by year(OrderDate)

-- 8.
select month(OrderDate) AS 'Mois 91', SUM(Quantity * unitprice) AS 'Montant Ventes'
from orders
natural join orderdetails
where OrderDate between '19970101' and '19971231'
group by month(OrderDate)

-- 9.
select OrderDate AS 'Date de dernière commande'
from orders
natural join customers
where CompanyName like 'Du monde entier'
order by OrderDate DESC
limit 1

-- 10.
select ROUND(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Délai moyen de livraison en jours'
from orders