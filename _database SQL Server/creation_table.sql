/*
What:Script de ejemplo de creacion de tablas
Why: Para ver cómo crear tablas
Who: jubago
Creation Date: 5-Feb-2018
*/

--  Compruebo si la tabla existe, si existe la borro para crearla mas tarde
IF EXISTS(SELECT 1 FROM sys.tables WHERE [name] = 'MiPrimeraTabla')
BEGIN
	DROP TABLE MiPrimeraTabla
	PRINT 'La tabla existia, por tanto la hemos borrado';
END
ELSE
BEGIN
	PRINT 'No existe, no hace falta borrar';     
END

-- Creacion de la tabla
CREATE TABLE MiPrimeraTabla (
	id INT
	, [name] VARCHAR (30)
	, createDate DATETIME2(2)
	, valor DECIMAL(19, 4) -- 123,456,789,123,456.7890
);