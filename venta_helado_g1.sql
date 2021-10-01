create database VENTA_HELADO_G1;
use VENTA_HELADO_G1;

create table Rol_Usuario(
id_rol int auto_increment primary key not null,
nombre_rol varchar(10) not null
);
insert into Rol_Usuario(nombre_rol) value("admi");
insert into Rol_Usuario(nombre_rol) value("vendedor");
insert into Rol_Usuario(nombre_rol) value("cliente");

create table Usuario(
id_usuario int auto_increment primary key not null,
id_rol int not null,
correo_usuario varchar(40) not null,
password_usuario varchar(30) not null,
nombre_usuario varchar(40) not null,
apellido_usuario varchar(40),
direccion_usuario varchar(50),
foreign key (id_rol) references Rol_Usuario(id_rol)
);
insert into Usuario(id_rol,correo_usuario,password_usuario,nombre_usuario,apellido_usuario,direccion_usuario) 
value(1,"admin@gmail.com","admin","admin"," ","Los Rosales");

create table Categoria(
id_categoria int auto_increment primary key not null,
nombre_categoria varchar(30),
descripcion_categoria varchar(200)
);
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Crema','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Leche','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Fruta','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Raspadillas','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Cono','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Marcianos','descripcion 1');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Espuma','descripcion 1');

create table Helado(
id_helado int auto_increment primary key not null,
nombre_helado varchar(20) not null,
precio_helado double not null,
stock_helado int not null,
imagen1_helado varchar(200),
imagen2_helado varchar(200),
descripcion varchar(500) not null,
id_categoria int not null,
foreign key (id_categoria) references Categoria(id_categoria)
);
insert into Helado(nombre_helado,precio_helado,stock_helado,imagen1_helado,imagen2_helado,descripcion,id_categoria) value("Helado de ron",5,200," " ,"  "," Rico p",1);

create table Ventas(
id_venta int auto_increment primary key not null,
id_usuario int,
id_helado int,
fecha datetime not null,
cantidad int not null,
precio_total double not null,
foreign key (id_usuario) references Usuario(id_usuario),
foreign key (id_helado) references Helado(id_helado)
);
insert into Ventas values('','1','1','30-09-2021','2','12');
SELECT id_venta,nombre_usuario,nombre_helado,fecha,cantidad,precio_total FROM ventas inner join usuario inner join helado
where ventas.id_usuario=usuario.id_usuario & ventas.id_helado=helado.id_helado;

select * from helado inner join categoria where id_helado=4 && helado.id_categoria=categoria.id_categoria 

create table Empresa(
id_empresa int auto_increment primary key not null,
nombre_empresa varchar(20),
slogan_empresa varchar(100),
telefono1_empresa varchar(15),
telefono2_empresa varchar(15),
email1_empresa varchar(30),
email2_empresa varchar(30),
icono_empresa varchar(50),
logo_empresa varchar(50),
ubicacion_empresa varchar(50),
mapa_empresa varchar(250)
);
