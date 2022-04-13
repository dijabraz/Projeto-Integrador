mysql -u root

#criar base
create database avaliacao;

#chamar a base
use avaliacao

#criar tabela
create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);
create table produto(
    idproduto int auto_increment primary key,
    nome varchar(20),
    marca varchar(20),
    nota varchar(20),
    comentario varchar(40)
);

#inserir dado na tabela
insert into usuario values(null, 'Administrador','dija',md5('123'),'adm');
 insert into usuario values(null, 'Usuario','usuario',md5('123'),'user');
/* */
    insert into produto values(null, 'Heineken','American Premium Lager','10','Holanda');
    insert into produto values(null, 'Eisenbahn','Reinheitsgebot','10',' Blumenau, Brasil.');
    insert into produto values(null, 'Stella Artois','Anheuser-Busch InBev','7','Belgica');
    insert into produto values(null, 'Corona Extra','Grupo Modelo','10','México');
    insert into produto values(null, 'Budweiser','American Lager','3','EUA');
    insert into produto values(null, 'Becks','German Lager','10','Alemanha');

#mostrar tabela
select * from usuario;
/* */
select * from usuario;