<?php echo $cabecera ?>


<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Lista de Usuarios</h4>
            </div>
        </div>


        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nuevo</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contrasenia</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td><?php echo $usuario['id_usuario'] ?></td>
                                    <td><?php echo $usuario['id_rol']?></td>
                                    <td><?php echo $usuario['correo_usuario'] ?></td>
                                    <td><?php echo $usuario['password_usuario'] ?></td>
                                    <td><?php echo $usuario['nombre_usuario'] ?></td>
                                    <td><?php echo $usuario['apellido_usuario'] ?></td>
                                    <td><?php echo $usuario['direccion_usuario'] ?></td>
                                    <td class=" ">
                                        <a href="<?php echo base_url('admin/usuario/editar/' . $usuario['id_usuario']) ?>" class="btn btn-outline-success mt-2"><i class="fa fa-edit"></i> Editar</a>

                                        <a href="<?php echo base_url('admin/usuario/borrar/' . $usuario['id_usuario']) ?>" class="btn btn-outline-danger mt-2"><i class="fa fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!--fin de listar-->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="card" style="border: solid 1px #8f9fbc;">

                                <div class="card-body">
                                    <h4 class="card-title text-center">Agregar nuevo Usuario</h4>
                                    <form action="" method="">
                                        <div class="form-group">
                                            <label>Codigo Rol</label> <span id="ver_id_rol" style="display: none"></span>
                                            <select id="id_rol" class="form-control mb-3" name="rol_id">
                                                <option selected="">Seleccionar</option>
                                                <?php foreach ($roles as $rol) : ?>
                                                    <option value="<?php echo $rol['id_rol'] ?>"><?php echo $rol['nombre_rol'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Correo</label>
                                            <input class="form-control" type="email" name="usuario_correo" placeholder="example@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Contraseña</label>
                                            <input class="form-control" type="password" name="usuario_pass" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" name="usuario_nombre" class="form-control" id="exampleInputText1" value="" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Apellidos</label>
                                            <input type="text" name="usuario_apellido" class="form-control" id="exampleInputText1" value="" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Direccion</label>
                                            <input type="text" name="usuario_direccion" class="form-control" id="exampleInputText1" value="" placeholder="Enter Name">
                                        </div>
                                        <button type="submit" value="agregar" class="btn btn-primary">Agregar</button>
                                        <button type="submit" value="cancelar" class="btn bg-danger">Cancelar</button>
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
</div>

<!--jquery-->
<script>
    $('#id_rol').on('change', function() {
        var id = this.value;
        var texto = $(this).find('option:selected').text();
        alert(id);
        $('#ver_id_rol').text(id);
    });
</script>
<!--jquery-->
<?php echo $pie ?>