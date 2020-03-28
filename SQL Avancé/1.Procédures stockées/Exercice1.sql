/*  Programmer des procédures stockées




-Exercice 1 : création d'une procédure stockée sans paramètre

la requête n°2 afficher le code des fournisseurs pour lesquels une commande a été passée
SELECT DISTINCT numfou
FROM entcom
*/

/* pour créer et stocké la requete*/
DELIMITER |

CREATE PROCEDURE Lst_fournis(In numfou int(11))

BEGIN
    SELECT numfou
    FROM entcom;
END |

DELIMITER ;

/*pour la montrer*/
SHOW CREATE PROCEDURE Lst_fournis;

/* pour éxecuter la requete stockée*/
CALL Lst_fournis(120);

/*Supprimer une procedure*/
DROP PROCEDURE nom_procedure;






/*-Exercice 2 : création d'une procédure stockée avec un paramètre en entrée


liste les commandes ayant un libellé particulier dans le champ obscom (cette requête sera construite à partir de la requête n°11)

SELECT entcom.numcom AS "N° commande",
entcom.obscom AS "Urgent",
fournis.nomfou AS "Nom fournisseur",
produit.libart AS "libellé article",
(ligcom.priuni*ligcom.qtecde) AS "sous total"
FROM entcom
inner JOIN fournis ON entcom.numfou =fournis.numfou
inner JOIN ligcom ON ligcom.numcom =entcom.numcom
inner JOIN produit ON ligcom.codart=produit.codart
WHERE entcom.obscom = "Commande urgente"
*/


DELIMITER |

CREATE PROCEDURE Lst_Commandes(In numcom int(11))

BEGIN
    SELECT entcom.numcom AS "N° commande",
    entcom.obscom AS "Urgent",
    fournis.nomfou AS "Nom fournisseur",
    produit.libart AS "libellé article",
    (ligcom.priuni*ligcom.qtecde) AS "sous total"
    FROM entcom
    inner JOIN fournis ON entcom.numfou =fournis.numfou
    inner JOIN ligcom ON ligcom.numcom =entcom.numcom
    inner JOIN produit ON ligcom.codart=produit.codart
    WHERE entcom.obscom = "Commande urgente";
END |

DELIMITER ;


SHOW CREATE PROCEDURE Lst_Commandes;


CALL Lst_Commandes(70010);







/*Exercice 3 : création d'une procédure stockée avec plusieurs paramètres

la requête n°19
SELECT fournis.nomfou AS "Code fournisseur",
SUM(ligcom.qtecde*ligcom.priuni)*1.2 AS "chiffre d'affaire"
FROM fournis
JOIN entcom ON entcom.numfou = fournis.numfou
JOIN ligcom ON ligcom.numcom = entcom.numcom
GROUP BY fournis.nomfou       */

DELIMITER |

CREATE PROCEDURE CA_Fournisseur(
    IN numfou int(11),
    IN annee int(10)
    )

BEGIN
    SELECT fournis.nomfou AS "Fournisseur",
        SUM(ligcom.qtecde*ligcom.priuni)*1.2 AS "Chiffre d'affaire"
        FROM fournis
        JOIN entcom ON entcom.numfou = fournis.numfou
        JOIN ligcom ON ligcom.numcom = entcom.numcom
        WHERE fournis.numfou = numfou
        AND year(ligcom.derliv) = annee
        GROUP BY fournis.nomfou;
    END |
DELIMITER ;


CALL CA_Fournisseur(120,2007);



DROP PROCEDURE CA_Fournisseur;