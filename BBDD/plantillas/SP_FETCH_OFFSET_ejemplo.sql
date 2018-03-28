USE AdventureWorks2017;
GO

-- Compara los resultados siguientes
SELECT FirstName + ' ' + ISNULL(MiddleName, '') + ' ' + LastName 
	FROM Person.Person
	ORDER BY 1;
GO

-- Con el SP usando ventanas deslizantes, vamos a la pagina exacta que queremos
EXECUTE  Person.usp_NavigateByPersons @PageNumber = 1, @PageSize = 5;
GO