create database FamintosBD;
use FamintosBD;

CREATE TABLE `tbl_comidas` (
    `cd_comida` int primary key auto_increment,
    `nm_comida` varchar(70) not null,
    `vl_preco` decimal (6,2) not null,
    `nm_categoria` varchar(50) not null,
    `img_comida` varchar(300) not null,
    `qt_estoque` int not null,
    `data_cadastro` datetime not null
);

create table Funcionario(
	nome varchar(50) not null,
    senha varchar(15) not null,
    id_usuario double primary key not null auto_increment,
    admissao date not null,
    email varchar(50) not null,
    funcao varchar(15) not null,
    cpf varchar(14) not null,
    data_cadastro datetime not null
);

CREATE TABLE `tbl_venda` (
	  `cd_venda` int(11) primary key auto_increment,
	  `no_Ticket` varchar(13) not null,
      `nome_cliente` varchar(100) not null,
	  `cd_cliente` varchar(15) not null,
	  `cd_comida` int(11) not null,
	  `qt_comida` int(11) not null,
	  `vl_item` decimal(10,2) not null,
	  `vl_total_item` decimal  (10,2) generated always as ((qt_comida * vl_item)) virtual,
	  `dt_venda` date not null,
      `cd_mesa` int not null,
      `statusC` varchar(12) not null,
      `cdg_garcom` varchar(16),
      `rua` varchar(100),
      `bairro` varchar(100),
      `numero` varchar(10),
      `cidade` varchar(80),
      `estado` varchar(80),
      `opcao` varchar(45) not null
);

create table Produtos(
	id_produto double primary key not null auto_increment,
	produto varchar(50) not null,
    categoria varchar(15) not null,
    lote varchar(12) not null,
    vencimento date not null,
    quantidade integer not null,
    valor varchar(15) not null,
    data_cadastro datetime not null
);

CREATE TABLE `tbl_usuario` (
    `cd_usuario` int(11) auto_increment primary key,
    `nm_usuario` varchar(80) not null,
    `ds_email` varchar(80) not null,
    `ds_senha` varchar(16) not null,
    `ds_status` boolean not null
);

create view vw_venda
as select
		tbl_venda.no_ticket,
        tbl_venda.cd_cliente,
        tbl_venda.dt_venda,
        tbl_comidas.nm_comida,
        tbl_venda.qt_comida,
        tbl_venda.vl_total_item
from tbl_venda inner join tbl_comidas
on tbl_venda.cd_comida = tbl_comidas.cd_comida;
        
        
        create table gerir_estoque(
	id_dado double primary key auto_increment not null,
    id_produto double not null,
    foreign key(id_produto) references Produtos(id_produto) on delete cascade,
	produto varchar(50) not null,
    categoria varchar(15) not null,
    lote varchar(12) not null,
    vencimento date not null,
    qtd_estoque integer not null,
    valor varchar(15) not null,
    data_cadastro datetime not null,
    operacao varchar(20) not null,
    entrada double not null,
	saida double not null,
    vl_total double
);