DROP DATABASE IF EXISTS weatherMonitor;
CREATE DATABASE weatherMonitor;
USE weatherMonitor;

CREATE TABLE unite(
	id TINYINT UNSIGNED AUTO_INCREMENT,
	libelle VARCHAR(255),
	description TEXT,
	
	CONSTRAINT pk_unite PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


CREATE TABLE sensor(
    id INT UNSIGNED AUTO_INCREMENT,
    unite TINYINT UNSIGNED,
    maxValues SMALLINT,
    minValues SMALLINT,
    accuracy DECIMAL(4, 3),
    libelle VARCHAR(255),
    ip VARCHAR(255),
    description TEXT,

    CONSTRAINT pk_sensor PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


CREATE TABLE record(
	recordDate DATETIME,
	recordValues DECIMAL(5,2),
	sensor INT UNSIGNED,
	
	CONSTRAINT pk_record PRIMARY KEY(recordDate, recordValues, sensor)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
	

ALTER TABLE sensor ADD CONSTRAINT fk_sensorType FOREIGN KEY(unite) REFERENCES unite(id);
ALTER TABLE record ADD CONSTRAINT fk_sensorId FOREIGN KEY(sensor) REFERENCES sensor(id);


INSERT INTO unite (libelle, description) VALUES ('°C', 'degres celcius');
INSERT INTO unite (libelle, description) VALUES ('%', 'pourcetage');
INSERT INTO unite (libelle, description) VALUES ('°K', 'degres kelvin');
INSERT INTO unite (libelle, description) VALUES ('°F', 'degres farhenheit');
INSERT INTO unite (libelle, description) VALUES ('Pa', 'Pascal');
INSERT INTO unite (libelle, description) VALUES ('Km/h', 'vitesse');

INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (1, -20, 80, 0.5, 'DHT22', '192.168.0.100', 'outdoor 1');
INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (2, 0, 100, 0.5, 'DHT22', '192.168.0.101', 'outdoor 1');

INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (1, -20, 80, 0.5, 'DHT22', '192.168.0.102', 'outdoor 2');
INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (2, 0, 100, 0.5, 'DHT22', '192.168.0.103', 'outdoor 2');

INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (1, -20, 80, 0.5, 'DHT22', '192.168.0.104', 'indoor 1');
INSERT INTO sensor(unite, maxValues, minValues, accuracy, libelle, ip, description) VALUES (2, 0, 100, 0.5, 'DHT22', '192.168.0.105', 'indoor 1');




DELIMITER ::

CREATE PROCEDURE generateValue(IN num_rows INT)
BEGIN
    DECLARE i INT DEFAULT 0;

    WHILE i < num_rows DO
        INSERT INTO record VALUES (
        							DATE_ADD(NOW(), INTERVAL ROUND(RAND() * 1000) SECOND),
        							TRUNCATE(RAND() * 200, 2),
        							ROUND(RAND() * 4) + 1
        							);
        SET i = i + 1;
    END WHILE;

END ::




















DELIMITER !!

CREATE PROCEDURE generateSensor(IN num_rows INT)
BEGIN
    DECLARE i INT DEFAULT 0;

    WHILE i < num_rows DO
        INSERT INTO sensor (libelle) VALUES (CONCAT('Sensor', i));
        SET i = i + 1;
    END WHILE;

END !!

