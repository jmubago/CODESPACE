USE AdventureWorks2017;
GO
/*
@What: Creacion de una vista que omite los campos sensibles de una tabla
@Why: Ejemplo de vista
@Who: Pedro Bonilla
@Log:
	@Date		@Author		@Description
	19-Mar-2018	pbonilla	Creación
*/
alter VIEW dbo.uvw_EmpleadosDatosNoSensibles
AS
	SELECT BusinessEntityID			
			, LoginID
			, OrganizationNode
			, OrganizationLevel
			, JobTitle									
			, HireDate
			, SalariedFlag
			, VacationHours
			, SickLeaveHours
			, CurrentFlag
			, rowguid
			, ModifiedDate
			, DATEDIFF(YEAR, HireDate, GETDATE()) AS Antiguedad
		FROM HumanResources.Employee;
GO

-- Ejemplo de uso:
SELECT JobTitle, AVG(Antiguedad) AS mediaAntiguedad
	FROM dbo.uvw_EmpleadosDatosNoSensibles	
	GROUP BY JobTitle;