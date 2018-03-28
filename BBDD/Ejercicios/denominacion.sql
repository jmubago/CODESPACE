USE VinoMio;
GO
/*
What:	  Script for storing wine denomination information tables
Why:		  For storing wine denomination information
Who:		  jubago
Creation:	  6-Jan-2018
*/

-- Creating the table Denominacion
CREATE TABLE Denominacion (
    id SMALLINT
    , nombre VARCHAR(50) NOT NULL
	, descripcion VARCHAR(1000) NOT NULL
	, fechacreacion DATE NULL
    , protegida BIT NOT NULL
	, paisID SMALLINT NOT NULL
);