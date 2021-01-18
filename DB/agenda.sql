create database oftalmologiafuente;
use oftalmologiafuente;

create table t_pacientes(
    id_paciente int auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    email varchar(50),
    telefono varchar(50),
    primary key(id_paciente)
                        );