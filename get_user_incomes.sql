DELIMITER $$
CREATE PROCEDURE `get_user_incomes` (
IN in_user_email VARCHAR(45),
OUT out_user_name VARCHAR(85))
BEGIN
SELECT u.name
INTO out_user_name
FROM user u
WHERE BINARY u.email = BINARY in_user_email;
SELECT * FROM(SELECT s.day AS napon,
       SUM((s.impression / 1000) * s.amount) AS kereset
FROM statistic s
WHERE s.banner_id IN (SELECT b.id
                      FROM banner b
                      INNER JOIN user u ON b.user_id = u.id
                      WHERE BINARY u.email = BINARY in_user_email)
GROUP BY s.day WITH ROLLUP)
derived_t1 ORDER BY napon;
END
$$
-- A fő lekérdezés azért beágyazott, mert a rollup és az order by
-- nem megengedett együtt
