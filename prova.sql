use avaliacao;

create table cliente(
codigo_cliente int not null,
nome_cliente varchar(50) not null,
primary key(codigo_cliente)
);
select * from cliente;

create table vendedor(
codigo_vendedor int not null,
nome_vendedor varchar(50) not null,
primary key(codigo_vendedor)
);
select * from vendedor;

create table produto(
codigo_produto int not null,
descricao varchar(50) not null,
primary key(codigo_produto)
);
select * from produto;

create table pedido(
numero_pedido varchar(50) not null,
data_pedido date not null,
codigo_vendedor int not null,
codigo_cliente int not null,
primary key(numero_pedido),
foreign key(codigo_vendedor) references vendedor(codigo_vendedor),
foreign key(codigo_cliente) references cliente(codigo_cliente)
);
select * from pedido;
INSERT INTO pedido (numero_pedido, data_pedido, codigo_vendedor, codigo_cliente) 
VALUES ('100/05', '01/01/05', '11', '1234');

create table contem(
id_contem int auto_increment,
numero_pedido varchar(50) not null,
codigo_produto int not null,
quantidade int not null,
primary key(id_contem),
foreign key(numero_pedido) references pedido(numero_pedido),
foreign key(codigo_produto) references produto(codigo_produto)
);
select * from contem;
INSERT INTO contem (numero_pedido, codigo_produto, quantidade) 
VALUES ('100/05', '123', '10');
INSERT INTO contem (numero_pedido, codigo_produto, quantidade) 
VALUES ('100/05', '789', '20');