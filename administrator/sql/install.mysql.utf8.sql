CREATE TABLE IF NOT EXISTS `#__epsg_projection` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`title` VARCHAR(255)  NOT NULL ,
`alias` VARCHAR(255)  NOT NULL ,
`epsg_code` INT(11)  NOT NULL ,
`value` TEXT NOT NULL ,
`area_of_use` TEXT NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

INSERT INTO `#__content_types` (`type_title`, `type_alias`, `table`, `rules`, `field_mappings`, `router`, `content_history_options`) 
SELECT 'EPSG Projection', 'com_epsg.projection', '{"special":{"dbtable":"#__epsg_projection","key":"id","type":"Projection","prefix":"EpsgTable","config":"array()"},"common":{"dbtable":"#__ucm_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}', '', '{"common": {"core_content_item_id":"id","core_title":"title","core_state":"state","core_alias":"alias","core_created_time":"created","core_modified_time":"modified","core_body":"introtext", "core_hits":"hits","core_publish_up":"publish_up","core_publish_down":"publish_down","core_access":"access", "core_params":"attribs", "core_featured":"featured", "core_metadata":"metadata", "core_language":"language", "core_images":"images", "core_urls":"urls", "core_version":"version", "core_ordering":"ordering", "core_metakey":"metakey", "core_metadesc":"metadesc", "core_catid":"catid", "core_xreference":"xreference", "asset_id":"asset_id"},"special":{"epsg_code":"epsg_code","value":"value","area_of_use":"area_of_use"}}', 'EpsgHelperRoute::getProjectionRoute', '{"formFile":"administrator/components/com_epsg/models/forms/projection.xml", "hideFields":["asset_id","ordering","checked_out","checked_out_time","version"],"ignoreChanges":["ordering","modified_by","modified","checked_out","checked_out_time","version","hits"],"convertToInt":[],"displayLookup":[]}'
FROM DUAL
WHERE NOT EXISTS (SELECT `type_alias` FROM `#__content_types` WHERE `type_alias`='com_epsg.projection');