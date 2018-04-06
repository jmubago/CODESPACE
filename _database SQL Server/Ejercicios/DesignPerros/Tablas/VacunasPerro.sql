CREATE TABLE VacunasPerro (
	id INT IDENTITY (1,1) NOT NULL
	, Perro INT NOT NULL
	, Vacuna01 INT
	, Vacuna02 INT
	, Vacuna03 INT
	, Vacuna04 INT
	, Vacuna05 INT
	, Vacuna06 INT 
	, CONSTRAINT PK_VacunasPerro_VacunasPerroID PRIMARY KEY CLUSTERED (id)
);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Perro_PerrosID FOREIGN KEY ([Perro])     
    REFERENCES [dbo].[Perros] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna01_VacunaID FOREIGN KEY ([Vacuna01])     
    REFERENCES [dbo].[Vacunas] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna02_VacunaID FOREIGN KEY ([Vacuna02])     
    REFERENCES [dbo].[Vacunas] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna03_VacunaID FOREIGN KEY ([Vacuna03])     
    REFERENCES [dbo].[Vacunas] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna04_VacunaID FOREIGN KEY ([Vacuna04])     
    REFERENCES [dbo].[Vacunas] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna05_VacunaID FOREIGN KEY ([Vacuna05])     
    REFERENCES [dbo].[Vacunas] ([id]);

ALTER TABLE  [dbo].[VacunasPerro]
ADD CONSTRAINT FK_Vacuna06_VacunaID FOREIGN KEY ([Vacuna06])     
    REFERENCES [dbo].[Vacunas] ([id]);