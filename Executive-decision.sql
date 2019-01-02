
CREATE TABLE `games` (
  `GAME_ID` bigint(20) AUTO_INCREMENT,
  `TURN_PHASE_ID` smallint(6) NOT NULL,
  `PURCHASING_VARIATION` boolean not null default 0,
  `SELLING_VARIATION` boolean not null default 0,
  PRIMARY KEY (`GAME_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_demand_schedules` (
  `UNITS` int(11) unsigned NOT NULL DEFAULT '0',
  `MOVEMENT` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UNITS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_materials` (
  `MATERIAL_CODE` char(10) NOT NULL,
  `ORDER_NBR` smallint(6) NOT NULL,
  PRIMARY KEY (`MATERIAL_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_players` (
  `GAME_ID` bigint(20) NOT NULL,
  `PLAYER_ID` bigint(20) NOT NULL,
  PRIMARY KEY (`GAME_ID`,`PLAYER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_player_bids` (
  `GAME_ID` bigint(20) NOT NULL,
  `PLAYER_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  PRIMARY KEY (`GAME_ID`,`PLAYER_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_player_offers` (
  `GAME_ID` bigint(20) NOT NULL,
  `PLAYER_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  PRIMARY KEY (`GAME_ID`,`PLAYER_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_player_purchases` (
  `GAME_ID` bigint(20) NOT NULL,
  `PLAYER_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  PRIMARY KEY (`GAME_ID`,`PLAYER_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_player_sales` (
  `GAME_ID` bigint(20) NOT NULL,
  `PLAYER_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  PRIMARY KEY (`GAME_ID`,`PLAYER_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_products` (
  `PRODUCT_CODE` char(1) NOT NULL,
  PRIMARY KEY (`PRODUCT_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_products_materials` (
  `PRODUCT_CODE` char(1) NOT NULL,
  `MATERIAL_CODE` char(10) NOT NULL,
  `ITEM_QUANTITY` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`PRODUCT_CODE`,`MATERIAL_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_size_limits` (
  `GAME_SIZE` smallint(6) AUTO_INCREMENT,
  `STARTING_AMOUNT` int(11) unsigned NOT NULL DEFAULT '0',
  `ORDER_LIMITS` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`GAME_SIZE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_supply_schedules` (
  `UNITS` int(11) unsigned NOT NULL DEFAULT '0',
  `MOVEMENT` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UNITS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_turn_material_prices` (
  `GAME_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  `XFINE_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  `FINE_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  `STD_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`GAME_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `game_turn_product_prices` (
  `GAME_ID` bigint(20) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  `A_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  `B_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  `C_PRICE` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`GAME_ID`,`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `phases` (
  `PHASE_ID` smallint(6) NOT NULL,
  `PHASE_CODE` varchar(15) NOT NULL,
  PRIMARY KEY (`PHASE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `players` (
  `PLAYER_ID` bigint(20) NOT NULL,
  `CALL_SIGN` varchar(30) NOT NULL,
  PRIMARY KEY (`PLAYER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `turns` (
  `TURN_ID` tinyint NOT NULL,
  `TURN_CODE` char(3) NOT NULL,
  PRIMARY KEY (`TURN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `turns_phases` (
  `TURN_PHASE_ID` smallint(6) NOT NULL,
  `TURN_ID` tinyint NOT NULL,
  `PHASE_ID` smallint(6) NOT NULL,
  PRIMARY KEY (`TURN_PHASE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/******************** CONSTRAINTS ********************/

ALTER TABLE GAME_PLAYERS ADD CONSTRAINT FK_GAME_PLAYERS
  FOREIGN KEY (GAME_ID) REFERENCES GAMES (GAME_ID) ON DELETE CASCADE;
ALTER TABLE GAME_PRODUCTS_MATERIALS ADD CONSTRAINT FK_GAME_PRODUCTS_MATERIALS_1
  FOREIGN KEY (MATERIAL_CODE) REFERENCES GAME_MATERIALS (MATERIAL_CODE) ON DELETE CASCADE;
ALTER TABLE GAME_PRODUCTS_MATERIALS ADD CONSTRAINT FK_GAME_PRODUCTS_MATERIALS_2
  FOREIGN KEY (PRODUCT_CODE) REFERENCES GAME_PRODUCTS (PRODUCT_CODE) ON DELETE CASCADE;
CREATE UNIQUE INDEX IDX_PLAYERS1 ON PLAYERS (PLAYER_ID);
CREATE INDEX IDX_GAME_MATERIALS1 ON GAME_MATERIALS (ORDER_NBR, MATERIAL_CODE);

/******************** DEFAULT DATA ********************/
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('1', 'JAN');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('2', 'FEB');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('3', 'MAR');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('4', 'APR');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('5', 'MAY');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('6', 'JUN');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('7', 'JUL');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('8', 'AUG');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('9', 'SEP');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('10', 'OCT');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('11', 'NOV');
INSERT INTO `turns` (`TURN_ID`, `TURN_CODE`) VALUES ('12', 'DEC');

INSERT INTO `game_materials` (`MATERIAL_CODE`, `ORDER_NBR`) VALUES ('X-FINE', 1);
INSERT INTO `game_materials` (`MATERIAL_CODE`, `ORDER_NBR`) VALUES ('FINE', 2);
INSERT INTO `game_materials` (`MATERIAL_CODE`, `ORDER_NBR`) VALUES ('STD.', 3);

INSERT INTO `game_products` (`PRODUCT_CODE`) VALUES ('A');
INSERT INTO `game_products` (`PRODUCT_CODE`) VALUES ('B');
INSERT INTO `game_products` (`PRODUCT_CODE`) VALUES ('C');

INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (0, -10);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (1, -9);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (2, -8);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (3, -7);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (4, -6);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (5, -5);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (6, -4);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (7, -3);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (8, -2);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (9, -1);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (10, 0);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (11, 1);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (12, 2);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (13, 3);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (14, 4);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (15, 5);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (16, 6);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (17, 7);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (18, 8);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (19, 9);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (20, 10);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (21, 11);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (22, 12);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (23, 13);
INSERT INTO `game_demand_schedules` (`UNITS`, `MOVEMENT`) VALUES (24, 14);

INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (0, 11);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (1, 9);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (2, 7);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (3, 5);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (4, 3);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (5, 1);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (6, -1);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (7, -3);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (8, -5);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (9, -7);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (10, -9);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (11, -11);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (12, -13);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (13, -15);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (14, -17);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (15, -19);
INSERT INTO `game_supply_schedules` (`UNITS`, `MOVEMENT`) VALUES (16, -21);

INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('A', 'X-FINE', 2);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('B', 'X-FINE', 1);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('C', 'X-FINE', 0);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('A', 'FINE', 1);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('B', 'FINE', 1);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('C', 'FINE', 1);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('A', 'STD.', 0);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('B', 'STD.', 1);
INSERT INTO `game_products_materials` (`PRODUCT_CODE`, `MATERIAL_CODE`, `ITEM_QUANTITY`) VALUES ('C', 'STD.', 2);
