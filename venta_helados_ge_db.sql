create table categoria(
id_cat int auto_increment primary key,
nombre_cat varchar(20) not null,
descripcion_cat varchar(20) not null,
id_pro int,
foreign key (id_pro) references producto(id_pro)
);
 create table producto(
 id_pro int auto_increment primary key,
 precio_pro int not null,
 stock_pro int not null,
 descripcion_pro varchar(50) not null
 );
 create table pedido(
 id_ped int auto_increment primary key,
 nombre varchar(20)
 )
 