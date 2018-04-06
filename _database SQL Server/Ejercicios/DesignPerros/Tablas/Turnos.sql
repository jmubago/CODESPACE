CREATE TABLE Turnos (
	id INT IDENTITY (1,1) NOT NULL
	, Fecha DATE NOT NULL
	, TipoTurno TINYINT NOT NULL
	, Voluntario INT  
	, CONSTRAINT PK_Turnos_TurnosID PRIMARY KEY CLUSTERED (id)
);


ALTER TABLE  [dbo].[Turnos]
ADD CONSTRAINT FK_TipoTurno_TipoTurnoID FOREIGN KEY ([TipoTurno])     
    REFERENCES [dbo].[TipoTurnos] ([id]);

	
ALTER TABLE  [dbo].[Turnos]
ADD CONSTRAINT FK_Voluntario_VoluntariosID FOREIGN KEY ([Voluntario])     
    REFERENCES [dbo].[Voluntarios] ([id]);