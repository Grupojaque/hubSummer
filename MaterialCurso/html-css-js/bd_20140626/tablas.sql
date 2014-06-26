CREATE TABLE Ajustador(
       RFCAj varchar(15),
       nombre varchar(20),
       apellido_paterno varchar(20),
       apellido_materno varchar(20),
       edad int,
       nacimiento date,
       PRIMARY KEY(RFCAj)
);


CREATE TABLE Aseguradora(
       RFCAs varchar(15),
       RFCAj varchar(15),
       nombre varchar(20),
       direccion varchar(255),
       num_exterior int,
       PRIMARY KEY(RFCAs, RFCAj),
       FOREIGN KEY(RFCAj) REFERENCES Ajustador(RFCAj)
);

