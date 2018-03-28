--Seleccionamos la BBDD correspondiente
USE DATABASE [VinoMio]


--Seleccionamos la tabla para saber la información con la que contamos
SELECT * 
	FROM [dbo].[Vinos];

--Consultamos el valor [nombre] de las tablas maestras para cada vino (id) de la tabla. 
SELECT a.[nombre] AS TipoAzucar
		,b.[nombre] AS TipoColor
		,c.[nombre] AS TipoEdad
		,e.[descripcion] AS Description
	FROM [dbo].[Vinos] AS d
		JOIN [dbo].[Tipo_azucar] AS a ON d.[TipoAzucarID] = a.id
		JOIN [dbo].[Tipo_Color] AS b ON d.[TipoColorID] = b.id
		JOIN [dbo].[Tipo_Edad] AS c ON d.[TipoID] = c.id
		JOIN [dbo].[Denominacion] AS e ON d.[DenominacionID] = e.[id];