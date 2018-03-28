CREATE TABLE Perros (
	id INT IDENTITY (1,1) NOT NULL
	, Nombre VARCHAR (50) NOT NULL
	, FechaNacimiento DATE NOT NULL
	, Tamano TINYINT NOT NULL
	, RazaProbable	SMALLINT
	, FechaAlta DATE NOT NULL
	, FechaBaja DATE
	, CONSTRAINT PK_Perros_PerrosID PRIMARY KEY CLUSTERED (id)
);


ALTER TABLE  [dbo].[Perros]
ADD CONSTRAINT FK_Tamano_TamanoID FOREIGN KEY ([Tamano])     
    REFERENCES [dbo].[Tamano] ([id]);

ALTER TABLE  [dbo].[Perros]
ADD CONSTRAINT FK_RazaProbable_RazaProbableID FOREIGN KEY ([RazaProbable])     
    REFERENCES [dbo].[RazaProbable] ([id]);