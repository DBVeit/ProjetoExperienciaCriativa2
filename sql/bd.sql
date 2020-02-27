create table pessoa(
	id int auto_increment,
	name varchar(45) not null unique,
    surname varchar(45) not null,
    email varchar(45) not null,
    password varchar(45) not null,
    primary key (id)
)