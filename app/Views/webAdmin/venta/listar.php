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
                            <?php foreach ($inner as $ventas) : ?>
                                <tr>
                                    <td><?php echo $ventas['id_venta'] ?></td>
                                    <td><?php echo $ventas['nombre_usuario'] ?></td>
                                    <td><?php echo $ventas['nombre_helado'] ?></td>
                                    <td><?php echo $ventas['fecha'] ?></td>
                                    <td><?php echo $ventas['cantidad'] ?></td>
                                    <td><?php echo $ventas['precio_total'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

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