<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Editar Roles</h4>
            </div>
        </div>
        <!---->

        <div class="card-body">
            
            <div class="tab-content" id="pills-tabContent-2">
                
                <!--fin de listar-->
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <br>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-lg-10 col-md-11">
                            <div class="card" style="border: solid 1px #8f9fbc;">

                                <div class="card-body">
                                    <h4 class="card-title text-center">---</h4>
                                    <form action="<?php echo base_url("admin/roles/actualizar") ?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $rol['id_rol'] ?>">
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" REQUIRED name="nombre" class="form-control" id="exampleInputText1" value="<?php echo $rol['nombre_rol'] ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Descripcion</label>
                                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"><?php echo $rol['nombre_rol'] ?></textarea>
                                        </div>
                                        
                                        <button type="submit" value="agregar" class="btn btn-primary">Actualizar</button>
                                        <a type="button" href="<?php echo base_url("admin/roles") ?>" value="" class="btn btn-danger">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin de nuevo-->

                <!--fin de actualizar-->
            </div>
        </div>
    </div>
    <!---->
</div>
<?php echo $pie ?>