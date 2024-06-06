create database bdcadastro;
use bdcadastro;
create table tbcliente(
	codigo int primary key 
    auto_increment,
    nome varchar(90),
    telefone varchar(40),
    email varchar(90)
);