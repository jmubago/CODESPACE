
--    3. Realiza una consulta que indique el número de adopciones cada mes.
SELECT MONTH(p.FechaBaja) AS Mes, COUNT(MONTH(p.FechaBaja)) AS TotalAdopcion
	FROM [dbo].[Adopcion] AS ad
		INNER JOIN [dbo].[Perros] AS p 
			ON p.id = ad.Perro
		GROUP BY MONTH(p.FechaBaja);


--    4. Realiza una consulta para mostrar las adopciones realizadas por los adoptantes.
SELECT ade.Nombre AS NombreAdoptante, p.[Nombre] AS NombrePerro
	FROM [dbo].[Adopcion] AS adi
		INNER JOIN [dbo].[Perros] AS p 
			ON p.id = adi.Perro
		INNER JOIN [dbo].[Adoptante] AS ade
			ON ade.id = adi.Adoptante;


SELECT *
	FROM [dbo].[Adopcion];