SELECT titre, resum FROM db_rmaury.film WHERE LOWER(resum) LIKE '%vincent%' ORDER BY id_film ASC;