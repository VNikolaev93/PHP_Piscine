SELECT `last_name`, `first_name`, DATE(`birthdate`) AS 'birthdate' FROM `db_bsharna`.`user_card`
WHERE YEAR(`birthdate`) = '1989'
ORDER BY last_name;