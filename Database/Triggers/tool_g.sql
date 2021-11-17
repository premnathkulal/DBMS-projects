CREATE TRIGGER `tool_g` AFTER INSERT ON `toolbuy`
 FOR EACH ROW begin

INSERT INTO graf_tool(date)
SELECT Max(date)
FROM toolbuy;

end