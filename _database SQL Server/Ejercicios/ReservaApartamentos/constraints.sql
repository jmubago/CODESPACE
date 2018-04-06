

--crear FK de tabla clientes
ALTER TABLE [dbo].[clientes_ID]
	ADD CONSTRAINT FK_Nacionalidad_NacionalidadID FOREIGN KEY ([nacionalidadID])
		REFERENCES [dbo].[nacionalidad_ID] ([id]);

ALTER TABLE [dbo].[clientes_ID]
	ADD CONSTRAINT FK_tipoDocumento_TipoDocumentoID FOREIGN KEY ([tipo_documentoID])
		REFERENCES [dbo].[tipoDocumento_ID] ([id]);



--crear FK de reservas
ALTER TABLE [dbo].[reservas_ID]
	ADD CONSTRAINT FK_fuente_fuenteID FOREIGN KEY ([fuenteID])
	REFERENCES [dbo].[fuente_ID] ([id]);

ALTER TABLE [dbo].[reservas_ID]
	ADD CONSTRAINT FK_apartamento_apartamentoID FOREIGN KEY ([apartamentoID])
	REFERENCES [dbo].[apartamentos_ID] ([id]);

ALTER TABLE [dbo].[reservas_ID]
	ADD CONSTRAINT FK_cliente_clienteID FOREIGN KEY ([clienteID])
	REFERENCES [dbo].[clientes_ID] ([id]);


--crear FK de facturas
ALTER TABLE [dbo].[facturas_ID]
	ADD CONSTRAINT FK_clientefactura_clienteID FOREIGN KEY ([clienteID])
	REFERENCES [dbo].[clientes_ID] ([id]);

ALTER TABLE [dbo].[facturas_ID]
	ADD CONSTRAINT FK_ivafactura_ivaID FOREIGN KEY ([IVA])
	REFERENCES [dbo].[iva_ID] ([id]);


--crear FK de comisiones
ALTER TABLE [dbo].[comisiones_ID]
	ADD CONSTRAINT FK_reserva_reservaID FOREIGN KEY ([reservaID])
	REFERENCES [dbo].[reservas_ID] ([id]);


--No se por qué razón no me funciona el siguiente script
/*ALTER TABLE [dbo].[comisiones_ID]
	ADD CONSTRAINT FK_comisionesFuente_comisionesFuenteID FOREIGN KEY ([comision])
	REFERENCES [dbo].[fuente_ID] ([comision]);*/

ALTER TABLE [dbo].[comisiones_ID]
	ADD CONSTRAINT FK_factura_facturaID FOREIGN KEY ([facturaID])
	REFERENCES [dbo].[facturas_ID] ([id]);


--crear FK de citas
ALTER TABLE [dbo].[citas_ID]
	ADD CONSTRAINT FK_citaApartamento_citaApartamentoID FOREIGN KEY ([apartamentoID])
	REFERENCES [dbo].[apartamentos_ID] ([id]);

ALTER TABLE [dbo].[citas_ID]
	ADD CONSTRAINT FK_citaCliente_citaClienteID FOREIGN KEY ([clienteID])
	REFERENCES [dbo].[clientes_ID] ([id]);