--1) Obtener metadata del fichero de bak, lo usaremos para escribir el RESTORE posterior
RESTORE FILELISTONLY
	FROM DISK = 'C:\Temp\AdventureWorks2017.bak';

--2) Aquí hacemos la REstauración de la BBDD realmente
RESTORE DATABASE AdventureWorks2017
	FROM DISK = 'C:\Temp\AdventureWorks2017.bak'
	WITH MOVE 'AdventureWorks2017' TO 'C:\Temp\data\AdventureWorks2017.mdf'
		, MOVE 'AdventureWorks2017_log' TO 'C:\Temp\log\AdventureWorks2017_log.ldf'
		, STATS = 5;