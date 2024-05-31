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

7/Donnez le nombre de produits de chaque facture.
SELECT facture_code, COUNT(produit_code) AS nombre_produits
FROM facture_produits
GROUP BY facture_code;

8/Donnez le code et le nom des clients ayant plus de deux factures.
SELECT clients.code, clients.nom
FROM clients
JOIN factures ON clients.code = factures.client_code
GROUP BY clients.code, clients.nom
HAVING COUNT(factures.code) > 2;

9/Donnez la liste des factures (référence, date, nom du client, libellé de produit, prix, qte, (prix*qte) des clients originaires de « Agadir ».
SELECT f.reference, f.date, c.nom AS client_nom, p.libellé, p.prix, fp.quantité, (p.prix * fp.quantité) AS total
FROM factures f
JOIN clients c ON f.client_code = c.code
JOIN facture_produits fp ON f.code = fp.facture_code
JOIN produits p ON fp.produit_code = p.code
WHERE c.ville = 'Agadir';

10/Donnez le prix minimal et le prix maximal des produits facturés.
SELECT MIN(prix) AS prix_minimal, MAX(prix) AS prix_maximal
FROM produits;

11/Donnez pour chaque facture, sa référence, sa date, le nom du client et le montant total à payer.
SELECT f.reference, f.date, c.nom, SUM(p.prix * fp.quantité) AS montant_total
FROM factures f
JOIN clients c ON f.client_code = c.code
JOIN facture_produits fp ON f.code = fp.facture_code
JOIN produits p ON fp.produit_code = p.code
GROUP BY f.reference, f.date, c.nom;
