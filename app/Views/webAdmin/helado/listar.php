
<?php echo $cabecera ?>

<div class="card-header d-flex justify-content-between">
    <div class="header-title">
        <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Lista de Helados</h4>
    </div>
</div>

<div class="card">  
    <div class="card-header d-flex justify-content-between">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($helados as $helado) : ?>
                    <tr>
                        <td><?php echo $helado['id_helado'] ?></td>
                        <td><?php echo $helado['nombre_helado'] ?></td>
                        <td><?php echo $helado['precio_helado'] ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

agregar algo mas...
<?php echo $pie ?>