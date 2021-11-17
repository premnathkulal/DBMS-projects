CREATE TRIGGER `graf_p` AFTER INSERT ON `cosform`
 FOR EACH ROW BEGIN

INSERT INTO graf_pro(date)
SELECT max(date)
FROM cosform;

end