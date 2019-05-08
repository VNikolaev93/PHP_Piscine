SELECT `title` AS `Title`, `summary` AS `Summary`, `prod_year`
FROM `db_bsharna`.`film`
INNER JOIN `db_bsharna`.`genre` ON `db_bsharna`.genre.id_genre = `db_bsharna`.film.id_genre
WHERE genre.name = 'erotic'
ORDER BY `prod_year` DESC;