	--Eliminar FK
ALTER TABLE [dbo].[reservas_ID]   
DROP CONSTRAINT [FK_cliente_clienteID];

	--Eliminar PK
ALTER TABLE  [dbo].[limpieza] 
DROP CONSTRAINT [PK_limpieza_limpiezaID];

	--Modificar tipo valor de una columna
ALTER TABLE [dbo].[citas_ID] ALTER COLUMN [apartamentoID] TINYINT NOT NULL;

	--Crear PK
ALTER TABLE [dbo].[apartamentos_ID]   
ADD CONSTRAINT PK_apartamentos_apartamentosID PRIMARY KEY CLUSTERED ([id]);