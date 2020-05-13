drop table if exists favoritos;
drop table if exists pessoa;
drop table if exists filmes;


create table pessoa(
	user_id int auto_increment,
	name varchar(45) not null,
    surname varchar(45) not null,
    email varchar(45) not null unique,
    password varchar(45) not null,
    confirmacao boolean default 0,
    primary key (user_id)
);

create table filmes(
	movie_id int auto_increment,
    titulo varchar(45) not null,
    info varchar(100) not null,
    link varchar(350) not null,
    thumbnail longblob not null,
    primary key(movie_id)
);

create table favoritos (
  user_id INT NOT NULL,
  movie_id INT NOT NULL,
  PRIMARY KEY (user_id, movie_id),
  FOREIGN KEY (user_id) REFERENCES pessoa(user_id),
  FOREIGN KEY (movie_id) REFERENCES filmes(movie_id)
); 




/*insert into filmes(titulo,info,link) values ("Fabuloso Destino de Amelie Poulain","Cool","<a href='https://imgur.com/65QoEcQ'><img src='https://i.imgur.com/65QoEcQ.jpg' title='source: imgur.com' /></a>");*/


