USE VinoMio;
GO
/*
What:	  Script for storing wine type tables
Why:		  For storing wine type information
Who:		  jubago
Creation:	  6-Jan-2018
*/

-- Check if table exists, if so then I deleted it in order to create later on
IF EXISTS(SELECT 1 FROM sys.tables WHERE [name] = 'Denominacion')
BEGIN
    DROP TABLE Denominacion;
    PRINT 'La tabla existia, por tanto la hemos borrado';
END
ELSE
BEGIN
    PRINT 'No existe, no hace falta borrar';
END

-- Creating the table Denominacion
CREATE TABLE Tipo_Edad (
    id TINYINT
    , nombre VARCHAR(15)
	);