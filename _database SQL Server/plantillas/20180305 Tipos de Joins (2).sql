	CREATE TABLE Spanish (id INT PRIMARY KEY);
	CREATE TABLE FRENCH (id INT PRIMARY KEY);

	INSERT INTO Spanish
		VALUES (1), (2), (3), (4), (5), (6);

	INSERT INTO FRENCH
		VALUES (4), (6), (7), (8), (9), (10);

	SELECT *
		FROM [dbo].[Spanish];

	SELECT * 
		FROM [dbo].[FRENCH];



--INNER JOIN (= JOIN)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		INNER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id];


--INTERSECT
SELECT [id]
	FROM [dbo].[FRENCH]
INTERSECT
SELECT [id]
	FROM [dbo].[Spanish];


--LEFT OUTER JOIN (= LEFT JOIN)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		LEFT OUTER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id];


--RIGHT OUTER JOIN (= RIGHT JOIN)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		RIGHT OUTER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id]; 


--FULL OUTER JOIN (= FULL JOIN)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		FULL OUTER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id]; 


--LEFT 'excluding' JOIN (Ojo a como se escribe el script, se poner un LEFT OUTER JOIN y se añade una condición NULL)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		LEFT OUTER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id] 
	WHERE e.[id] IS NULL;


--FULL 'exluding' JOIN (= FULL JOIN)
SELECT COUNT (*)
	FROM [dbo].[Spanish] AS p
		FULL OUTER JOIN [dbo].[FRENCH] AS e
			ON p.[id] = e.[id]
	WHERE e.[id] IS NULL
		OR p.[id] IS NULL;