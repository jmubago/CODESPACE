/*
	What: Ejercicio Consultas Avanzadas. Bloque 3
	Why: Practicar consultas
	Who: joseUbago
	Date:	12/03/2018
*/

-- 1) Mostrar un listado completo de la tabla clientes
-- Tablas consultadas: Sales.Customer
-- Filas resultado: 19820
SELECT * 
	FROM [Sales].[Customer];


-- 2) Mostrar un listado de todos los clientes (Sales.Customer) que son Tiendas (StoreID tiene algún valor)
-- Tablas consultadas: Sales.Customer
-- Filas resultado: 1336
SELECT * 
	FROM [Sales].[Customer]
	WHERE [StoreID] IS NOT NULL;


-- 3) Mostrar un listado de todos los clientes (Sales.Customer) que son Personas (PersonID tiene algún valor)
-- Tablas consultadas: Sales.Customer
-- Filas resultado: 19119
SELECT * 
	FROM [Sales].[Customer]
	WHERE [PersonID] IS NOT NULL;


-- 4) Mostrar un listado de todos los clientes que son Personas y Tiendas
-- Tablas consultadas: Sales.Customer
-- Filas resultado: 635
SELECT [CustomerID]
	FROM [Sales].[Customer]
	WHERE [PersonID] IS NOT NULL AND [StoreID] IS NOT NULL;
			

-- 5) Mostrar todas las tiendas
-- Tablas consultadas: Sales.Store
-- Filas resultado: 701
SELECT [Name]
	FROM [Sales].[Store]
	


-- 6) Mostrar todas las tiendas distintas en la tabla de clientes
-- Tablas consultadas: Sales.Customer
-- Filas resultado: 701
SELECT DISTINCT [StoreID]
	FROM [Sales].[Customer];


-- 7) Mostrar los clientes que son tiendas, sacando..
-- ..el nombre de la tienda (crear alias), el AccountNumber y el TerritoryID. 
-- Ordenar resultados por nombre
-- Tablas consultadas: Sales.Customer, Sales.Store
-- Filas resultado: 1336
SELECT s.[Name] AS Tienda, c.[AccountNumber] AS NumeroCuenta, c.[TerritoryID] AS ZonaTerritorio
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
	ORDER BY Tienda ASC;


-- 8) Igual a la anterior, pero sacando el nombre del territorio (poner alias) en lugar del TerritoryID
-- Tablas consultadas: Sales.Customer, Sales.Store, Sales.SalesTerritory
-- Filas resultado: 1336
SELECT s.[Name] AS Tienda, c.[AccountNumber] AS NumeroCuenta, t.Name AS Territorio
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
		INNER JOIN [Sales].[SalesTerritory] AS t ON t.TerritoryID = c.TerritoryID
	ORDER BY Tienda ASC;

SELECT *
	FROM [Sales].[Customer];
SELECT *
	FROM [Sales].[Store];
SELECT * 
	FROM [Sales].[SalesTerritory];

-- 9) Igual a la anterior, pero sacando el nombre del vendedor también
-- Tablas consultadas: Sales.Customer, Sales.Store, Sales.SalesTerritory, Person.Person
-- Mirando FKs podemos ver: Sales.Store (SalesPersonID) > Sales.SalesPerson (BusinessEntityID) > ..
-- .. > HumanResources.Employee (BusinessEntityID) > Person.Person (BusinessEntityID)...
-- Podemos simplificar y relacionar directamente Sales.Store (SalesPersonID) con Person.Person (BusinessEntityID)
-- Ordernar por Nombre del vendedor y nombre de tienda
-- Filas resultado: 1336
SELECT s.[Name] AS Tienda, c.[AccountNumber] AS NumeroCuenta, st.Name AS Territorio, p.[FirstName] + ' ' + p.[LastName] AS NombreVendedor
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
		INNER JOIN [Sales].[SalesTerritory] AS st ON st.TerritoryID = c.TerritoryID
		INNER JOIN [Person].[Person] AS p ON p.BusinessEntityID = s.SalesPersonID
	ORDER BY NombreVendedor, Tienda ASC;


-- 10) Sacar el nombre del vendedor, nombre del territorio y el numero de tiendas donde trabaja
-- Ordernar por nombre del vendedor y nombre del territorio
-- Tablas consultadas: Sales.Customer, Sales.Store, Sales.SalesTerritory, Person.Person
-- Nota: La tupla StoreID, TerritoryID se repite varias veces en la tabla Sales.Customer, 1 vez por cada AccountNumber..
-- ..Hará falta quitar esos duplicados de la consulta
-- Filas resultado: 20
SELECT DISTINCT p.[FirstName] AS Nombre, p.[LastName] AS Apellido, st.Name AS Territorio , COUNT(st.TerritoryID) AS NumeroTiendas
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
		INNER JOIN [Sales].[SalesTerritory] AS st ON st.TerritoryID = c.TerritoryID
		INNER JOIN [Person].[Person] AS p ON p.BusinessEntityID = s.SalesPersonID
	GROUP BY p.FirstName, p.LastName, st.Name
	ORDER BY NumeroTiendas DESC;

SELECT * 
	FROM [Sales].[Customer]
	ORDER BY [StoreID], [TerritoryID];


-- 11) Sobre la consulta 10
-- Sacar los vendedores con 20 tiendas o mas (>=)
SELECT DISTINCT p.[FirstName] AS Nombre, p.[LastName] AS Apellido, COUNT(st.TerritoryID) AS NumeroTiendas
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
		INNER JOIN [Sales].[SalesTerritory] AS st ON st.TerritoryID = c.TerritoryID
		INNER JOIN [Person].[Person] AS p ON p.BusinessEntityID = s.SalesPersonID
	GROUP BY p.FirstName, p.LastName
	HAVING COUNT (st.TerritoryID) >= 20;

-- 12) Sobre la consulta 10
-- Sacar los 5 vendedores con mas tiendas
SELECT TOP (5) p.[FirstName] AS Nombre, p.[LastName] AS Apellido, COUNT(st.TerritoryID) AS NumeroTiendas
	FROM [Sales].[Customer] AS c
		INNER JOIN [Sales].[Store] AS s ON c.StoreID = s.BusinessEntityID
		INNER JOIN [Sales].[SalesTerritory] AS st ON st.TerritoryID = c.TerritoryID
		INNER JOIN [Person].[Person] AS p ON p.BusinessEntityID = s.SalesPersonID
	GROUP BY p.FirstName, p.LastName
	ORDER BY NumeroTiendas DESC;