<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Lista de Helados</h4>
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
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Img 1</th>
                                <th scope="col">Img 2</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($helados as $helado) : ?>
                                <tr>
                                    <td><?php echo $helado['id_helado'] ?></td>
                                    <td><?php echo $helado['nombre_helado'] ?></td>
                                    <td><?php echo $helado['precio_helado'] ?></td>
                                    <td><?php echo $helado['stock_helado'] ?></td>
                                    <td><img height="50px" src=" data:image/jpg; base64,<?php echo base64_encode($helado['imagen1_helado']); ?> " /></td>
                                    <td><img height="50px" src=" data:image/jpg; base64,<?php echo base64_encode($helado['imagen2_helado']); ?> " /></td>
                                    <td><?php echo $helado['descripcion'] ?></td>
                                    <td>
                                        
                                        <a href="#" class="btn btn-success btn-sm mr-2">Actulizar</a>
                                        <br>
                                        <a href="#" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash-alt"></i>Eliminar</a>
                                    </td>
                                    <td class=" ">
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
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
                    <form action="<?php echo base_url("") ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputText1">Nombre</label>
                            <input type="text" REQUIRED name="helado_nombre" class="form-control" id="exampleInputText1" value="" placeholder="Helado zambito">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Precio S/.</label>
                            <input type="text" REQUIRED name="helado_precio" class="form-control" id="exampleInputText1" value="" placeholder="5.00">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Stock</label>
                            <input type="text" REQUIRED name="helado_stock" class="form-control" id="exampleInputText1" value="" placeholder="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Imagen 1</label> <br>
                            <input type="file" REQUIRED id="myFile" name="helado_imagen1" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Imagen 2</label> <br>
                            <input type="file" id="myFile" name="helado_imagen2">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Descripcion</label>
                            <input type="text" REQUIRED name="helado_descripcion" class="form-control" id="exampleInputText1" value="" placeholder="Sabores de chocolate y vainilla">
                        </div>
                        <button type="submit" value="agregar" class="btn btn-primary">Agregar</button>
                        <button type="submit" value="cancelar" class="btn bg-danger">Cancel</button>
                    </form>
                </div>
                <!--fin de nuevo-->
                
                <!--fin de actualizar-->
            </div>
        </div>
    </div>
    <!---->
</div>
<?php echo $pie ?>