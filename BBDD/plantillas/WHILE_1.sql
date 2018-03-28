
DECLARE @contador INT 

SET @contador = 0;

-- Bucle While básico
WHILE (@contador < 10)
BEGIN
	PRINT @contador;	
	
	SET @contador = @contador + 1;	
END
