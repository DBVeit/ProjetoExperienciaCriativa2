CREATE TABLE filmes (
  id int NOT NULL AUTO_INCREMENT,
  titulo VARCHAR (60),
  genero VARCHAR (30),
  diretor VARCHAR (60),
  elenco VARCHAR (150),
  ano INT (4),
  sinopse (200),
  poster VARCHAR (100),
  PRIMARY KEY (id)
);
