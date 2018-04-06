USE TriggerEjemplos;
GO
/*
What: Procedimiento almacenado para el alta de registros en la tabla Nominas
Why: Parte de ejemplo de clase para ver el funcionamiento de los triggers (disparadores)
Who: Pedro Bonilla
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE PROCEDURE dbo.usp_AltaBajaCambioNomina (
	@idEmpleado INT
	, @NIFempleado CHAR(9) = ''
	, @SalarioBase DECIMAL(10,3) = 0
	, @IRPF DECIMAL(5,3) = 0
	, @Fecha DATE = '20100301'
	, @Operacion CHAR(1)  -- I = Alta, U = Modif, D = Baja
)
AS
BEGIN
	SET NOCOUNT ON;

	IF @Operacion = 'I'
	BEGIN
		INSERT INTO dbo.Nominas (NIFempleado
								, SalarioBase
								, IRPF
								, Fecha)
			VALUES(@NIFempleado
				, @SalarioBase
				, @IRPF
				, @Fecha);
	END
	ELSE IF @Operacion = 'U'
	BEGIN
		UPDATE dbo.Nominas
			SET NIFempleado = @NIFempleado
				, SalarioBase = @SalarioBase
				, IRPF = @IRPF
				, Fecha = @Fecha
			WHERE id = @idEmpleado;
	END
	ELSE IF @Operacion = 'D'
	BEGIN
		DELETE FROM dbo.Nominas			
			WHERE id = @idEmpleado;
	END
END