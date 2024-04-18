CREATE DATABASE clinica;
use clinica;
CREATE TABLE pacientes(
    codigo INT(10),
    nombre VARCHAR(30),
    apellido VARCHAR(30),
    hatacion VARCHAR(100)
);
DROP TABLE pacientes;
CREATE TABLE pacientes(
    codigo INT(10),
    nombre VARCHAR(30),
    apellido VARCHAR(30),
    habitacion VARCHAR(100)
);