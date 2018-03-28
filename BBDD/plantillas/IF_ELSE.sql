
DECLARE @edad TINYINT
		, @mensaje VARCHAR(40)
		, @job VARCHAR(100);

SELECT @edad = 40
	, @job = 'Sales Representative';

-- Con una sola operaci�n dentro del IF, se puede escribir as�..
IF @EDAD <= 35
	PRINT 'joven';
ELSE
	PRINT 'maduro';

-- ..pero es recomendable y buena pr�ctica, usar el BEGIN..END para IF y ELSE
IF @EDAD <= 35
BEGIN
	SET @MENSAJE = 'joven';
END

SET @MENSAJE = 'joven plus';
PRINT @MENSAJE;