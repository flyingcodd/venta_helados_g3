<?php echo $cabecera ?>



<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>HELADOS</th>
                            <th>NOMBRE</th>
                            <th class="text-center">PRECIO UNITARIO</th>
                            <th class="text-center">CANTIDAD</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($carritos as $carrito) : ?>
                            <tr>
                                <?php foreach ($helados as $helado) :
                                    if ($helado['id_helado'] == $carrito['id_helado']) : ?>
                                        <td class="image" data-title="No"><img src="<?php echo base_url('imagenesHelado') . "/" . $helado['imagen1_helado'] ?>" alt="#"></td>
                                        <td class="product-des" data-title="Description">
                                            <p class="product-name"><a href="#"><?php echo $helado['nombre_helado'] ?></a></p>
                                            <p class="product-des"><?php echo $helado['descripcion'] ?></p>
                                        </td>
                                        <td class="price" data-title="Price"><span>$<?php echo $helado['precio_helado'] ?></span></td>

                                        <td class="qty" data-title="Qty">
                                            <!-- Input Order -->
                                            <div class="input-group">
                                                <div class="button minus">
                                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="<?= $helado['stock_helado'] ?>" value="<?php echo $carrito['cantidad_carrito'] ?>">
                                                <div class="button plus">
                                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--/ End Input Order -->
                                        </td>
                                        <td class="total-amount" data-title="Total"><span>$<?php echo ($carrito['cantidad_carrito']) * ($helado['precio_helado']) ?></span></td>
                                        <td class="action" data-title="Remove"><a href="<?php echo base_url('carrito/borrar/' . $carrito['id_carrito']) ?>"><i class="ti-trash remove-icon"></i></a></td>
                            </tr><?php endif;
                                endforeach; ?>
                <?php endforeach; ?>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
            <div class="col-lg-12 col-md-5 col-12"  style="padding-top: 5px;">
                <div class="float-right">
                    <form action="#" target="_blank">
                        <button class="btn">actualizar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Ingrese su cupon">
                                        <button class="btn">Aplicar</button>
                                    </form>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Envio (+10$)</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>Carito Subtotal<span>$<?php echo $precio_total ?></span></li>
                                    <li>Envio<span>Free</span></li>
                                    <li>Ahorras<span>$00.00</span></li>
                                    <li class="last">Su Pago<span>$<?php echo $precio_total ?></span></li>
                                </ul>
                                <div class="button5">
                                    <a type="button" href="<?php echo base_url("carrito/vender") ?>" value="vender" class="btn">Pagar</a>
                                    <a href="<?php echo base_url('tienda') ?>" class="btn">Continuar Comprando</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<!-- Start Shop Services Area  -->
<section class="shop-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->



<?php echo $pie ?>