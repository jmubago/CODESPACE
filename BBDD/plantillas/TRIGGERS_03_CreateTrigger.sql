USE TriggerEjemplos;
GO
/*
What: Trigger para auditar operaciones sobre la tabla Nominas
Why: Parte de ejemplo de clase para ver el funcionamiento de los triggers (disparadores)
Who: Pedro Bonilla
Change Log
	Date			Author			Desc
	23-Mar-2018		Pedro B			Creación
*/
CREATE TRIGGER dbo.trg_CambioNomina 
	ON dbo.Nominas
	AFTER INSERT, UPDATE, DELETE
AS
BEGIN
	SET NOCOUNT ON;

	-- Comprobamos si se está haciendo un INSERT
	IF EXISTS(SELECT 1 FROM inserted) AND NOT EXISTS(SELECT 1 FROM deleted)
	BEGIN
		INSERT INTO dbo.NominasLog(FechaOperacion 
								, usuario 								
								, NIFempleadoNuevo 
								, SalarioBaseNuevo 
								, IRPFNuevo 
								, FechaNuevo)
			SELECT GETDATE()
					, USER_NAME()
					, inserted.NIFempleado
					, inserted.SalarioBase
					, inserted.IRPF
					, inserted.Fecha
				FROM inserted;
	END
	ELSE IF EXISTS(SELECT 1 FROM inserted) AND EXISTS(SELECT 1 FROM deleted)
	BEGIN			
		INSERT INTO dbo.NominasLog(FechaOperacion 
								, usuario
								, NIFempleadoAnterior 
								, SalarioBaseAnterior
								, IRPFAnterior 
								, FechaAnterior 								
								, NIFempleadoNuevo 
								, SalarioBaseNuevo 
								, IRPFNuevo 
								, FechaNuevo)
			SELECT GETDATE()
					, USER_NAME()
					, d.NIFempleado
					, d.SalarioBase
					, d.IRPF
					, d.Fecha
					, i.NIFempleado
					, i.SalarioBase
					, i.IRPF
					, i.Fecha
				FROM inserted AS i
					INNER JOIN deleted AS d ON i.id = d.id;		
	END
	ELSE IF NOT EXISTS(SELECT 1 FROM inserted) AND EXISTS(SELECT 1 FROM deleted)
	BEGIN			
		INSERT INTO dbo.NominasLog(FechaOperacion 
								, usuario
								, NIFempleadoAnterior 
								, SalarioBaseAnterior
								, IRPFAnterior 
								, FechaAnterior)
			SELECT GETDATE()
					, USER_NAME()
					, d.NIFempleado
					, d.SalarioBase
					, d.IRPF
					, d.Fecha					
				FROM deleted AS d;		
	END	
END