/*
 query para el apartado de ENTERPRISES dentro del panel de administrador
*/

select em.id
		,em.RazonSocial
		,em.Direccion
		,em.Telefono
		,em.EmailContacto
		,em.IBAN
		,SUM(us.Horas) AS TotalSessions
		,COUNT(us.idEmpresa) AS NumberCandidates
from dbo.Empresa AS em
	INNER JOIN dbo.Usuarios AS us ON us.idEmpresa=em.id
	GROUP BY em.id
		,em.RazonSocial
		,em.Direccion
		,em.Telefono
		,em.EmailContacto
		,em.IBAN
