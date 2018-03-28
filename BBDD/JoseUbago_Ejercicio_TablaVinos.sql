USE VinoMio
GO

/*
#What:      Create INSERT scripts for VinoMio Database
#Why:		Practice commands with SQL
#Who:		JoseUbago
#Date:		12/02/2018
*/

--Verify current state of Database tables
SELECT * FROM dbo.Denominacion;
SELECT * FROM dbo.PaisID;
SELECT * FROM dbo.Tipo_azucar;
SELECT * FROM dbo.Tipo_Color;
SELECT * FROM dbo.Tipo_Edad;
SELECT * FROM dbo.Vinos;

--Add scritps to PaisID table (new countries)
INSERT INTO dbo.PaisID ([name], [UE])
	VALUES ('Tabarnia', 1)
		, ('Andorra', 1)
		, ('Nueva Zelanda', 0)
		, ('Holanda', 1)
		, ('Canada', 0);

--Verify new data in PaisID table
SELECT * FROM dbo.PaisID;

--Delete Francia (repeated) and Tabarnia (not yet recogniced as a country)
DELETE FROM dbo.PaisID
	WHERE name = 'Francia'
		AND ID = 8;

DELETE FROM dbo.PaisID
	WHERE name = 'Tabarnia';

--Verify data again in PaisID table to check everything is OK
SELECT * FROM dbo.PaisID;

--Start adding INSERT to the Vinos table
SELECT * FROM dbo.Vinos;

INSERT INTO dbo.Vinos ([nombre], [cosecha], [TipoID], [TipoAzucarID], [TipoColorID], [Espumoso], [Varietal], [DenominacionID])
	VALUES ('Vino 05', 1976, 3, 3, 3, 1, 0, 4)
		, ('Vino 06', 2010, 4, 1, 2, 1, 1, 1)
		, ('Vino 06', 1999, 3, 2, 1, 0, 0, 2)
		, ('Vino 08', 1876, 2, 1, 1, 1, 1, 1)
		, ('Vino 09', 2005, 1, 3, 4, 0, 0, 3)
		, ('Vino 10', 2015, 4, 4, 3, 1, 0, 4);

-- Delete new values in Vinos. All id´s are NULL
DELETE FROM dbo.Vinos
	WHERE id IS NULL;

-- Add again new values at Vinos table with correct id´s
INSERT INTO dbo.Vinos ([id], [nombre], [cosecha], [TipoID], [TipoAzucarID], [TipoColorID], [Espumoso], [Varietal], [DenominacionID])
	VALUES (5, 'Vino 05', 1976, 3, 3, 3, 1, 0, 4)
		, (6, 'Vino 06', 2010, 4, 1, 2, 1, 1, 1)
		, (7, 'Vino 06', 1999, 3, 2, 1, 0, 0, 2)
		, (8, 'Vino 08', 1876, 2, 1, 1, 1, 1, 1)
		, (9, 'Vino 09', 2005, 1, 3, 4, 0, 0, 3)
		, (10, 'Vino 10', 2015, 4, 4, 3, 1, 0, 4);

-- Verify Vino table is OK
SELECT * FROM dbo.Vinos;

-- Minor mistakes, UPDATE certain data
UPDATE dbo.Vinos
	SET nombre = 'Vino 07'
	WHERE id = 7;

UPDATE dbo.Vinos
	SET DenominacionID = 3
	WHERE nombre = 'Vino 10'
		OR nombre = 'Vino 05'

-- List verified and completed