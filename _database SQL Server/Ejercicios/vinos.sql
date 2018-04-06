USE VinoMio;
GO
/*
What:	  Script for storing wine information tables
Why:		  For storing wine information
Who:		  jubago
Creation:	  6-Jan-2018
*/


-- Creating the table Vinos
CREATE TABLE Vinos (
    id INT
    , nombre VARCHAR(50) NOT NULL
	, cosecha SMALLINT NOT NULL
	, TipoID TINYINT NOT NULL
	, TipoAzucarID TINYINT NOT NULL
	, TipoColorID TINYINT NOT NULL
	, Espumoso BIT NOT NULL
	, Varietal BIT NOT NULL
	, DenominacionID SMALLINT NOT NULL
);

/*SELECT * 
	FROM [dbo].[Vinos];

SELECT *
	FROM [dbo].[Tipo_Color];*/