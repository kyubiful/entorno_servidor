CREATE DATABASE empresa;
USE empresa;

CREATE TABLE gastos (
  id int PRIMARY KEY AUTO_INCREMENT,
  gasto int,
  num_semana tinyint
);

CREATE TABLE ventas (
  id int PRIMARY KEY AUTO_INCREMENT,
  venta int,
  num_semana tinyint
);

INSERT INTO gastos (gasto, num_semana) VALUES
('14000','1'),
('8000','2'),
('5000','1'),
('10450','1'),
('5423','2'),
('9758','2');

INSERT INTO ventas (venta, num_semana) VALUES
('2000','1'),
('10000','2'),
('6654','2'),
('15989','2'),
('6544','1'),
('9999','1');
