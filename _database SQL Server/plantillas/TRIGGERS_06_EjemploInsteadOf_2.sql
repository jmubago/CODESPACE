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
CREATE TRIGGER dbo.trg_vw_NominasLog 
	ON vw_NominasLog 
	INSTEAD OF INSERT
AS
BEGIN
	RAISERROR('Operacion no permitida', 11, 1);
END