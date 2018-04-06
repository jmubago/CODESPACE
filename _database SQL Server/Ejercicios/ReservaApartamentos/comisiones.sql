
CREATE TABLE comisiones_ID (
	id INT IDENTITY (1,1) NOT NULL
	, reservaID INT NOT NULL
	, comision SMALLMONEY NOT NULL
	, facturaID INT NOT NULL
	, pagadoID BIT NOT NULL
	, CONSTRAINT PK_comisiones_comisionesID PRIMARY KEY CLUSTERED (id)
);