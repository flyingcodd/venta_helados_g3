<?php echo $cabecera ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Inicio<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Tienda Online</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Categorias</h3>
                        <ul class="categor-list">
                            <?php foreach ($categorias as $item) : ?>
                                <li><a href="#"><?php echo $item['nombre_categoria']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Shop By Price -->
                    <div class="single-widget range">
                        <h3 class="title">Filtrar por precio</h3>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Rango:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="check-box-list">
                            <li>
                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">S/.10 - S/.30<span class="count">(3)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">S/.30 - S/.60<span class="count">(5)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">S/.60 - S/100<span class="count">(8)</span></label>
                            </li>
                        </ul>
                    </div>
                    <!--/ End Shop By Price -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Novedades</h3>
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://www.hola.com/imagenes/cocina/noticiaslibros/20210629192230/recetas-helados-cucurucho-cornete/0-969-441/cornetes-helados-adob-m.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Conitos de Colores</a></h5>
                                <p class="price">S/.20</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://www.yamboly.com/productos_ok/yambito.png" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Paletas de Colores</a></h5>
                                <p class="price">S/.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="http://cdn.shopify.com/s/files/1/0460/5558/8007/products/PECHOCOLATE_1200x630.jpg?v=1631044079" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Pezi Duri</a></h5>
                                <p class="price">S/.20</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->

                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        <div class="shop-top">
                            <div class="shop-shorter">
                                <div class="single-shorter">
                                    <label>Mostrar:</label>
                                    <select>
                                        <option selected="selected">09</option>
                                        <option>15</option>
                                        <option>25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                                <div class="single-shorter">
                                    <label>Ordenar por:</label>
                                    <select>
                                        <option selected="selected">Nombre</option>
                                        <option>Precio</option>
                                        <option>Tamaño</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="view-mode">
                                <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                                <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($helados as $item) : ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="<?php echo base_url('producto/' . $item['id_helado']) ?>">
                                        <img class="default-img" src="<?php echo base_url('imagenesHelado/' . $item['imagen1_helado']) ?>" alt="#">
                                        <img class="hover-img" src="<?php echo base_url('imagenesHelado/' . $item['imagen2_helado']) ?>" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="<?php echo base_url('producto/' . $item['id_helado']) ?>">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="<?php echo base_url('producto/' . $item['id_helado']) ?>"><?php echo $item['nombre_helado'] ?></a></h3>
                                    <div class="product-price">
                                        <span>s/.<?php echo $item['precio_helado'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Product Style 1  -->



<?php echo $pie ?>