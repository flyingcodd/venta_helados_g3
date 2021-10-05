<?php echo $cabecera ?>


<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Tabla de roles de usuarios</h4>
            </div>
        </div>
        <!---->

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
                    <!---->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rol as $item) : ?>
                                <tr>
                                    <td><?php echo $item['id_rol'] ?></td>
                                    <td><?php echo $item['nombre_rol'] ?></td>
                                    <td>
                                        <?php if ($item['id_rol'] != 1) : ?>
                                            <a href="<?php echo base_url('admin/roles/editar/' . $item['id_rol']) ?>" class="btn btn-outline-success mt-2"><i class="fa fa-edit"></i> Editar</a>
                                            <a href="<?php echo base_url('admin/roles/borrar/' . $item['id_rol']) ?>" class="btn btn-outline-danger mt-2"><i class="fa fa-trash"></i> Eliminar</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!---->
                </div>
                <!--fin de listar-->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="card" style="border: solid 1px #8f9fbc;">

                                <div class="card-body">
                                    <h4 class="card-title text-center">Agregar nuevo Rol</h4>
                                    <form action="<?php echo base_url("admin/roles/insertar") ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" REQUIRED name="nombre" class="form-control" id="exampleInputText1" value="" placeholder="Ingrese el nombre de la rol">
                                        </div>
                                        <button type="submit" value="agregar" class="btn btn-primary">Agregar</button>
                                        <a type="button" href="<?php echo base_url("admin/roles") ?>" value="cancelar" class="btn btn-danger">Cancelar</a>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>'

    if (mensaje == '1') {
        Swal.fire(
            'Good job!',
            'agregado con exito!',
            'success'
        )
    } else if (mensaje == '0') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Registro no ingresado!'
        })
    } else if (mensaje == 'eliminar') {
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
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
<?php echo $pie ?>