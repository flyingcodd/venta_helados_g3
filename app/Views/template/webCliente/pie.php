<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Envio Gratis</h4>
                    <p>Para pedidos que superen los S/.100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Devolucion Gratuita</h4>
                    <p>Devoluciones dentro de una semana</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Pago Seguro</h4>
                    <p>Pago 100% seguro</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Mejores Precios</h4>
                    <p>Precio garantizado</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Noticias</h4>
                        <p> Unete a nuestra familia y obten un <span>10%</span> de descuento en compras</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Tu correo electronico" required="" type="email">
                            <button class="btn">Unete</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="https://www.dafont.com/forum/attach/orig/8/7/879162.jpg" alt="#"></a>
                        </div>
                        <p class="text"><?php echo $empresa['slogan_empresa'] ?></p>
                        <p class="call">Tienes alguna pregunta? Te escuchamos <span><a href="tel:927613580"><?php echo $empresa['telefono1_empresa'] ?> </a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Informacion</h4>
                        <ul>
                            <li><a href="<?php echo base_url('nosotros')?>">Nosotros</a></li>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Terminos y condiciones</a></li>
                            <li><a href="<?php echo base_url('contacto')?>">Contactanos</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Servicio al Cliente</h4>
                        <ul>
                            <li><a href="#">Metodos de Pago</a></li>
                            <li><a href="#">Reclamos</a></li>
                            <li><a href="#">Devoluciones</a></li>
                            <li><a href="#">Envios</a></li>
                            <li><a href="#">Politica de Privacidad</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Ponerse en contacto</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li><?php echo $empresa['ubicacion_empresa'] ?></li>
                                <li>Abancay-Apurimac-Peru.</li>
                                <li><?php echo $empresa['email1_empresa'] ?></li>
                                <li><?php echo $empresa['telefono1_empresa'] ?></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">

                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="<?php echo base_url() ?>/images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->


<!-- Jquery OFICIAL-->
<script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/js/jquery-migrate-3.0.0.js"></script>
<script src="<?php echo base_url() ?>/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="<?php echo base_url() ?>/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="<?php echo base_url() ?>/js/colors.js"></script>
<!-- Slicknav JS -->
<script src="<?php echo base_url() ?>/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php echo base_url() ?>/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo base_url() ?>/js/magnific-popup.js"></script>
<!-- Fancybox JS -->
<script src="<?php echo base_url() ?>/js/facnybox.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo base_url() ?>/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="<?php echo base_url() ?>/js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="<?php echo base_url() ?>/js/nicesellect.js"></script>
<!-- Ytplayer JS -->
<script src="<?php echo base_url() ?>/js/ytplayer.min.js"></script>
<!-- Flex Slider JS -->
<script src="<?php echo base_url() ?>/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="<?php echo base_url() ?>/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="<?php echo base_url() ?>/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="<?php echo base_url() ?>/js/easing.js"></script>
<!-- Active JS -->
<script src="<?php echo base_url() ?>/js/active.js"></script>



<!-- Flex Slider JS -->
<script src="<?php echo base_url() ?>/js/flex-slider.js"></script>
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
<script src="<?php echo base_url() ?>/js/gmap.min.js"></script>
<script src="<?php echo base_url() ?>/js/map-script.js"></script>
</body>

</html>