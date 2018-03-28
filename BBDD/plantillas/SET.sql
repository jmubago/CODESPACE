
DECLARE @name VARCHAR(20);

-- Asignar un valor. Opci�n 1: SET
SET @name = 'Linda';

-- Asignar un valor. Opci�n 2: SELECT
SELECT @name = 'Linda';

SELECT TOP(1) @name = FirstName
	FROM Person.Person
	ORDER BY ModifiedDate DESC;

-- Asignar un valor. Opci�n 3: SET + subconsulta
SET @name = (SELECT TOP(1) FirstName
				FROM Person.Person
				ORDER BY ModifiedDate ASC);

PRINT @name;