<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Editar Producto</h4>
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
                                    <form action="<?php echo base_url("admin/caja/actualizar") ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $carrito['id_carrito'] ?>">

                                        <div class="form-group">
                                            <label for="exampleInputText1">Helado</label>
                                            <select id="" class="form-control mb-3" name="helado" required>
                                                    <?php   
                                                    foreach ($helados as $helado) :
                                                        if ($helado['id_helado'] == $carrito['id_helado']) { ?>
                                                            <option selected="" value="<?php echo $helado['id_helado'] ?>"><?php echo $helado['nombre_helado'] ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $helado['id_helado'] ?>"><?php echo $helado['nombre_helado'] ?></option>
                                                <?php }
                                                    endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Cliente</label>
                                            <select id="" class="form-control mb-3" name="cliente" required>
                                                    <?php   
                                                    foreach ($usuarios as $usuario) :
                                                        if ($usuario['id_usuario'] == $carrito['id_usuario']) { ?>
                                                            <option selected="" value="<?php echo $usuario['id_usuario'] ?>"><?php echo $usuario['nombre_usuario'] ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $usuario['id_usuario'] ?>"><?php echo $usuario['nombre_usuario'] ?></option>
                                                <?php }
                                                    endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">catidad</label>
                                            <input class="form-control" type="number" name="cantidad" placeholder="ejemplo@gmail.com" value="<?php echo $carrito['cantidad_carrito'] ?>">
                                        </div>
                                       
                                        <button type="submit" value="agregar" class="btn btn-primary">Actualizar</button>
                                        <a type="button" href="<?php echo base_url("admin/caja") ?>" value="" class="btn btn-danger">Cancelar</a>
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