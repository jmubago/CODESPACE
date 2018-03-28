USE VinoMio;
GO
/*
What:	  Script for storing wine information tables
Why:		  For storing wine information
Who:		  jubago
Creation:	  6-Jan-2018
*/

-- Creating the table Denominacion
CREATE TABLE PaisID (
    id SMALLINT
    , nombre VARCHAR(100)
	);

ALTER TABLE PaisID
	ADD EU BIT;