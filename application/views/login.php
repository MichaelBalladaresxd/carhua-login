

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Include a required theme -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="padding-left:0;">
        <div class="row">
            <div class="col-md-8" >
                <img src="http://localhost/grupo-carhua/assets/img/fondo.png" style="min-height:100%" class="img-fluid" alt="">
            </div>

            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="mx-auto">
                        <img src="http://localhost/grupo-carhua/assets/img/logo.png" class="img-fluid">
                    </div>
                    
                </div>
                  
                <form action="<?php echo base_url("clogin/crearUsuario");?>" method="post" id="frmRegistro" class="">
                        
                        <div class="row ">
                            <h2 class="mx-auto">Registrarse</h2>
                        </div>  
                        <div class="row">
                            
                            <div class="form-group col-md-12">
                                <h5>Nacionalidad</h5>
                                <select id="cmbNacionalidad" name="cmbNacionalidad" class="custom-select" required>
                                    <option selected>::Seleccionar</option>
                                    <option value="Peruana">Peruana</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Venezolana">Venezolana</option>
                                    <option value="Colombiana">Colombiana</option>
                                </select>
                                
                            </div>
                            <div class="form-group col-md-12">
                                <h5>Tipo de Documento</h5>
                                <select id="cmbTipoDoc" name="cmbTipoDoc" class="custom-select" required>
                                    <option selected>::Seleccionar</option>
                                    <option value="DNI">DNI</option>
                                    <option value="RUC">RUC</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <h5>N° de Documento</h5>
                                <input required type="text" class="form-control" id="numDocumento" name="numDocumento" placeholder="ingresar N° Documento">
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Nombres</h5>
                                <input required type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="ingresar Nombres">
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Apellido Paterno</h5>
                                <input required type="text" class="form-control" id="txtApePaterno" name="txtApePaterno">
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Apellido Materno</h5>
                                <input required type="text" class="form-control" id="txtApeMaterno" name="txtApeMaterno">
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Contraseña</h5>
                                <input required type="password" class="form-control" id="txtPassword" name="txtPassword">
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Confirmar Contraseña</h5>
                                <input required type="password" class="form-control" id="txtPasswordConfirmar" name="txtPasswordConfirmar">
                            </div>
                            
                            <div class="form-group col-md-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkTerminos" required>
                                    <label class="form-check-label" for="gridCheck">
                                    Acepto Terminos y Condiciones
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block btn-danger">Registrarse</button>
                            <button type="button" class="btn btn-lg btn-block btn-primary" id="btnIniciarLogin">Ingresar</button>

                        
                        </div>
                </form>

                        <!-- INICIAR SESION -->

                <form action="<?php echo base_url("clogin/ingresar");?>" method="post" id="frmIngresar" class="d-none">

                        <div class="row ">
                            <h2 class="mx-auto">Iniciar Sesion</h2>
                        </div>  
                        <div class="row">
                            
                        
                            <div class="form-group col-md-12">
                                <h5>N° de Documento</h5>
                                <input type="text" class="form-control" id="txtnumDocumentoIniciar" name="txtnumDocumentoIniciar" placeholder="ingresar N° Documento">
                            </div>

                        

                            <div class="form-group col-md-12">
                                <h5>Contraseña</h5>
                                <input type="password" class="form-control" id="txtPasswordIniciar" name="txtPasswordIniciar">
                            </div>

                            <button type="submit" class="btn btn-lg btn-block btn-primary" id="btnIngresar">Ingresar</button>

                                <p class="text-danger">OLVIDE MI CONTRASEÑA</p>
                        
                            <button type="button" class="btn btn-lg btn-block btn-secondary" id="btnRegistrarUsuario">Registrarme</button>

                        </div>
                </form>

            </div>
        </div>
    </div>

   



    <!-- jQuery -->
    <script src="http://localhost/grupo-carhua/assets/js/jquery.js"></script>


    <!-- LOGIN -->
    <script src="http://localhost/grupo-carhua/assets/js/login.js"></script>

    <!-- Script Generales -->
<script type="text/javascript">
    var baseurl = "<?php echo base_url();?>"; 
</script>
</body>
</html>