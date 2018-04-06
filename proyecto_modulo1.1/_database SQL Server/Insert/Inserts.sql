-- introducir datos Actividades
INSERT INTO [dbo].[Actividades] ([Actividad])
	VALUES ('Arquitectura y Urbanismo')
			, ('Alimentación')
			, ('Automóvil')
			, ('Aviación y Aeroespacial')
			, ('Banca')
			, ('Biotecnología')
			, ('Química')
			, ('Desarrollo Software')
			, ('Gaming')
			, ('Apuetas')
			, ('Salud')
			, ('Energía')
			, ('Construcción')
			;

SELECT *
	FROM [dbo].[Actividades];


-- introducir datos Pais
INSERT INTO [dbo].[Pais] ([Pais])
	VALUES ('España')
			, ('Francia')
			, ('Estados Unidos')
			, ('Canadá')
			, ('Reino Unido')
			, ('Alemania')
			, ('Holanda')
			, ('Japón')
			;

SELECT *
	FROM [dbo].[Pais];


-- introducir datos Idioma
INSERT INTO [dbo].[Idioma] ([Idioma])
	VALUES ('Español')
			, ('Francés')
			, ('Inglés')
			, ('Alemán')
			, ('Holandés')
			, ('Japonés')
			;

SELECT *
	FROM [dbo].[Idioma];


-- introducir datos Coach
INSERT INTO [dbo].[Coach] ([Nombre], [Apellido], [EmailContacto], [Clave], [Telefono], [IBAN], [Idioma], [Activo])
	VALUES ('Mark', 'Steven', 'marksteven@coach.com', '1234+', '+4411123456', 'GB29NWBK60161331926819', 3, 1)
			, ('Andres', 'Míguez', 'andresmiguez@coach.com', '1234+', '+34666666123', 'ES6621000418401234567891', 1, 1)
			, ('Ambre', 'Rouze', 'ambrerouze@coach.com', '1234+', '+336615551212', 'FR1420041010050500013M02606', 2, 1)
			, ('Amoll', 'Müller', 'amollmuller@coach.com', '1234+', '+49893438014', 'DE89370400440532013000', 4, 1)
			, ('Adriaans', 'Hasselman', 'adriaanshasselman@coach.com', '1234+', '+31873264852', 'NL91ABNA0417164300', 5, 1)
			, ('Misako', 'Sato', 'misakosato@coach.com', '1234+', '+8112345678953', '357-324-9113889', 6, 1)
			;

SELECT *
	FROM [dbo].[Coach];


-- introducir datos Empresa
INSERT INTO [dbo].[Empresa] ([RazonSocial], [CIF], [Actividad], [Pais], [Direccion], [EmailContacto], [Clave], [Telefono], [PersonaContacto], [Activo], [IBAN])
	VALUES ('Magnetic Club', 'S2732403G', 8, 3, '1600 Pennsylvania Avenue NW', 'info@magneticcluc.com', '1234+','+12025550107', 'Markus Finch', 1,'0260095930175380001')
			, ('Peach Mark', 'A328225F', 9, 7, 'Oudemanhuispoort 4-6, 1012 CN Amsterdam', 'info@peachmark.com', '1234+','+31236564852', 'Elver Rus', 1,'NL32ABNA07659164300')
			, ('APC', 'C918225S', 13, 2, '11 Rue Marbeuf, 75008 Paris', 'info@apc.com', '1234+','+33666123478', 'Pierre Boulard', 1,'FR3278041080050500013M02606')
			, ('Mock Up', 'T759267Q', 3, 1, 'Calle de Velázquez, 6, 28001, Madrid', 'info@mockup.com', '1234+','+34659784367', 'Marcos Franco', 1,'ES9761000320701234563079')
			;
			
SELECT *
	FROM [dbo].[Empresa];


-- introducir datos Usuarios
INSERT INTO [dbo].[Usuarios] ([Nombre], [Apellido], [FechaNacimiento], [EmailContacto], [Clave], [Telefono], [Idioma], [idEmpresa], [Coach], [Activo])
	VALUES ('Michael', 'Smith', '1991-02-17', 'michaelsmith@gmail.com', '1234+', '+13256850107', 3, 1, 1, 1)
			, ('Angus', 'Roedes', '1981-04-20', 'angusroedes@gmail.com', '1234+', '+3165876487', 5, 2, 5, 1)
			, ('Jean', 'Claude', '1985-10-30', 'jeanclaude@gmail.com', '1234+', '+3324896649', 2, 3, 3, 1)
			, ('Ana', 'Sánchez', '1987-02-09', 'anasanchez@gmail.com', '1234+', '+34632457899', 1, 4, 2, 1)
			;	

SELECT *
	FROM [dbo].[Usuarios];


-- introducir datos UsuariosDeEmpresa
INSERT INTO [dbo].[UsuariosDeEmpresa] ([idEmpresa], [idUsuarios])
	VALUES (1, 1)
			, (2, 2)
			, (3, 3)
			, (4, 4)
			;

SELECT *
	FROM [dbo].[UsuariosDeEmpresa];


-- introducir datos UsuariosCoaches
INSERT INTO [dbo].[UsuariosCoaches] ([idUsuario], [idCoach], [FechaInicio], [FechaFin])
	VALUES (1, 1, '2018-01-20', NULL)
			, (2, 5, '2018-02-15', NULL)
			, (3, 3, '2018-2-13', NULL)
			, (4, 2 , '2018-03-05', NULL)
			;


SELECT *
	FROM [dbo].[UsuariosCoaches];


-- introducir datos UsuariosCoaches
INSERT INTO [dbo].[TipoRegistro] ([Registro])
	VALUES ('Empresa')
			, ('Usuario')
			, ('Coach')
			;

SELECT *
	FROM [dbo].[TipoRegistro];
SELECT *
	FROM [dbo].[Empresa];
SELECT *
	FROM [dbo].[Usuarios];
SELECT *
	FROM [dbo].[Coach];


UPDATE [dbo].[Empresa]
SET [TipoRegistro] = 1

UPDATE [dbo].[Usuarios]
SET [TipoRegistro] = 2

UPDATE [dbo].[Coach]
SET [TipoRegistro] = 3

