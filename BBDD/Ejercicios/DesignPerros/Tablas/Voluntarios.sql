CREATE TABLE Voluntarios (
	id INT IDENTITY (1,1) NOT NULL
	, Nombre VARCHAR (70) NOT NULL
	, FechaAlta DATE NOT NULL
	, FechaBaja DATE 
	, CONSTRAINT PK_Voluntarios_VoluntariosID PRIMARY KEY CLUSTERED (id)
);