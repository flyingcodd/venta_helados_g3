<?php echo $cabecera ?>


<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Caja para realizar ventas/carrito</h4>
            </div>
        </div>
        <!---->

        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Listar carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Agregar a carrito</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!---->
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre del helado</th>
                                <th scope="col">Nombre del cliente</th>
                                <th scope="col">cantidad</th>
                                <th scope="col">Precio unitario</th>
                                <th scope="col">Precio total</th>
                                <th scope="col">Descripcion del helado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carritos as $carrito) : ?>
                                <tr>
                                    <td ><?php echo $carrito['id_carrito'] ?></td>
                                    <?php foreach ($helados as $helado) : ?>
                                        <?php if ($helado['id_helado'] == $carrito['id_helado']) : ?>
                                            <td><?php echo $helado['nombre_helado'] ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($usuarios as $usuario) : ?>
                                        <?php if ($usuario['id_usuario'] == $carrito['id_usuario']) : ?>
                                            <td><?php echo $usuario['nombre_usuario'] ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <td><?php echo $carrito['cantidad_carrito'] ?></td>
                                    
                                    <?php foreach ($helados as $helado) : ?>
                                        <?php if ($helado['id_helado'] == $carrito['id_helado']):
                                            $ptotal=$helado['precio_helado'] *$carrito['cantidad_carrito']?>
                                            <td><?php echo $helado['precio_helado'] ?> Soles</td>
                                            <td><?php echo $ptotal; ?> Soles</td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($helados as $helado) : ?>
                                        <?php if ($helado['id_helado'] == $carrito['id_helado']) : ?>
                                            <td><?php echo $helado['descripcion'] ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <td class=" ">
                                        <a href="<?php echo base_url('admin/caja/editar/' . $carrito['id_carrito']) ?>" class="btn btn-outline-success mt-2"><i class="fa fa-edit"></i> Editar</a>

                                        <a href="<?php echo base_url('admin/caja/borrar/' . $carrito['id_carrito']) ?>" class="btn btn-outline-danger mt-2"><i class="fa fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!---->
                    <br><br>   
                    <a type="button" href="<?php echo base_url("admin/caja/vender") ?>" value="vender" class="btn btn-success mt-2">Vender</a>
                    <a type="button" href="<?php echo base_url("admin/caja/vaciar") ?>" value="cancelar" class="btn btn-danger mt-2">Cancelar</a>
                </div>
                <!--fin de listar-->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="card" style="border: solid 1px #8f9fbc;">

                                <div class="card-body">
                                    <h4 class="card-title text-center">Agregar nuevo Helado a carrito</h4>
                                    <form action="<?php echo base_url("admin/caja/insertar") ?>" method="POST" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputText1">Selecione un helado</label>
                                            <select id="" class="form-control mb-3" name="helado" required>
                                                <option selected="" disabled>Seleccionar</option>
                                                <?php foreach ($helados as $helado): ?>
                                                    <option value="<?php echo $helado['id_helado'] ?>"><?php echo $helado['nombre_helado'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Selecione el cliente</label>
                                            <select id="" class="form-control mb-3" name="cliente" required>
                                                <option selected="" disabled>Seleccionar</option>
                                                <?php foreach ($usuarios as $usuario) : ?>
                                                    <option value="<?php echo $usuario['id_usuario'] ?>"><?php echo $usuario['nombre_usuario'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Cantidad</label>
                                            <input type="number" REQUIRED name="cantidad" class="form-control" id="exampleInputDisabled5" value="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Precio S/.</label>
                                            <input type="text" REQUIRED name="precio" class="form-control" id="exampleInputDisabled5" readonly="" value="Mark Tech" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Stock restante</label>
                                            <input type="number" REQUIRED name="stock" class="form-control" id="exampleInputDisabled5" readonly="" value="23">
                                        </div><div class="row">
                                        <div class="form-group col-6">
                                            <label for="exampleInputText1">Imagen 1</label> <br>
                                            
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputText1">Imagen 2</label> <br>
                                            
                                        </div></div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Descripcion</label>
                                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" readonly="">hola</textarea>
                                        </div>
                                        <button type="submit" value="agregar" class="btn btn-primary">Agregar a carrito</button>
                                        <a type="button" href="<?php echo base_url("admin/caja") ?>" value="cancelar" class="btn btn-danger">Cancelar</a>
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