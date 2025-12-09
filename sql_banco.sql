CREATE TABLE instrumentos(
    
    id int AUTO_INCREMENT not null primary key,
    tipo char(1) not null,
    qtdCorda int not null,
    escala varchar(30) not null,
    modelo varchar(30) not null,
    fabricante varchar(30) not null,
    qtdCasas int,
    qtdCaptadores int,
    tipoCorda varchar(30),
    tipoViolao varchar(30),
    tipoCaptador varchar(30)
);