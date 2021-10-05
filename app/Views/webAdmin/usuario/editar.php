<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Editar Usuarios</h4>
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
                                    <form action="<?php echo base_url("admin/usuarios/actualizar") ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $usuario['id_usuario'] ?>">

                                        <div class="form-group">
                                            <label for="exampleInputText1">Rol</label>
                                            <select id="" class="form-control mb-3" name="rol" required>

                                                <?php if ($usuario['id_usuario'] == 1 && $usuario['id_rol'] == 1) { ?>
                                                    <option disable value="<?php echo $usuario['id_rol'] ?>">Admin</option>

                                                    <?php } else {
                                                    foreach ($roles as $rol) :
                                                        if ($usuario['id_rol'] == $rol['id_rol']) { ?>
                                                            <option selected="" value="<?php echo $rol['id_rol'] ?>"><?php echo $rol['nombre_rol'] ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $rol['id_rol'] ?>"><?php echo $rol['nombre_rol'] ?></option>
                                                <?php }
                                                    endforeach;
                                                } ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Correo</label>
                                            <input class="form-control" type="email" name="email" placeholder="ejemplo@gmail.com" value="<?php echo $usuario['correo_usuario'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Contraseña</label>
                                            <input class="form-control" type="password" name="password" value="<?php echo $usuario['password_usuario'] ?>" placeholder="Ingrese su Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="exampleInputText1" value="<?php echo $usuario['nombre_usuario'] ?>" placeholder="Ingrese su nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Apellidos</label>
                                            <input type="text" name="apellido" class="form-control" id="exampleInputText1" value="<?php echo $usuario['apellido_usuario'] ?>" placeholder="Ingrese su apellido">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Direccion</label>
                                            <input type="text" name="direccion" class="form-control" id="exampleInputText1" value="<?php echo $usuario['direccion_usuario'] ?>" placeholder="Ingrese du direccion">
                                        </div>
                                        <button type="submit" value="agregar" class="btn btn-primary">Actualizar</button>
                                        <a type="button" href="<?php echo base_url("admin/usuarios") ?>" value="" class="btn btn-danger">Cancelar</a>
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