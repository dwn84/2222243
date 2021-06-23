drop database if exists phpMysql;-- eliminar base de datos si existe
create database phpMysql;
use phpMysql;
CREATE TABLE estudiantes(
  cedula varchar(12)PRIMARY KEY,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  fechaNac date NOT NULL,
  telefono varchar(11)  NOT NULL,
  password varchar(32)
) ;

INSERT INTO estudiantes (cedula, nombre, apellido, fechaNac, telefono) VALUES
('55555', 'Eddie', 'Smith', '1991-06-01', '3012225555',md5(123456)),
('88888', 'Adrian', 'Smith', '1978-01-01', '7854',md5(asdf)),
('9999', 'Bruce', 'Dickinson', '1980-06-01', '999999',md5(jkñl)),
('99999', 'Esperanza', 'Gomez', '1984-06-01', '301444444',md5(123));
