DROP TABLE IF EXISTS autores;

CREATE TABLE IF NOT EXISTS autores (
    id              INTEGER PRIMARY KEY,
    nome            TEXT    NOT NULL,
    dataNascimento  TEXT,
    email           TEXT    NOT NULL
);

INSERT INTO autores (id, nome, dataNascimento, email) values (1,'teste 1','01-01-2000', 't1@gmail.com');
INSERT INTO autores (id, nome, dataNascimento, email) values (2,'teste 2','01-01-2001', 't2@gmail.com');
INSERT INTO autores (id, nome, dataNascimento, email) values (3,'teste 3','01-01-2003', 't3@gmail.com');


DROP TABLE IF EXISTS livro;

CREATE TABLE IF NOT EXISTS livro (
    id               INTEGER PRIMARY KEY,
    titulo           TEXT    NOT NULL,
    genero           TEXT,
    autor            TEXT,
    anopublicacao    INTEGER
);

DROP TABLE IF EXISTS usuario; 

CREATE TABLE IF NOT EXISTS usuario (
    id               INTEGER PRIMARY KEY,
    nome             TEXT NOT NULL,
    dataNascimento   TEXT,
    email            TEXT NOT NULL
);