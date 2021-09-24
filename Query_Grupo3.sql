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

create table Helado(
id_helado int auto_increment primary key not null,
nombre_helado varchar(20) not null,
precio_helado double not null,
stock_helado int not null,
imagen1_helado varchar(200),
imagen2_helado varchar(200),
descripcion varchar(500) not null
);
insert into Helado(nombre_helado,precio_helado,stock_helado,imagen1_helado,imagen2_helado,descripcion) value("Helado de ron",5,200,"  " ,"  "," Rico p");

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










