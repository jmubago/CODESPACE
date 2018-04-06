-- Consulta para buscar tablas que contengan una columna específica
SELECT schema_name(t.schema_id) AS [Schema]
		, t.name AS tableName
		, c.name AS columnName
	FROM sys.columns AS c
		INNER JOIN sys.tables AS t ON c.object_id = t.object_id
	WHERE c.name LIKE '%dep%ID%';