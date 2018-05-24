<div class="container">
        <div class="row ">
            <div class="col mt-2 text-center">
                <h4 style="color: black">This is your profile</h4>
                <h5>This is what we know about you</h5>
            </div>
        </div>
     <div class="container my-3">
        <div class="row">
        <?php $usuario_empresas = sqlsrv_fetch_array( $resultado_empresa, SQLSRV_FETCH_ASSOC)?>   
                            <div class="col-sm-12 col-md-6 col-lg-4 my-3 col-centered">
                                <div class="card" style="width: 40rem;" align="left">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Enterprise:</strong> <?php echo $usuario_empresas["RazonSocial"]?></li>
                                        <li class="list-group-item"><strong>Vat Number:</strong> <?php echo $usuario_empresas["CIF"]?></li>
                                        <li class="list-group-item"><strong>Activity:</strong> <?php echo $usuario_empresas["Actividad"]?></li>
                                        <li class="list-group-item"><strong>Country:</strong> <?php echo $usuario_empresas["Pais"]?></li>
                                        <li class="list-group-item"><strong>Address:</strong> <?php echo $usuario_empresas["Direccion"]?></li>
                                        <li class="list-group-item"><strong>Email:</strong> <?php echo $usuario_empresas["EmailContacto"]?></li>
                                        <li class="list-group-item"><strong>Phone Number:</strong> <?php echo $usuario_empresas["Telefono"]?></li>
                                        <li class="list-group-item"><strong>Contact Person:</strong> <?php echo $usuario_empresas["PersonaContacto"]?></li>
                                        <li class="list-group-item"><strong>Bank Account:</strong> <?php echo $usuario_empresas["IBAN"]?></li>
                                    </ul>
                                </div>
                            </div>  
            </div>    
        </div>  
    </div>
