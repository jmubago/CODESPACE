

DECLARE @sql VARCHAR (1000);
DECLARE @nombre VARCHAR (100);
DECLARE @commandSQL NVARCHAR(MAX);


SET @sql = 'SELECT * FROM [Person].[Person] WHERE [FirstName] = ';
SET @nombre = '''Ken''';

SET @commandSQL = @sql + @nombre;

EXECUTE sp_executesql @commandSQL;