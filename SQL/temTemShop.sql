create database temTemShop;
use temTemShop;
create table usuario 
(
	id int auto_increment not null primary key,
	nome nvarchar(100) not null,
	login nvarchar(20) unique not null,
	senha nvarchar(32) not null,
	situacao enum ('Ativo','Inativo')
)engine=InnoDB;

create table categorias
(
   cod_categoria int auto_increment not null primary key,
   nome nvarchar(100) not null unique
)engine=InnoDB; 

create table produtos
(
   cod_produto int auto_increment not null primary key,
   cod_categoria int not null,
   nome nvarchar(100) not null unique,
   valor float(6,2),
   destaque char(1),
   foto_principal nvarchar(500),
   descricao text,
   disponivel char(1),
   promocao char(1)
)engine=InnoDB;