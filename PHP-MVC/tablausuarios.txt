CREATE TABLE `Usuarios` (
`Id` INT NOT NULL AUTO_INCREMENT ,
`Usuario` VARCHAR( 50 ) NOT NULL ,
`Password` VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY ( `Id` )
) ENGINE = MYISAM ;
INSERT INTO `Usuarios` (
`Id` ,
`Usuario` ,
`Password`
)
VALUES (
NULL , 'diego@blogdephp.com', 'blogdephp'
);