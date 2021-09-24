<?php echo $cabecera ?>
holaaa
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($helados as $helado) : ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $helado['id_helado'] ?></td>
                <td><?php echo $helado['nombre_helado'] ?></td>
                <td><?php echo $helado['precio_helado'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<?php echo $pie ?>