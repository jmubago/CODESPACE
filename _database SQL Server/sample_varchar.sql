
DECLARE @descripcion VARCHAR(20) = 'доброе утро' --COLLATE Cyrillic_General_CI_AS;
DECLARE @descripcionN NVARCHAR(20) = 'очень хорошо' --COLLATE Cyrillic_General_CI_AS;

SELECT @descripcion, @descripcionN;

SET @descripcion = 'Buenos días'
SET @descripcionN = 'Muy bien'

SELECT @descripcion, @descripcionN;