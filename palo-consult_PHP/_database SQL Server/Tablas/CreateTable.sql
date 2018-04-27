CREATE TABLE Pais (
	id INT IDENTITY (1,1) NOT NULL
	, Pais VARCHAR (70) NOT NULL
	, CONSTRAINT AK_Pais UNIQUE(Pais)
	, CONSTRAINT PK_Pais_PaisID PRIMARY KEY CLUSTERED (id)
)

	----------------------------------------------------------------------------------------

CREATE TABLE Actividades (
	id INT IDENTITY (1,1) NOT NULL
	, Actividad VARCHAR (70) NOT NULL
	, CONSTRAINT AK_Actividad UNIQUE (Actividad)
	, CONSTRAINT PK_Actividad_ActividadID PRIMARY KEY CLUSTERED (id)	
)

	----------------------------------------------------------------------------------------

CREATE TABLE Idioma (
	id INT IDENTITY (1,1) NOT NULL
	, Idioma VARCHAR (70) NOT NULL
	, CONSTRAINT AK_Idioma UNIQUE (Idioma)
	, CONSTRAINT PK_Idioma_IdiomaID PRIMARY KEY CLUSTERED (id)
)

	----------------------------------------------------------------------------------------

CREATE TABLE Empresa (
	id INT IDENTITY (1,1) NOT NULL
	, RazonSocial VARCHAR (100) NOT NULL
	, CIF VARCHAR (9) NOT NULL
	, Actividad INT NOT NULL
	, Pais INT NOT NULL
	, Direccion VARCHAR (100) NOT NULL
	, EmailContacto VARCHAR (100) NOT NULL
	, Contraseña VARCHAR (20) NOT NULL
	, Telefono VARCHAR (15) NOT NULL
	, PersonaContacto VARCHAR (30) NOT NULL
	, Activo BIT NOT NULL
	, IBAN VARCHAR (34) NOT NULL
	, CONSTRAINT AK_RazonSocial UNIQUE (RazonSocial)
	, CONSTRAINT AK_CIF UNIQUE (CIF)
	, CONSTRAINT PK_Empresa_EmpresaID PRIMARY KEY CLUSTERED (id)
)

ALTER TABLE  [dbo].[Empresa]
ADD CONSTRAINT FK_Actividad_ActividadesID FOREIGN KEY ([Actividad])     
    REFERENCES [dbo].[Actividades] ([id]);

ALTER TABLE  [dbo].[Empresa]
ADD CONSTRAINT FK_Pais_PaisID FOREIGN KEY ([Pais])     
    REFERENCES [dbo].[Pais] ([id]);

ALTER TABLE [dbo].[Empresa] ADD TipoRegistro TINYINT NULL;

ALTER TABLE [dbo].[Empresa]
ADD CONSTRAINT FK_TipoRegistro_Empresa_TipoRegistroID FOREIGN KEY ([TipoRegistro])     
    REFERENCES [dbo].[TipoRegistro] ([id]);  

EXEC sp_rename 'Empresa.Contraseña', 'Clave', 'COLUMN';

	----------------------------------------------------------------------------------------

CREATE TABLE UsuariosDeEmpresa (
	id INT IDENTITY (1,1) NOT NULL
	, Email VARCHAR (100) NOT NULL
	, Clave VARCHAR (12) NOT NULL
	, idEmpresa INT NOT NULL
	, Activo BIT NOT NULL
	, CONSTRAINT PK_UsuariosDeEmpresa_UsuariosDeEmpresaID PRIMARY KEY CLUSTERED (id) 
)

ALTER TABLE  [dbo].[UsuariosDeEmpresa]
ADD CONSTRAINT FK_idEmpresa_EmpresaID FOREIGN KEY ([idEmpresa])     
    REFERENCES [dbo].[Empresa] ([id]);

ALTER TABLE [dbo].[UsuariosDeEmpresa] ADD idUsuarios INT NOT NULL;  

ALTER TABLE  [dbo].[UsuariosDeEmpresa]
ADD CONSTRAINT FK_idUsuarios_UsuariosDeEmpresa_UsuariosID FOREIGN KEY ([idUsuarios])     
    REFERENCES [dbo].[Usuarios] ([id]);

ALTER TABLE [dbo].[UsuariosDeEmpresa] DROP COLUMN [Email];
ALTER TABLE [dbo].[UsuariosDeEmpresa] DROP COLUMN [Clave];
ALTER TABLE [dbo].[UsuariosDeEmpresa] DROP COLUMN [Activo];


	----------------------------------------------------------------------------------------

