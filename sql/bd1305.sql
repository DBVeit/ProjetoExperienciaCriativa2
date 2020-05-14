drop table if exists favoritos;
drop table if exists pessoa;
drop table if exists filmes;


create table pessoa(
	id_user int auto_increment,
	name varchar(45) not null,
    surname varchar(45) not null,
    email varchar(45) not null unique,
    password varchar(45) not null,
    confirmacao boolean default 0,
    primary key (id_user)
);

create table filmes(
	movie_id int auto_increment,
    titulo varchar(45) not null,
    info varchar(100) not null,
    link varchar(350) not null,
    /*thumbnail longblob,*/
    primary key(movie_id)
);

create table favoritos (
  id_user INT NOT NULL,
  movie_id INT NOT NULL,
  PRIMARY KEY (id_user, movie_id),
  FOREIGN KEY (id_user) REFERENCES pessoa(id_user),
  FOREIGN KEY (movie_id) REFERENCES filmes(movie_id)
); 


update pessoa set confirmacao = 1 where id_user = 1;

insert into filmes(titulo,info,link) values ("Fabuloso Destino de Amelie Poulain","Comédia","<img src='https://i.imgur.com/65QoEcQ.jpg' title='source: imgur.com'/>");


