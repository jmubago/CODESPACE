USE AdventureWorks2017;

-- Funciones escalares son aquellas que devuelven un unico resultado.

-- Funciones escalares de manejo de cadenas, algunos ejemplos comunes:
SELECT FirstName
		, LEN(FirstName) AS longitudCadena  -- Devuelve la longitud de la cadena
		, RIGHT(FirstName, 2) AS right2 -- Selecciona los N primeros caracteres por la derecha
		, LEFT(FirstName, 2) AS left2	-- Selecciona los N primeros caracteres por la izquierda
		, LTRIM(FirstName) AS Ltrimm  -- Limpia espacios por la izquierda
		, RTRIM(FirstName) AS Ltrimm  -- Limpia espacios por la derecha		
		, UPPER(FirstName) AS UPPERCASE
		, LOWER(FirstName) AS LowerCase
		, (FirstName + ' ' + ISNULL(MiddleName, '') + ' ' + LastName + CAST(BusinessEntityID AS VARCHAR)) AS OldConcat
		, CONCAT(FirstName, ' ', MiddleName, ' ', LastName, ' ', BusinessEntityID)
	FROM Person.Person
	WHERE LEN(FirstName) <> 9;  -- !=

-- Funcion lógica

-- Sin usar IIF
DECLARE @var INT = 10
		, @result VARCHAR(20);

IF @var < 12 
BEGIN
	SET @result = 'Buenos dias';
END
ELSE
BEGIN
	SET @result = 'Buenas tardes';
END

PRINT @result;

-- Usando IIF
DECLARE @var INT = 10
		, @result VARCHAR(20);

SET @result = IIF(@var < 12, 'Buenos dias', 'Buenas tardes');

PRINT @result;


-- Funciones de fecha y agregación
SELECT DATEPART(MONTH, ModifiedDate) AS Mes
		, SUM(OrderQty * UnitPrice) AS TotalVentas
		, ROUND(SUM(OrderQty * UnitPrice), 0) AS TotalVentasRound
		, CAST(SUM(OrderQty * UnitPrice) AS INT) AS TotalVentasAsINT
		, AVG(DATEDIFF(YEAR, ModifiedDate, '2018-03-19')) AS MediaDiferenciaDias -- Calcula la diferencia en una unidad de tiempo entre dos fechas
	FROM Sales.SalesOrderDetail
	GROUP BY DATEPART(MONTH, ModifiedDate)
	ORDER BY TotalVEntas DESC;