CREATE TABLE Usuarios (
	id INT IDENTITY (1,1) NOT NULL
	, Nombre VARCHAR (50) NOT NULL
	, Apellido VARCHAR (50) NOT NULL
	, FechaNacimiento DATE NOT NULL
	, EmailContacto VARCHAR (100) NOT NULL
	, Contraseña VARCHAR (20) NOT NULL
	, Telefono VARCHAR (15) NOT NULL
	, Idioma INT NOT NULL
	, idEmpresa INT NOT NULL
	, Coach SMALLINT NOT NULL
	, Activo BIT NOT NULL
	, CONSTRAINT PK_Usuariosa_UsuariosID PRIMARY KEY CLUSTERED (id) 
)

ALTER TABLE  [dbo].[Usuarios]
ADD CONSTRAINT FK_Idioma_IdiomaID FOREIGN KEY ([Idioma])     
    REFERENCES [dbo].[Idioma] ([id]);

ALTER TABLE  [dbo].[Usuarios]
ADD CONSTRAINT FK_idEmpresa_Usuarios_EmpresaID FOREIGN KEY ([idEmpresa])     
    REFERENCES [dbo].[Empresa] ([id]);

ALTER TABLE  [dbo].[Usuarios]
ADD CONSTRAINT FK_Coach_Usuarios_CoachID FOREIGN KEY ([Coach])     
    REFERENCES [dbo].[Coach] ([id]);

ALTER TABLE [dbo].[Usuarios] ADD TipoRegistro TINYINT NULL;

ALTER TABLE [dbo].[Usuarios]
ADD CONSTRAINT FK_TipoRegistro_Usuarios_TipoRegistroID FOREIGN KEY ([TipoRegistro])     
    REFERENCES [dbo].[TipoRegistro] ([id]);  

EXEC sp_rename 'Usuarios.Contraseña', 'Clave', 'COLUMN';

	----------------------------------------------------------------------------------------

CREATE TABLE Coach (
	id SMALLINT IDENTITY (1,1) NOT NULL
	, Nombre VARCHAR (50) NOT NULL
	, Apellido VARCHAR (50) NOT NULL
	, EmailContacto VARCHAR (100) NOT NULL
	, Clave VARCHAR (20) NOT NULL
	, Telefono VARCHAR (15) NOT NULL
	, IBAN VARCHAR (34) NOT NULL
	, Idioma INT NOT NULL
	, Activo BIT NOT NULL
	, CONSTRAINT PK_Coach_CoachID PRIMARY KEY CLUSTERED (id)
)

ALTER TABLE  [dbo].[Coach]
ADD CONSTRAINT FK_Idioma_Coach_IdiomaID FOREIGN KEY ([Idioma])     
    REFERENCES [dbo].[Idioma] ([id]);

ALTER TABLE [dbo].[Coach] ADD TipoRegistro TINYINT NULL;

ALTER TABLE  [dbo].[Coach]
ADD CONSTRAINT FK_TipoRegistro_Coach_TipoRegistroID FOREIGN KEY ([TipoRegistro])     
    REFERENCES [dbo].[TipoRegistro] ([id]);  

	----------------------------------------------------------------------------------------

CREATE TABLE UsuariosCoaches (
	id INT IDENTITY (1,1) NOT NULL
	, idUsuario INT NOT NULL
	, idCoach SMALLINT NOT NULL
	, FechaInicio DATE NOT NULL
	, FechaFin DATE NOT NULL
	, CONSTRAINT PK_UsuariosCoaches_UsuariosCoachesID PRIMARY KEY CLUSTERED (id)
)

ALTER TABLE [dbo].[UsuariosCoaches] ALTER COLUMN FechaFin DATE NULL ;

ALTER TABLE  [dbo].[UsuariosCoaches]
ADD CONSTRAINT FK_idUsuario_UsuariosCoaches_UsuariosID FOREIGN KEY ([idUsuario])     
    REFERENCES [dbo].[Usuarios] ([id]);	

ALTER TABLE  [dbo].[UsuariosCoaches]
ADD CONSTRAINT FK_idCoach_UsuariosCoaches_CoachID FOREIGN KEY ([idCoach])     
    REFERENCES [dbo].[Coach] ([id]);	


	----------------------------------------------------------------------------------------

CREATE TABLE TipoRegistro (
	id TINYINT IDENTITY (1,1) NOT NULL
	, Registro VARCHAR (7) NOT NULL
)

ALTER TABLE [dbo].[TipoRegistro]
ADD CONSTRAINT PK_TipoRegistro_TipoRegistroID PRIMARY KEY CLUSTERED (id);