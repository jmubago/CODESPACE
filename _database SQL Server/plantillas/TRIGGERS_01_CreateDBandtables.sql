CREATE DATABASE TriggerEjemplos;
GO

USE TriggerEjemplos;
GO

-- Una tabla cualquiera
CREATE TABLE dbo.Nominas(
	id INT IDENTITY(1, 1) PRIMARY KEY
	, NIFempleado CHAR(9)
	, SalarioBase DECIMAL(10,3)
	, IRPF DECIMAL(5,3)
	, Fecha DATE
);
GO
-- Una tabla para registrar/auditar operaciones DML de la tabla anterior
CREATE TABLE dbo.NominasLog(
	id INT IDENTITY(1, 1) PRIMARY KEY
	, FechaOperacion DATETIME2(2)
	, usuario VARCHAR(20)
	, NIFempleadoAnterior CHAR(9)
	, SalarioBaseAnterior DECIMAL(10,3)
	, IRPFAnterior DECIMAL(5,3)
	, FechaAnterior DATE
	, NIFempleadoNuevo CHAR(9)
	, SalarioBaseNuevo DECIMAL(10,3)
	, IRPFNuevo DECIMAL(5,3)
	, FechaNuevo DATE
);
GO
