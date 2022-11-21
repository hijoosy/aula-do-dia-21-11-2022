create database artigo;

use artigo;

create table artigos (
    idartigo int primary key auto_increment,
    titulo varchar(50),
    autor varchar(50),
    artigo text,
    foto varchar(30) not null
    );

desc artigos;



#text até 65 caracteres.


