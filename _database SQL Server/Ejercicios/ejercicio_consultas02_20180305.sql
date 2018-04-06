/*
	What: Ejercicio Consultas Avanzadas. Bloque 2
	Why: Practicar consultas
	Who: joseUbago
	Date:	08/03/2018
*/

-- 1) Mostrar el histórico completo de Empleados y Departamentos. 
-- Pista: La tabla se encuentra en el esquema HumanResources
SELECT * 
	FROM [HumanResources].[EmployeeDepartmentHistory];

SELECT COUNT (*)
	FROM [HumanResources].[EmployeeDepartmentHistory];


-- 2) Sacar del histórico las asignaciones vigentes (EndDate vacío)
SELECT *
	FROM [HumanResources].[EmployeeDepartmentHistory]
	WHERE [EndDate] IS NULL;

SELECT COUNT (*)
	FROM [HumanResources].[EmployeeDepartmentHistory]
	WHERE [EndDate] IS NULL;


-- 3) Sacar todos los registros vigentes de HumanResources.EmployeeDepartmentHistory, 
-- para el departamento 'Engineering'.
SELECT *
	FROM [HumanResources].[EmployeeDepartmentHistory]
	WHERE [EndDate] IS NULL
			AND [DepartmentID] IN(SELECT [DepartmentID]
							FROM [HumanResources].[Department]
							WHERE [Name] = 'Engineering');


SELECT COUNT (*)
	FROM [HumanResources].[EmployeeDepartmentHistory] AS edh
		INNER JOIN [HumanResources].[Department] AS d
			ON edh.[DepartmentID] = d.[DepartmentID]
		WHERE d.[Name] = 'Engineering'	
				AND edh.EndDate IS NULL;


-- 4) Las asignaciones actuales para el departamento 'Engineering'
-- Mostrar solo nombre completo del Empleado y fecha de inicio
SELECT p.[FirstName]
		, p.[LastName]
		, edh.[StartDate]
	FROM [Person].[Person] AS p
		INNER JOIN [HumanResources].[EmployeeDepartmentHistory] AS edh
			ON edh.[BusinessEntityID] = p.[BusinessEntityID]
		WHERE edh.[DepartmentID] = 1
			AND edh.EndDate IS NULL;
			


-- 5) Las asignaciones actuales para el departamento 'Engineering' y 'Marketing'.
-- Mostrar solo nombre completo del Empleado y fecha de inicio
SELECT p.[FirstName] AS Nombre
		, p.[LastName] AS Apellido
		, edh.[StartDate] AS FechaInicio
	FROM [Person].[Person] AS p
		INNER JOIN [HumanResources].[EmployeeDepartmentHistory] AS edh
			ON edh.[BusinessEntityID] = p.[BusinessEntityID]
		WHERE edh.[DepartmentID] IN (1,4)
			AND edh.EndDate IS NULL;


-- 6) Las asignaciones actuales para el departamento 'Engineering' y 'Marketing'.
-- Mostrar nombre completo del Empleado, fecha de inicio y el nombre de su Departamento
-- Ordernar por nombre del Dept y de Empleado
SELECT p.[FirstName] AS Nombre
		, p.[LastName] AS Apellido
		, edh.[StartDate] AS FechaInicio
		, d.[Name] AS NombreDepartamento
	FROM [Person].[Person] AS p
		INNER JOIN [HumanResources].[EmployeeDepartmentHistory] AS edh
			ON edh.[BusinessEntityID] = p.[BusinessEntityID]
		INNER JOIN [HumanResources].[Department] AS d
			ON d.DepartmentID = edh.DepartmentID
		WHERE edh.[DepartmentID] = 1
			OR edh.DepartmentID = 4;


-- 7) Mostrar los nombres de los 3 departamentos con mayor número de empleados
SELECT * 
	FROM [HumanResources].[Department];
SELECT * 
	FROM [HumanResources].[EmployeeDepartmentHistory];

SELECT TOP (3)
d.[Name] AS Departamento, COUNT (edh.[DepartmentID]) AS NumEmpleadosd
	FROM [HumanResources].[Department] AS d
		INNER JOIN [HumanResources].[EmployeeDepartmentHistory] AS edh
			ON edh.[DepartmentID] = d.[DepartmentID]
	GROUP BY d.[Name]
	ORDER BY NumEmpleados DESC;

