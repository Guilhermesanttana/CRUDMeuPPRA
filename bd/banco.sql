CREATE DATABASE MEUPPRA;

CREATE TABLE Vendedores
(
	id_vendedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_vendedor varchar(255) NOT NULL
);


CREATE TABLE Produtos
(
    id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_produto varchar(255) not null,
    valor_produto numeric(8,2) not null    
);


CREATE TABLE Usuarios 
(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	usuario varchar(255) not null,
    senha varchar(255) not null,
    unique key(usuario)
);


CREATE TABLE Vendas
(
    id_venda INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_vendedor int not null,
    id_produto int not null,
    quantidade int not null 
);


INSERT INTO Usuarios
values (default, 'admin', '123');


INSERT INTO Vendedores
values (default, 'Guilherme Santana'),
	   (default, 'Bruna Nadoroski'),
	   (default, 'Eduardo Silva');


INSERT INTO Produtos
values (default, 'Monitor', '1000.00'),
	   (default, 'Processador', '500.00'),
	   (default, 'Teclado', '50.00'),
       (default, 'Mouse', '30.00'),
       (default, 'MousePad', '10.00'),
       (default, 'HD 500GB', '200.00'),
       (default, 'Fonte 600W', '250.00'),
       (default, 'Placa de Video', '800.00'),
       (default, 'Headset', '200.00'),
       (default, 'Microfone', '20.00');


INSERT INTO Vendas
values (default, 1, 2, 1),
	   (default, 2, 1, 2),
	   (default, 3, 5, 5),
	   (default, 2, 9, 1),
	   (default, 2, 8, 2),
	   (default, 3, 3, 1),
       (default, 1, 2, 1);