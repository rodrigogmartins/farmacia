CREATE DATABASE farmacia;

CREATE TABLE remedio (
    id SERIAL,
    nome VARCHAR(140) NOT NULL,
    fabricante VARCHAR(140) NOT NULL,
    controlado VARCHAR(5) NOT NULL,
    quantidade INT NOT NULL,
    preco FLOAT NOT NULL,
    CONSTRAINT usuarioPK PRIMARY KEY (id)
);