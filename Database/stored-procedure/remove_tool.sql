DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `remove_tool`(IN `parmt` VARCHAR(200))
delete from agritools where tool_id = parmt$$
DELIMITER ;