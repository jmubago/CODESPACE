USE AdventureWorks2017;
GO

/*
@What: Creacion de una función escalar que devuelva un valor cambiado de una palabra recibida
@Why: Ejemplo de función escalar
@Who: Pedro Bonilla
@Log:
	@Date		@Author		@Description
	19-Mar-2018	pbonilla	Creación
*/
CREATE FUNCTION dbo.ufn_Replace
(
	@string1 VARCHAR(8000)
)RETURNS VARCHAR(8000)	-- Las funciones escalares siempre deben tener RETURNS...
AS
BEGIN
	DECLARE @result VARCHAR(MAX);

	SET @result = REPLACE(REPLACE(@string1, 'a', 'z'), 'e', 'y') ;

	RETURN @result;	-- Las funciones escalares siempre deben devolver un resultado con RETURN
END
GO

SELECT dbo.ufn_Replace('Hola que haces?') + ' 1000'
	AS result;