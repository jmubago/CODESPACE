USE TriggerEjemplos;
GO
/*
What: SP para obtener una fecha en base a un num de dias que pasamos como 
		parametro de entrada
Why: Ejemplo de usp de parametros de entrada y salida
Who: Pedro Bonilla
		
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE PROC dbo.usp_CalculateCurrentDBTime
(
	@NumDays INT				-- Entrada, por defecto 
	, @time DATETIME2 OUTPUT	-- Asi indicamos que es de salida
)
AS
BEGIN
	SET @time = DATEADD(DAY, @NumDays, GETDATE());
END
GO

-- Ejemplo de llamada
DECLARE @timeVar DATETIME2;

EXEC dbo.usp_CalculateCurrentDBTime 5, @time=@timeVar OUTPUT;

SELECT @timeVar;