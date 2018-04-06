USE TriggerEjemplos;
GO
/*
What: SP para obtener una serie de result SETs (resultados de queries)
Why: para ver que un SP puede devolver resultados de varias consultas
Who: Pedro Bonilla
		
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE PROC dbo.usp_getSELECTs
AS
BEGIN
	-- Result set #1
	SELECT NIFempleado
			, SalarioBase
			, IRPF
			, Fecha 
		FROM dbo.Nominas;		

	-- Result set #2
	SELECT NIFempleadoNuevo
			, SalarioBaseNuevo
			, IRPFNuevo
			, FechaNuevo 
		FROM dbo.NominasLog;
END
GO

-- Ejemplo de llamada
EXEC dbo.usp_getSELECTs;