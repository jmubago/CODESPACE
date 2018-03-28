/*
What: Creacion de un procedimiento HumanResources.PrintNames
Why: Ejemplo
Who: Pedro
Log: Author		Date			Desc
	Pedro		12-Mar-2018		Creación
*/
CREATE PROCEDURE HumanResources.PrintNames
AS
BEGIN
	SELECT [name] FROM Purchasing.Vendor;
END