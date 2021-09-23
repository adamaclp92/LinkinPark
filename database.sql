CREATE TABLE `uzenet`.`message` ( `id` INT NOT NULL AUTO_INCREMENT , 
                                `nev` VARCHAR(250) NOT NULL , 
                                `email` VARCHAR(250) NOT NULL , 
                                `uzenet` VARCHAR(250) NOT NULL , 
                                `bekuldes` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
                                PRIMARY KEY (`id`)) ENGINE = InnoDB


