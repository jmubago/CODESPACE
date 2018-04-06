CREATE TABLE Vacunas (
	id INT IDENTITY (1,1) NOT NULL
	, Nombre VARCHAR (70) NOT NULL
	, Stock SMALLINT 
	, Proveedor VARCHAR (50) NOT NULL
	, CONSTRAINT PK_Vacunas_VacunasID PRIMARY KEY CLUSTERED (id)
);


ALTER TABLE  [dbo].[Vacunas]
ADD CONSTRAINT FK_Proveedor_ProveedorID FOREIGN KEY ([Proveedor])     
    REFERENCES [dbo].[Proveedor] ([id]);