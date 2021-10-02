<?php echo $cabecera ?>


<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Configuracciones Generales</h4>
            </div>
        </div>
        <!---->

        <div class="card-body">

            <div class="row">
                <div class="col-2"></div>
                <div class="col-lg-8 col-md-8">
                    <div class="card" style="border: solid 1px #8f9fbc;">

                        <div class="card-body">

                            <h4 class="card-title text-center">---</h4>
                            <form action="<?php echo base_url("admin/configuraciones/actualizar") ?>" method="POST" enctype="multipart/form-data">
                                
                                    <input type="hidden" name="id" value="<?php echo $empresa['id_empresa'] ?>">
                                    <div class="form-group">
                                        <label for="exampleInputText1">Nombre de la empresa</label>
                                        <input type="text" REQUIRED name="nombre" class="form-control" id="exampleInputText1" value="<?php echo $empresa['nombre_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Telefono 1 de la empresa</label>
                                        <input type="text" REQUIRED name="telefono1" class="form-control" id="exampleInputText1" value="<?php echo $empresa['telefono1_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Telefono 2 de la empresa</label>
                                        <input type="text" REQUIRED name="telefono2" class="form-control" id="exampleInputText1" value="<?php echo $empresa['telefono2_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Email 1 de la empresa</label>
                                        <input type="text" REQUIRED name="email1" class="form-control" id="exampleInputText1" value="<?php echo $empresa['email1_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Email 2 de la empresa</label>
                                        <input type="text" REQUIRED name="email2" class="form-control" id="exampleInputText1" value="<?php echo $empresa['email2_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Icono de la empresa</label> <br>
                                        <img height="90px" src="<?php echo base_url('images') . '/' . $empresa['icono_empresa'] ?>" /><br>
                                        <input type="file" id="myFile" name="icono" accept="image/png, .jpeg, .jpg, image/gif">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Logo de la empresa</label> <br>
                                        <img height="90px" src="<?php echo base_url('images') . '/' . $empresa['logo_empresa'] ?>" /><br>
                                        <input type="file" id="myFile" name="logo" accept="image/png, .jpeg, .jpg, image/gif">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Ubicaion fisica de la empresa</label>
                                        <input type="text" REQUIRED name="ubicacion" class="form-control" id="exampleInputText1" value="<?php echo $empresa['ubicacion_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Colque aqui referencia de googlle maps</label>
                                        <input type="text" REQUIRED name="mapa" class="form-control" id="exampleInputText1" value="<?php echo $empresa['mapa_empresa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Slogan</label>
                                        <textarea class="form-control" name="slogan" id="exampleFormControlTextarea1" rows="3"><?php echo $empresa['slogan_empresa']?></textarea>
                                    </div>
                                    <button type="submit" value="agregar" class="btn btn-primary">Actualizar</button>
                                    <a type="button" href="<?php echo base_url("admin") ?>" value="cancelar" class="btn btn-danger">Cancelar</a>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let mensaje = '<?php echo $mensaje; ?>'

    if (mensaje == 'actualizado'){
        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'Actualizado con exito!!'
        })
    } else if (mensaje == 'noactualizado') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Registro no actualizado!'
        })
    }
</script>
<?php echo $pie ?>