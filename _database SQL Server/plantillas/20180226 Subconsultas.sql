
SELECT *
	FROM [Sales].[SalesPerson];

--TOP (n) sirve para sacar n filas en una consulta.
--Normalmente se usa junto con ORDER BY para el resultado DETERMINISTA
--Pero no siempre puede interesar hacerlo así
SELECT TOP (5) [TerritoryID], SUM (SalesQuota) AS TotalQuota
	FROM [Sales].[SalesPerson]
	GROUP BY [TerritoryID]
	ORDER BY TotalQuota DESC;


SELECT CASE WHEN [TerritoryID] IS NULL THEN 1000
			ELSE [TerritoryID]
		END AS Territory
		, ISNULL (SUM(SalesQuota), 0) AS TotalQuota
	FROM [Sales].[SalesPerson]
	GROUP BY TerritoryID;

SELECT SUM(SalesQuota) AS TotalQuota
		, AVG(SalesQuota) AS AvgQuota
	FROM [Sales].[SalesPerson];




--Subconsulta 01. Queremos ver las ventas en los paises europeos.
--Caso de condición estática, NO deberíamos hacer esto... (ya que se pueden añadir nuevos TerritoryID a la base de datos).
SELECT *
	FROM [Sales].[SalesTerritory]

SELECT *
	FROM [Sales].[SalesPerson]
	WHERE TerritoryID IN(7, 8, 10);

--Caso dinamico, lo ideal. (selecciona todos los paises que coinciden con 'Europe', aunque sea de otra tabla).
SELECT *
	FROM [Sales].[SalesPerson]
	WHERE TerritoryID IN(SELECT TerritoryID
							FROM [Sales].[SalesTerritory]
							WHERE [Group] = 'Europe');

SELECT *
	FROM [Sales].[SalesPerson]

SELECT *
	FROM [Sales].[SalesTerritory]


--Subconsulta 02
SELECT *
	FROM [Person].[Person];

SELECT *
	FROM [HumanResources].[Employee] AS e
	WHERE  e.BusinessEntityID IN(SELECT BusinessEntityID
									FROM Person.Person
									WHERE FirstName = 'Michael'
										AND LastName = 'Raheem');

--Subconsulta 03
SELECT e.JobTitle
		, e.Birthdate
		, (SELECT FirstName
			FROM Person.Person AS p
			WHERE p.BusinessEntityID = e.BusinessEntityID) AS FirstName
	FROM [HumanResources].[Employee] AS e;


