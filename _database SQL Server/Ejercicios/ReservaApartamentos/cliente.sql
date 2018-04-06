
CREATE TABLE clientes_ID (
	id INT IDENTITY (1,1) NOT NULL
	, nombre VARCHAR (50) NOT NULL
	, apellido_1 VARCHAR (50) NOT NULL
	, apellido_2 VARCHAR (50) NOT NULL
	, nacionalidadID INT NOT NULL
	, tipo_documentoID TINYINT NOT NULL
	, numero_documento VARCHAR (15) NOT NULL
	CONSTRAINT PK_clientes_clientesID PRIMARY KEY CLUSTERED (id)
);