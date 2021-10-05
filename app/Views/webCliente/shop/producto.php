
<?php echo $cabecera?>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?php echo base_url("/")?>">Inicio<i class="ti-arrow-right"></i></a></li>
                        <li><a href="<?php echo base_url("tienda")?>">Tienda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">detalle del helado</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Shop Single -->
<section class="shop single section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <!-- Images slider -->
                            <div class="flexslider-thumbnails">

                                <div class="flex-viewport">
                                    <ul class="slides">
                                        <li data-thumb="<?php echo base_url('imagenesHelado').'/'.$helado['imagen1_helado'] ?>" rel="adjustX:10, adjustY:" class="clone">
                                            <img src="<?php echo base_url('imagenesHelado').'/'.$helado['imagen1_helado'] ?>" alt="#">
                                        </li>
                                        <li data-thumb="<?php echo base_url('imagenesHelado').'/'.$helado['imagen2_helado'] ?>" class="clone">
                                            <img src="<?php echo base_url('imagenesHelado').'/'.$helado['imagen2_helado'] ?>" alt="#">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Images slider -->
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="product-des">
                            <!-- Description -->
                            <div class="short">
                                <h4><?php echo $helado['nombre_helado'] ?></h4>
                                <div class="rating-main">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                        <li class="dark"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <a href="#" class="total-review">(102) Review</a>
                                </div>
                                <p class="price"><span class="discount">$<?php echo $helado['precio_helado'] ?></span><s>$80.00</s> </p>
                                <p class="description"><?php echo $helado['descripcion'] ?></p>
                            </div>
                            <!--/ End Description -->
                            <!-- Color -->
                            <div class="color">
                                <h4>Opciones <span>Sabores</span></h4>
                                <ul>
                                    <li><a href="#" class="one"><i class="ti-check"></i></a></li>
                                    <li><a href="#" class="two"><i class="ti-check"></i></a></li>
                                    <li><a href="#" class="three"><i class="ti-check"></i></a></li>
                                    <li><a href="#" class="four"><i class="ti-check"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Color -->
                            <!-- Size -->
                            <div class="size">
                                <h4>Size</h4>
                                <ul>
                                    <li><a href="#" class="one">1L</a></li>
                                    <li><a href="#" class="two">2L</a></li>
                                    <li><a href="#" class="three">3L</a></li>
                                    <li><a href="#" class="four">4L</a></li>
                                    <li><a href="#" class="four">5L</a></li>
                                </ul>
                            </div>
                            <!--/ End Size -->
                            <!-- Product Buy -->
                            <div class="product-buy"><form action="<?php echo base_url("carrito/insertar") ?>" method="POST">
                                <div class="quantity">
                                    <h6>Cantidad :</h6>
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="cantidad">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="cantidad" class="input-number" data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="cantidad">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <br><br><br>
                                <div class="add-to-cart">
                                    <input type="hidden" name="helado" value="<?php echo $helado['id_helado'] ?>">
                                    <input type="hidden" name="cliente" value="<?php echo 2 ?>">
                                    <button type="submit" class="btn">Agregar a carrito</button>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div></form>
                                <p class="cat">Categoria :<a href="#"><?php echo $categoria['nombre_categoria'] ?></a></p>
                                <p class="availability">Stock : <?php echo $helado['stock_helado'] ?> Productos de <?php echo $helado['nombre_helado'] ?> en Stock</p>
                            </div>
                            <!--/ End Product Buy -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-info">
                            <div class="nav-main">
                                <!-- Tab Nav -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
                                </ul>
                                <!--/ End Tab Nav -->
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <!-- Description Tab -->
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="single-des">
                                                    <p><?php echo $helado['descripcion'] ?></p>
                                                </div>
                                                <div class="single-des">
                                                    <p><?php echo $categoria['descripcion_categoria'] ?></p>
                                                </div>
                                                <div class="single-des">
                                                    <h4>Product Features:</h4>
                                                    <ul>
                                                        <li>long established fact.</li>
                                                        <li>has a more-or-less normal distribution. </li>
                                                        <li>lmany variations of passages of. </li>
                                                        <li>generators on the Interne.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Description Tab -->
                                <!-- Reviews Tab -->
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="tab-single review-panel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="ratting-main">
                                                    <div class="avg-ratting">
                                                        <h4>4.5 <span>(Overall)</span></h4>
                                                        <span>Based on 1 Comments</span>
                                                    </div>
                                                    <!-- Single Rating -->
                                                    <div class="single-rating">
                                                        <div class="rating-author">
                                                            <img src="http://wpthemesgrid.com/themes/eshop/images/comments1.jpg" alt="#">
                                                        </div>
                                                        <div class="rating-des">
                                                            <h6>Naimur Rahman</h6>
                                                            <div class="ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                                <div class="rate-count">(<span>3.5</span>)</div>
                                                            </div>
                                                            <p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
                                                        </div>
                                                    </div>
                                                    <!--/ End Single Rating -->
                                                    <!-- Single Rating -->
                                                    <div class="single-rating">
                                                        <div class="rating-author">
                                                            <img src="http://wpthemesgrid.com/themes/eshop/images/comments2.jpg" alt="#">
                                                        </div>
                                                        <div class="rating-des">
                                                            <h6>Advin Geri</h6>
                                                            <div class="ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                                <div class="rate-count">(<span>5.0</span>)</div>
                                                            </div>
                                                            <p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
                                                        </div>
                                                    </div>
                                                    <!--/ End Single Rating -->
                                                </div>
                                                <!-- Review -->
                                                <div class="comment-review">
                                                    <div class="add-review">
                                                        <h5>Add A Review</h5>
                                                        <p>Your email address will not be published. Required fields are marked</p>
                                                    </div>
                                                    <h4>Your Rating</h4>
                                                    <div class="review-inner">
                                                        <div class="ratings">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ End Review -->
                                                <!-- Form -->
                                                <form class="form" method="post" action="mail/mail.php">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label>Your Name<span>*</span></label>
                                                                <input type="text" name="name" required="required" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label>Your Email<span>*</span></label>
                                                                <input type="email" name="email" required="required" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-12">
                                                            <div class="form-group">
                                                                <label>Write a review<span>*</span></label>
                                                                <textarea name="message" rows="6" placeholder=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-12">
                                                            <div class="form-group button5">
                                                                <button type="submit" class="btn">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ End Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Reviews Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Shop Single -->



<!-- Start Most Popular --AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA PONER IMAGENES --->
<<div class="product-area most-popular related-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                <span class="out-of-stock">Hot</span>
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                            <div class="product-price">
                                <span class="old">$60.00</span>
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Women Hot Collection</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                <span class="new">New</span>
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->








<?php echo $pie ?>