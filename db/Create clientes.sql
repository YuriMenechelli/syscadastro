create database syscadastro;

use syscadastro

create table clientes(
id int not null auto_increment primary key,
nome Varchar (255),
email varchar (150), 
cpf varchar(30),
dtnascimento date,
Endereco Varchar(255),
Telefone varchar(30)
) engine InnoDB;