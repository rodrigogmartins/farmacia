CREATE DATABASE "farmacia";

CREATE TABLE "remedio" (
    "id" SERIAL,
    "nome" VARCHAR(140) NOT NULL,
    "fabricante" VARCHAR(140) NOT NULL,
    "controlado" BOOLEAN NOT NULL,
    "quantidade" INT NOT NULL,
    "preco" MONEY NOT NULL,
    CONSTRAINT "usuarioPK" PRIMARY KEY ("id")
);