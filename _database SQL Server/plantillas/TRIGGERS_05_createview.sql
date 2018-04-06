USE TriggerEjemplos;
GO
/*
What: Vista para mostrar el log de la tabla Nominas
Why: Parte de ejemplo de clase para ver el funcionamiento de los triggers (disparadores)
Who: Pedro Bonilla
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE VIEW vw_NominasLog
AS
	SELECT id
			, FechaOperacion
			, usuario
			, NIFempleadoAnterior
			, SalarioBaseAnterior
			, IRPFAnterior
			, FechaAnterior
			, NIFempleadoNuevo
			, SalarioBaseNuevo
			, IRPFNuevo
			, FechaNuevo
		FROM dbo.NominasLog;