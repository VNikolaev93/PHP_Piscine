SELECT UPPER(`last_name`) AS `NAME`, `first_name`, `price`
FROM `db_bsharna`.`member`
INNER JOIN `db_bsharna`.`user_card` ON `db_bsharna`.member.id_user_card = `db_bsharna`.user_card.id_user
INNER JOIN `db_bsharna`.`subscription` ON `db_bsharna`.member.id_sub = `db_bsharna`.subscription.id_sub
WHERE `price` > 42
ORDER BY `last_name` ASC, `first_name` ASC;