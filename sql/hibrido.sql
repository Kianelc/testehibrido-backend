CREATE DATABASE hibrido;

CREATE TABLE customers (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  cpf varchar(14) NOT NULL,
  email varchar(255) NOT NULL,
  phone int(13),
  PRIMARY KEY (id)
);

INSERT INTO `customers` (`name`, `cpf`, `email`, `phone`) 
VALUES ('Fulano de Tal', '123.456.789-00', 'fulano@gmail.com', '5555555');

INSERT INTO `customers` (`name`, `cpf`, `email`, `phone`) 
VALUES ('Beltrano de Tal', '123.555.789-00', 'beltrano@gmail.com', '777777777');

INSERT INTO `customers` (`name`, `cpf`, `email`, `phone`) 
VALUES ('Ciclano de Tal', '123.456.777-00', 'ciclano@gmail.com', '88888888');