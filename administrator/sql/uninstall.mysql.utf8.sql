DROP TABLE IF EXISTS `#__epsg_projection`;
DELETE FROM `#__ucm_history` WHERE `ucm_type_id` IN (SELECT `type_id` FROM `#__content_types` WHERE `type_alias` ='com_epsg.projection');
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_epsg.projection';