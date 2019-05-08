SELECT `title`, `summary` FROM `db_bsharna`.`film`
WHERE LOWER(`summary`) LIKE '%Vincent%'
ORDER BY `id_film` ASC;