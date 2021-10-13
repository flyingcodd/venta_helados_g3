create database VENTA_HELADO_G1;
use VENTA_HELADO_G1;

create table Rol_Usuario(
id_rol int auto_increment primary key not null,
nombre_rol varchar(50) not null
);
insert into Rol_Usuario(nombre_rol) value("admin");
insert into Rol_Usuario(nombre_rol) value("vendedor");
insert into Rol_Usuario(nombre_rol) value("cliente");

create table Usuario(
id_usuario int auto_increment primary key not null,
id_rol int not null,
estado_usuario int not null,
correo_usuario varchar(40) not null,
password_usuario varchar(30) not null,
nombre_usuario varchar(40) not null,
apellido_usuario varchar(40),
direccion_usuario varchar(50),
foreign key (id_rol) references Rol_Usuario(id_rol)
);
insert into Usuario value(1,1,0,"admin@gmail.com","admin","admin","apellidos","Los Rosales");
insert into Usuario value(2,3,0,"cliente@gmail.com","cliente","cliente general","---","abancay-apu");

create table Categoria(
id_categoria int auto_increment primary key not null,
nombre_categoria varchar(30),
descripcion_categoria varchar(1000)
);
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Crema','Helados de crema. A la hora de comer un helado pensamos en algo cremoso, que nos deleite su sabor y provoque una fiesta en nuestro paladar, pero lo más importante es que nos refresque en épocas de calor.');
insert into Categoria(nombre_categoria,descripcion_categoria) values('Helado de Leche','Un cucurucho o cono para helado es una pasta seca con forma de cono, hecha normalmente de barquillo, postre que se puede encontrar comúnmente en España, Latinoamérica y Asia, consiste en una hoja delgado.');
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
insert into Helado value(1,"Helado de ron",5,200,"imagenhelado1.jpg" ,"imagenhelado2.jpg"," Rico p",3);

 create table Carrito(
id_carrito int auto_increment primary key not null,
id_helado int not null,
id_usuario int not null,
cantidad_carrito int not null,
foreign key (id_helado) references Helado(id_helado),
foreign key (id_usuario) references Usuario(id_usuario)
);
create table Ventas(
id_venta int auto_increment primary key not null,
id_usuario int not null,
id_helado int not null,
fecha datetime not null,
cantidad int not null,
precio_total double not null,
foreign key (id_usuario) references Usuario(id_usuario),
foreign key (id_helado) references Helado(id_helado)
);

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
 insert into Empresa values('1','icecream','Somos una empresa con el compromiso de entregar helados de calidad a nuestra clientela','+51 927613580','+51 983659999','icecream@gmail.com','jaimecarrascotaipe@gmail.com','icono.png','logo.png','Av. Garcilazo con Huancavelica N.123','https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21225.237238139875!2d-72.88520379993705!3d-13.634348280316516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2spe!4v1631292525330!5m2!1ses!2spe' );
 
 