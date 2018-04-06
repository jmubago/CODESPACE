
DECLARE @Nombre VARCHAR;

-- Creo un cursor para recorrer fila a fila el resultado de una consulta
DECLARE vend_cursor CURSOR FOR (
	SELECT [name] FROM Purchasing.Vendor
);

-- Abrir el cursor
OPEN vend_cursor;

-- Leemos el primer valor recogido por el cursor
FETCH NEXT FROM vend_cursor INTO @Nombre;

-- Iteramos hasta que no haya nada mas que leer (hasta la última fila recuperada en
-- el cursor)
WHILE @@FETCH_STATUS = 0  
BEGIN
	PRINT @Nombre;
	
	-- Ir a la siguiente fila del cursor
	FETCH NEXT FROM vend_cursor INTO @Nombre;
END 

-- Limpiar el cursor de la memoria 
CLOSE vend_cursor;  
DEALLOCATE vend_cursor; 



UPDATE Purchasing.Vendor
	SET ActiveFlag = 1
	WHERE ModifiedDate > '20101101';