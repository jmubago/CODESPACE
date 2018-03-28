USE DATABASE [AdventureWorks2017]

-- Joins, sirve para hacer consultas con varias tablas.
SELECT *
	FROM [Person].[Person]

SELECT *
	FROM [HumanResources].[Employee]

SELECT e.[JobTitle]
		, e.[BirthDate]
		, p.[FirstName]
		, P.[LastName]
	FROM [HumanResources].[Employee] AS e
		JOIN [Person].[Person] AS p ON e.[BusinessEntityID] = p.[BusinessEntityID];

-----------------------------------------------------------------------------------------


USE DATABASE [VinoMio]



SELECT * 
	FROM [dbo].[Vinos];

SELECT a.[nombre] AS TipoAzucar
		,b.[nombre] AS TipoColor
		,c.[nombre] AS TipoEdad
		,e.[descripcion] AS Description
	FROM [dbo].[Vinos] AS d
		JOIN [dbo].[Tipo_azucar] AS a ON d.[TipoAzucarID] = a.id
		JOIN [dbo].[Tipo_Color] AS b ON d.[TipoColorID] = b.id
		JOIN [dbo].[Tipo_Edad] AS c ON d.[TipoID] = c.id
		JOIN [dbo].[Denominacion] AS e ON d.[DenominacionID] = e.[id];