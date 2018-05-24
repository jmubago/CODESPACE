/*
 query de update para el apartado de ENTERPRISES dentro del panel de administrador
*/

update dbo.Empresa
	set RazonSocial='AAAAA', EmailContacto='info@aaaaa.com', Telefono='981179216', Direccion='Canton Pequeño 17, Coruña',IBAN='GB29NWBK60161331926819'
	where id=43
