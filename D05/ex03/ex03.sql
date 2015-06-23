INSERT INTO `db_rmaury`.`ft_table`(`login`, `groupe`, `date_de_creation`)
SELECT
	`nom`,'other',`date_naissance`
FROM `db_rmaury`.`fiche_personne`
	WHERE `nom` LIKE '%a%' AND LENGTH('nom') < 9
	ORDER BY `nom` ASC
	LIMIT 10;