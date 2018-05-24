/*
 query para el apartado de COACH dentro del panel de administrador
*/

select co.id
		,co.Nombre
		,co.Apellido
		,co.EmailContacto
		,co.Telefono
		,co.IBAN
		,SUM(us.Horas) AS TotalSessions
		,COUNT(us.Coach) AS NumberCandidates
from dbo.Coach AS co
	INNER JOIN dbo.Usuarios AS us ON us.Coach=co.id
	where co.id<>22
	GROUP BY co.id
				,co.Nombre
				,co.Apellido
				,co.EmailContacto
				,co.Telefono
				,co.IBAN

