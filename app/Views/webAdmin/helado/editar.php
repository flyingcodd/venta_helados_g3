<?php echo $cabecera ?>
<div class="col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Editar helados</h4>
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
                                    <form action="<?php echo base_url("admin/helados/actualizar") ?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $helado['id_helado'] ?>">
                                        <div class="form-group">
                                            <label for="exampleInputText1">Nombre</label>
                                            <input type="text" REQUIRED name="nombre" class="form-control" id="exampleInputText1" value="<?php echo $helado['nombre_helado'] ?>" placeholder="Ingrese el nombre del helado">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Precio S/.</label>
                                            <input type="text" REQUIRED name="precio" class="form-control" id="exampleInputText1" value="<?php echo $helado['precio_helado'] ?>" placeholder="ingrese el precio ejm 4.50">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Stock</label>
                                            <input type="number" REQUIRED name="stock" class="form-control" id="exampleInputText1" value="<?php echo $helado['stock_helado'] ?>" placeholder="ingrese el stock del helado">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Imagen 1</label> <br>
                                            <img height="90px" src="<?php echo base_url('imagenesHelado') . '/' . $helado['imagen1_helado'] ?>" /><br>
                                            <input type="file" id="myFile" name="imagen1" accept="image/png, .jpeg, .jpg, image/gif">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Imagen 2</label> <br>
                                            <img height="90px" src="<?php echo base_url('imagenesHelado') . '/' . $helado['imagen2_helado'] ?>" /><br>
                                            <input type="file" id="myFile" name="imagen2" accept="image/png, .jpeg, .jpg, image/gif">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Descripcion</label>
                                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="ingrese la descripcion del helado"><?php echo $helado['descripcion'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Categoria</label>
                                            <select id="" class="form-control mb-3" name="categoria" required>

                                                <?php foreach ($categorias as $categoria) :
                                                    if ($helado['id_categoria'] == $categoria['id_categoria']){ ?>
                                                        <option selected="" value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nombre_categoria'] ?></option>
                                                    <?php }else{ ?>
                                                    <option value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nombre_categoria'] ?></option>
                                                <?php } endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit" value="agregar" class="btn btn-primary">Actualizar</button>
                                        <a type="button" href="<?php echo base_url("admin/helados") ?>" value="" class="btn btn-danger">Cancelar</a>
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