
DECLARE @edad TINYINT
		, @mensaje VARCHAR(40)
		, @job VARCHAR(100);

SELECT @edad = 40
	, @job = 'Sales Representative';

-- En cualquier lugar donde haya un literal o constante, se puede usar una 
-- subconsulta
IF (SELECT MIN(DATEDIFF(YEAR, BirthDate, GETDATE())) 
				FROM HumanResources.Employee 
				WHERE JobTitle = @job) <= @edad
BEGIN
	SET @mensaje = 'Joven';	
END
ELSE
BEGIN
	SET @mensaje = 'Joven Plus';
END

PRINT @mensaje;


SELECT DATEDIFF(YEAR, BirthDate, GETDATE()), *
	FROM HumanResources.Employee 
	WHERE JobTitle = @job;

SELECT DISTINCT JobTitle
	FROM HumanResources.Employee;
	