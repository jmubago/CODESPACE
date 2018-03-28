-- introducir datos nacionalidad
INSERT INTO [dbo].[nacionalidad_ID] ([pais], [europa])
	VALUES ('España', 1)
			, ('Andorra', 1)
			, ('Alemania', 1)
			, ('Francia', 1)
			, ('Holanda', 1)
			, ('EEUU', 0)
			, ('Australia', 0)
			, ('Brasil', 0);

SELECT *
	FROM [dbo].[nacionalidad_ID];


--introducir datos tipo documento
INSERT INTO [dbo].[tipoDocumento_ID] ([documento])
	VALUES ('DNI')
			, ('NIE')
			, ('Pasaporte');

SELECT *
	FROM [dbo].[tipoDocumento_ID];


--introducir tipos de IVA
INSERT INTO [dbo].[iva_ID] ([tipoIva])
	VALUES (0.04)
			, (0.10)
			, (0.21);

SELECT *
	FROM [dbo].[iva_ID];


--introducir tipo de fuentes
INSERT INTO [dbo].[fuente_ID] ([nombre], [comision])
	VALUES ('AirBNB', 0.20)
			, ('Booking', 0.20)
			, ('Otra web', 0.20)
			, ('Email', 0.25)
			, ('Telefono', 0.30);

SELECT *
	FROM [dbo].[fuente_ID];



