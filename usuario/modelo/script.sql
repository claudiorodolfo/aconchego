create table Usuario (
    id int not null auto_increment,
    nome varchar(64) not null,
    email varchar(64) not null,
    cpf char(11),
    dataNascimento date,
    telefone char(11),
    endereco varchar(255),
    nivelCondutor varchar(16),
    nivelConduzido varchar(16),       
    tipo varchar(16) not null,
    estaAtivo boolean not null,
    senha char(32) not null,
    primary key(id)
);