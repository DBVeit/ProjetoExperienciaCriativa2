drop table if exists favoritos;
drop table if exists pessoa;
drop table if exists filmes;


create table pessoa(
	id_user int auto_increment,
    tipo int default 0,
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
    link varchar(250) not null,
    thumb varchar(250) not null,
    year_release varchar(45) not null,
    genre varchar(50) not null,
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
update pessoa set tipo = 1 where id_user = 1; 

INSERT INTO filmes (titulo, info, link,thumb, year_release, genre) VALUES ('Avatar','Filme','<iframe width="560" height="315" src="https://www.youtube.com/embed/5PSNL1qE6VY" frameborder="0" allowfullscreen></iframe>','<img src="http://i3.ytimg.com/vi/5PSNL1qE6VY/hqdefault.jpg">','2009','Ficção'),('Interstellar','Filme','<iframe width="560" height="315" src="https://www.youtube.com/embed/zSWdZVtXT7E" frameborder="0" allowfullscreen></iframe>','<img src="http://i3.ytimg.com/vi/zSWdZVtXT7E/hqdefault.jpg">','2014','Suspense,Ficção')





