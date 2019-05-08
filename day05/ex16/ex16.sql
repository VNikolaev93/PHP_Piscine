SELECT COUNT(`id_member`) AS `movies` FROM `db_bsharna`.`member_history`
WHERE date BETWEEN '2006/10/30' AND '2007/07/27' OR month(date) = 12 AND day(date) = 24;