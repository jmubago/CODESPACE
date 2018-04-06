USE AdventureWorks2017;
GO

/*
@What: Creacion de una función de tipo table que devuelva una lista de personas por edad
		Equivale a una vista parametrizada
@Why: Ejemplo de función de tipo tabla
@Who: Pedro Bonilla
@Log:
	@Date		@Author		@Description
	19-Mar-2018	pbonilla	Creación
*/
CREATE FUNCTION dbo.ufn_ListaTop10PersonasPorEdad
(
	@filtroFecha DATETIME2
)RETURNS TABLE
AS
	RETURN (SELECT TOP(10) p.BusinessEntityID
					, CONCAT(p.FirstName, ' ', p.LastName) AS NombreCompleto
				FROM Person.Person AS p
					INNER JOIN HumanResources.Employee AS e 
						ON p.BusinessEntityID = e.BusinessEntityID
				WHERE e.BirthDate > @filtroFecha
				ORDER BY BirthDate DESC);
GO

SELECT *
	FROM dbo.ufn_ListaTop10PersonasPorEdad('1981-11-26');