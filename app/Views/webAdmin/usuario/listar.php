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
                                <th scope="col">Contraseña</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) { ?>

                                <tr>
                                    <td><?php echo $usuario['id_usuario'] ?></td>
                                    <?php foreach ($roles as $rol) : ?>
                                        <?php if ($usuario['id_rol'] == $rol['id_rol']) : ?>
                                            <td><?php echo $rol['nombre_rol'] ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <td><?php echo $usuario['correo_usuario'] ?></td>
                                    <td>*******</td>
                                    <td><?php echo $usuario['nombre_usuario'] ?></td>
                                    <td><?php echo $usuario['apellido_usuario'] ?></td>
                                    <td><?php echo $usuario['direccion_usuario'] ?></td>
                                    <td class=" ">
                                        <a href="<?php echo base_url('admin/usuarios/editar/' . $usuario['id_usuario']) ?>" class="btn btn-outline-success mt-2"><i class="fa fa-edit"></i> Editar</a>
                                        <?php if ($usuario['id_rol'] != 1 || $usuario['id_usuario'] != 1) : ?>
                                            <a href="<?php echo base_url('admin/usuarios/borrar/' . $usuario['id_usuario']) ?>" class="btn btn-outline-danger mt-2"><i class="fa fa-trash"></i> Eliminar</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php }; ?>
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
                                    <form action="<?php echo base_url("admin/usuarios/insertar") ?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre de Rol</label> <span id="ver_id_rol" style="display: none"></span>
                                            <select id="id_rol" class="form-control mb-3" name="rol">
                                                
                                                    
                                                        <option selected="" disabled>Seleccionar</option>
                                                        <?php foreach ($roles as $rol) : ?>
                                                            <option value="<?php echo $rol['id_rol'] ?>"><?php echo $rol['nombre_rol'] ?></option>
                                                        <?php endforeach;
                                                    
                                                 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Correo</label>
                                            <input class="form-control" type="email" name="email" placeholder="ejemplo@ejemplo.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Contraseña</label>
                                            <input class="form-control" type="password" name="password1" placeholder="Ingrese su Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Repita la Contraseña</label>
                                            <input class="form-control" type="password" name="password2" placeholder="Repita su Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="exampleInputText1" value="" placeholder="Ingrese su nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Apellidos</label>
                                            <input type="text" name="apellido" class="form-control" id="exampleInputText1" value="" placeholder="Ingrese su apellido">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Direccion</label>
                                            <input type="text" name="direccion" class="form-control" id="exampleInputText1" value="" placeholder="Ingrese su direccion">
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>'

    if (mensaje == 'insertado') {
        Swal.fire(
            'Good job!',
            'agregado con exito!',
            'success'
        )
    } else if (mensaje == 'noinsertado') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Registro no ingresado!'
        })
    } else if (mensaje == 'eliminado') {
        Swal.fire(
            'Deleted!',
            'Se ha eliminado el registro.',
            'success'
        )
    } else if (mensaje == 'actualizado') {
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
<!--jquery-->
<?php echo $pie ?>