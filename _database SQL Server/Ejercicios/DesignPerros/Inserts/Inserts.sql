
-- introducir datos Adoptante
INSERT INTO [dbo].[Adoptante] ([NIF_NIE], [Nombre],[CorreoElectronico])
	VALUES ('47337415c', 'Jose Antonio', 'joseantonio@gmail.com')
			, ('47337415c', 'Angel Martin', 'angelmartin@gmail.com')
			, ('97032315g', 'Pepito Perez', 'pepitoperez@gmail.com')
			, ('38337535a', 'Menganito Martínez', 'menganitomartinez@gmail.com')
			, ('01237415b', 'Fulanito Alvarez', 'fulanitoalvarez@gmail.com');


-- introducir datos Perro
INSERT INTO [dbo].[Perros] ([Nombre], [FechaNacimiento], [Tamano], [RazaProbable], [FechaAlta], [FechaBaja])
	VALUES ('Darth Vader', '2012-03-02', 1, 1, '2015-10-06', NULL)
			, ('Optimus Prime', '2012-03-02', 2, 2, '2017-11-07', NULL)
			, ('Batman', '2016-11-23', 3, 3, '2017-07-15', NULL)
			, ('Mis Tetas', '2017-10-20', 4, 4, '2017-12-05', NULL)
			, ('Peter Bonilla', '2017-07-12', 1, 5, '2017-10-25', NULL)
			, ('Adoptado 01', '2015-07-12', 2, 1, '2015-11-25', '2016-01-25')
			, ('Adoptado 02', '2016-01-12', 2, 1, '2016-04-25', '2016-05-25')
			, ('Adoptado 03', '2016-03-12', 2, 1, '2016-05-25', '2016-06-25')
			, ('Adoptado 04', '2016-04-12', 2, 1, '2016-06-25', '2016-09-25')
			, ('Adoptado 05', '2016-07-12', 2, 1, '2016-10-25', '2017-01-25');




SELECT * 
	FROM [dbo].[Perros];


-- introducir datos Tamano
INSERT INTO [dbo].[Tamano] ([Tamano])
	VALUES ('Mini')
			, ('Pequeno')
			, ('Mediano')
			, ('Grande');


-- introducir datos Raza Probable
INSERT INTO [dbo].[RazaProbable] ([NombreRaza])
	VALUES ('Salchica')
			, ('Raza Postureo')
			, ('Palleiro')
			, ('Perro Patada')
			, ('Achuchable');


-- introducir datos Proveedor
INSERT INTO [dbo].[Proveedor] ([Nombre], [Tlf], [Email])
	VALUES ('Proveedor 01', '666666666', 'proveedor01@gmail.com')
			, ('Proveedor 02', '666666667', 'proveedor02@gmail.com')
			, ('Proveedor 03', '666666661', 'proveedor03@gmail.com')
			, ('Proveedor 04', '666662666', 'proveedor04@gmail.com')
			, ('Proveedor 05', '666666266', 'proveedor05@gmail.com');


-- introducir datos Turno
INSERT INTO [dbo].[TipoTurnos] ([Turno])
	VALUES ('Mañana')
			, ('Mediodía')
			,('Tarde');


-- introducir datos Voluntarios
INSERT INTO [dbo].[Voluntarios] ([Nombre], [FechaAlta], [FechaBaja])
	VALUES ('Voluntario 01', '2013-11-23', NULL)
			, ('Voluntario 02', '2015-10-13', NULL)
			, ('Voluntario 03', '2017-04-05', NULL)
			, ('Voluntario 04', '2018-01-23', NULL)
			, ('Voluntario 05', '2012-06-07', NULL)
			, ('Voluntario 06', '2014-12-23', NULL);


-- introducir datos Adopción
INSERT INTO [dbo].[Adopcion] ([Adoptante], [Perro])
	VALUES (1, 13)
			, (2, 14)
			, (3, 15)
			, (4, 16)
			, (5, 17);


SELECT * 
	FROM [dbo].[Perros];
SELECT * 
	FROM [dbo].[Adoptante];
