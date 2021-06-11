create database phpMysql;
use phpMysql;
CREATE TABLE estudiantes(
  cedula varchar(12)PRIMARY KEY,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  fechaNac date NOT NULL,
  telefono varchar(11)  NOT NULL
) ;

INSERT INTO estudiantes (cedula, nombre, apellido, fechaNac, telefono) VALUES
('55555', 'Eddie', 'Smith', '1991-06-01', '3012225555'),
('88888', 'Adrian', 'Smith', '1978-01-01', '7854'),
('9999', 'Bruce', 'Dickinson', '1980-06-01', '999999'),
('99999', 'Esperanza', 'Gomez', '1984-06-01', '301444444');
