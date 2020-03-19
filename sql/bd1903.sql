
drop table if exists pessoa;

create table pessoa(
	id int auto_increment,
	name varchar(45) not null,
    surname varchar(45) not null,
    email varchar(45) not null unique,
    password varchar(45) not null,
    confirmacao boolean default 0,
    primary key (id)
)