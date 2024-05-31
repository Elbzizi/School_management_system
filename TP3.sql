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
