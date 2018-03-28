USE AdventureWorks2017;
GO
/*
@What: Creacion de una función de tipo table que devuelva una lista de vendedores
	, ventas por territorio
@Why: Ejemplo de función de tipo tabla
@Who: Pedro Bonilla
@Log:
	@Date		@Author		@Description
	19-Mar-2018	pbonilla	Creación
*/
CREATE VIEW dbo.uvw_VentasPorVendedorYterritorio
AS
	SELECT TOP(1000000)  p.FirstName + ' ' + p.LastName AS SalesPersonName		
			, t.Name AS Territory
			, COUNT(1) AS Total
		FROM (SELECT DISTINCT StoreID, TerritoryID FROM Sales.Customer ) AS c
			INNER JOIN Sales.Store AS s ON c.StoreID = s.BusinessEntityID
			INNER JOIN Sales.SalesTerritory AS t ON c.TerritoryID = t.TerritoryID
			INNER JOIN Person.Person AS p ON s.SalesPersonID = p.BusinessEntityID
		GROUP BY (p.FirstName + ' ' + p.LastName), t.name
		HAVING COUNT(1) >= 20
		ORDER BY SalesPersonName, Territory;
GO

-- Ejemplo de uso:
SELECT * FROM dbo.uvw_VentasPorVendedorYterritorio;