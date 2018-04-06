--Registros en Person
SELECT COUNT (*)
	FROM [Person].[Person];

SELECT COUNT (*)
	FROM [HumanResources].[Employee];


------------------------------------------------------------------------------
--Tipos de JOINS (https://www.codeproject.com/Articles/33052/Visual-Representation-of-SQL-Joins)
------------------------------------------------------------------------------
--INNER JOIN (= JOIN)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		INNER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID; 


--INTERSECT (Es lo mismo que JOIN)
SELECT BusinessEntityID
	FROM [Person].[Person]
INTERSECT
SELECT BusinessEntityID
	FROM [HumanResources].[Employee];



--LEFT OUTER JOIN (= LEFT JOIN)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		LEFT OUTER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID; 


--RIGHT OUTER JOIN (= RIGHT JOIN)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		RIGHT OUTER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID; 


--FULL OUTER JOIN (= FULL JOIN)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		FULL OUTER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID; 


--LEFT 'excluding' JOIN (Ojo a como se escribe el script, se poner un LEFT OUTER JOIN y se añade una condición NULL)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		LEFT OUTER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID 
	WHERE e.[BusinessEntityID] IS NULL;



--FULL 'exluding' JOIN (= FULL JOIN)
SELECT COUNT (*)
	FROM [Person].[Person] AS p
		FULL OUTER JOIN [HumanResources].[Employee] AS e
			ON p.BusinessEntityID = e.BusinessEntityID
	WHERE P.[BusinessEntityID] IS NULL
		OR e.[BusinessEntityID] IS NULL;