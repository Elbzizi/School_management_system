1/Donnez le code et nom des clients originaires de 
« Casablanca » classés par ordre alphabétique croissant (nom).
SELECT code, nom
FROM clients
WHERE ville = 'Casablanca'
ORDER BY nom ASC;

2/Donnez le code et le libellé des produits de prix supérieur à 1500 DH.
SELECT code, libellé
FROM produits
WHERE prix > 1500;

3/Donnez la liste des factures du client de code 2.
SELECT *
FROM factures
WHERE client_code = 2;

4/Donnez la référence et la date des factures du client « SAMIR ».
SELECT reference, date
FROM factures
JOIN clients ON factures.client_code = clients.code
WHERE clients.nom = 'SAMIR';

5/Donnez la liste des produits (code, libellé, prix et prixTTC 20% de TVA) dont le prix est compris entre 1000 DH et 3000 DH. Afficher le résultat par ordre décroissant de prix.
SELECT code, libellé, prix, prix * 1.2 AS prixTTC
FROM produits
WHERE prix BETWEEN 1000 AND 3000
ORDER BY prix DESC;

6/Donnez la liste des factures (référence, date, nom de produit et prix) ayant une quantité achetée supérieure à 10.
SELECT f.reference, f.date, p.nom, p.prix
FROM factures f
JOIN produits p ON f.produit_code = p.code
WHERE f.quantité > 10;
