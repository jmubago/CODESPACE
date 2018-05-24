/*
 query para el apartado de CANDIDATES dentro del panel de administrador
*/

--Candidates WITH Coach
select COUNT(id) AS candidatesWithCoach
	from dbo.Usuarios
where Coach<>22

--Candidates WITHOUT Coach
select COUNT(id) AS candidatesWithOutCoach
	from dbo.Usuarios
where Coach=22
