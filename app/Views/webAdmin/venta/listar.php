<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Lista de Ventas</h4>
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
                                <th scope="col">Usuario</th>
                                <th scope="col">Helado</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($venta as $ventas) : ?>
                                <tr>
                                    <td><?php echo $ventas['id_venta'] ?></td>
                                    <td><?php echo $ventas['id_usuario'] ?></td>
                                    <td><?php echo $ventas['id_helado'] ?></td>
                                    <td><?php echo $ventas['fecha'] ?></td>
                                    <td><?php echo $ventas['cantidad'] ?></td>
                                    <td><?php echo $ventas['precio_total'] ?></td>
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
                                    <h4 class="card-title text-center">Agregar nueva Venta</h4>
                                    <form action="" method="">
                                        <div class="form-group">
                                            <label>Codigo Usuario: </label> <span id="ver_id_usuario" style="display: none"></span>
                                            <select id="Combo_cod_user" class="form-control mb-3">
                                                <option selected="0">Seleccionar</option>
                                                <?php foreach ($usuarios as $usuario) : ?>
                                                    <option value="<?php echo $usuario['id_usuario'] ?>"><?php echo $usuario['nombre_usuario'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo Helado</label> <span id="ver_id_helado" style="display: none"></span>
                                            <select id="Combo_cod_helado" class="form-control mb-3">
                                                <option selected="0">Seleccionar</option>
                                                <?php foreach ($helados as $helado) : ?>
                                                    <option value="<?php echo $helado['id_helado'] ?>"><?php echo $helado['nombre_helado'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdatetime">Fecha</label>
                                            <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                                        </div>
                                        <div class="form-group">
                                            <label for="venta_cantidad">Cantidad</label>
                                            <input type="number" class="form-control" id="venta_cantidad" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label for="venta_precio">Precio S/.</label>
                                            <input type="text" class="form-control" id="venta_precio" value="" placeholder="5.00">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn bg-danger">Cancel</button>
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
    $('#Combo_cod_user').on('change', function() {
        var id = this.value;
        var texto = $(this).find('option:selected').text();
        $('#ver_id_usuario').text(texto);
        alert(id);
    });
</script>
<!--jquery-->

<!--jquery-->
<script>
    $('#Combo_cod_helado').on('change', function() {
        var id = this.value;
        var texto = $(this).find('option:selected').text();
        $('#ver_id_helado').text(texto);
        alert(id);
    });
</script>
<!--jquery-->

<?php echo $pie ?>