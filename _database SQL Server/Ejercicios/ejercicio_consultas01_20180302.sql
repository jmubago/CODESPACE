
--    1. Listar todas las columnas y todas las filas de la tabla Product. Ordernar por nombre.
SELECT *
	FROM [Production].[Product];



--    2. Listar solo las columnas Name, ProductNumber y ListPrice (alias Price) de la tabla Product. Ordenar por nombre.
SELECT [Name]
		,	[ProductNumber]
		,	[ListPrice] AS Price
	FROM [Production].[Product];


--    3. Listar las filas de Product que tienen un Product Line “R” y que tengan menos de 4 días de manufactura.
SELECT [ProductLine]
	FROM [Production].[Product]
		WHERE ([ProductLine] = 'R')
			AND ([DaysToManufacture] < 4);


--    4. Listar las ventas totales (OrderQty x UnitPrice) y los descuentos (OrderQty x UnitPrice x UnitPriceDiscount) de cada producto. Dar un alias a cada columna.
SELECT * 
	FROM [Sales].[SalesOrderDetail];


SELECT DISTINCT [ProductID] AS Product
	,  ([OrderQty]) * ([UnitPrice]) AS TotalSales
	,  [OrderQty] * [UnitPrice] * [UnitPriceDiscount] AS TotalDiscount
	FROM [Sales].[SalesOrderDetail];

--     5. Listar los diferentes títulos de la tabla Employee. Ordernar por nombre del título.
SELECT DISTINCT [JobTitle]
	FROM [HumanResources].[Employee];


--    6. Recuperar productos cuyo modelo comience por “Long-Sleeve Logo Jersey”, y cuyo ProductModelID se encuentre en las tablas Product y ProductModel.
SELECT *
	FROM [Production].[Product];

SELECT * 
	FROM [Production].[ProductModel];


SELECT producto.[Name]
	FROM [Production].[Product] AS producto
	JOIN [Production].[ProductModel] AS  modeloproducto ON producto.[ProductModelID] = modeloproducto.[ProductModelID]
	WHERE modeloproducto.[Name] LIKE 'Long-Sleeve Logo Jersey%';