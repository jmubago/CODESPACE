CREATE TABLE Adopcion (
	id INT IDENTITY (1,1) NOT NULL
	, Adoptante INT NOT NULL  
	, Perro INT NOT NULL
	, CONSTRAINT PK_Adopcion_AdopcionID PRIMARY KEY CLUSTERED (id)
);



ALTER TABLE  [dbo].[Adopcion]
ADD CONSTRAINT FK_Adopcion_AdoptanteID FOREIGN KEY ([Adoptante])     
    REFERENCES [dbo].[Adoptante] ([id]);


ALTER TABLE  [dbo].[Adopcion]
ADD CONSTRAINT FK_Adopcion_PerroID FOREIGN KEY ([Perro])     
    REFERENCES [dbo].[Perros] ([id]);
