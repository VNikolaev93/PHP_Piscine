SELECT COUNT(`id_member`) AS `Movies` FROM member_history
WHERE date BETWEEN '2006/10/30' AND '2007/07/27' OR month(date) = 12 AND day(date) = 24;