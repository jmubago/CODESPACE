USE TriggerEjemplos;
GO

SELECT * FROM dbo.Nominas;
SELECT * FROM dbo.NominasLog;
GO

EXECUTE dbo.usp_AltaBajaCambioNomina @NIFempleado = '74500600P'
									, @SalarioBase = 1000
									, @IRPF = 21
									, @Fecha = '2018-03-23'
									, @Operacion = 'I';
GO

SELECT * FROM dbo.Nominas;
SELECT * FROM dbo.NominasLog;
GO

EXECUTE dbo.usp_AltaBajaCambioNomina 1
									, '74500600P'
									, 3000
									, 30
									, '2018-03-23'
									, 'U';

EXECUTE dbo.usp_AltaBajaCambioNomina @idEmpleado = NULL
									, @NIFempleado = '74800900S'
									, @SalarioBase = 2000
									, @IRPF = 27
									, @Fecha = '2018-03-23'
									, @Operacion = 'I';

EXECUTE dbo.usp_AltaBajaCambioNomina @idEmpleado = 2									
									, @Operacion = 'D';