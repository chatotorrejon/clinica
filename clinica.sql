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
DROP TABLE pacientes;
CREATE TABLE pacientes(
    codigo INT(10),
    nombre VARCHAR(30),
    habitacion VARCHAR(100)
);
use clinica;
CREATE TABLE facturacion(
    clinica VARCHAR(20),
    direccion_clinica VARCHAR(100),
    fecha_inicio INT(10),
    fecha_final INT(10),
    nombre_cliente VARCHAR(20),
    direccion_cliente VARCHAR(100),
    precio_consulta INT(10)
);
use clinica;
use clinica;
use clinica;
CREATE TABLE historial(
    nombrepaciente VARCHAR(30),
    fechadelaultimaactualizacion DATE,
    nombreactualdelmedico VARCHAR(30),
    telefono1 INT(9),
    nombreactualdelafarmacia VARCHAR(40),
    telefono2 INT(9),
    nombredelmedicamento VARCHAR(40),
    dosificacion DOUBLE(3),
    frequencia INT(3),
    medico1 VARCHAR(40),
    fechainicio1 DATE,
    fechafinal1 DATE,
    proposito VARCHAR(200),
    procedimiento varchar(100),
    medico2 VARCHAR(30),
    hospital VARCHAR(40),
    fecha1 DATE,
    notas1 VARCHAR(200),
    enfermedad VARCHAR(100),
    fechainicio2 DATE,
    fechafinal2 DATE,
    medico3 VARCHAR(30),
    notasdeltratamiento VARCHAR(300),
    fechatetanos DATE,
    fechainfluenza DATE,
    fechazoxtavax DATE,
    fechaotro1 DATE,
    fechameningitis DATE,
    fechafiebreamarilla DATE,
    fechapoliomielitis DATE,
    fechaotro2 DATE
);


