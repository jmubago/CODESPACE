USE AdventureWorks2017;
GO
/*
What: Vista para demostrar como funcionan las vistas particionadas
Why: ejemplo de clase
Who: Pedro Bonilla
		
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE VIEW vw_MiVistaParticionada
AS
	SELECT BusinessEntityID 
		FROM HumanResources.Employee
	UNION ALL	-- UNION quita duplicados, UNION ALL mantiene todos los resultados de las subconsultas	
	SELECT BusinessEntityID
		FROM Sales.SalesPerson;