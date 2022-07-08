<?php echo $cabecera ?>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Inicio<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>Ponerse en Contacto</h4>
                            <h3>Escribir Mensaje</h3>
                        </div>
                        <form class="form" method="post" action="mail/mail.php">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Nombres<span>*</span></label>
                                        <input name="name" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Apellidos<span>*</span></label>
                                        <input name="subject" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Correo Electronico<span>*</span></label>
                                        <input name="email" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Telefono<span>*</span></label>
                                        <input name="company_name" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>Mensaje<span>*</span></label>
                                        <textarea name="message" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <h4 class="title">Telefono de contacto:</h4>
                            <ul>
                                <li><?php echo $item['telefono1_empresa'] ?></li>
                                <li><?php echo $item['telefono1_empresa'] ?></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li><a href="jaimecarrascotaipe@gmail.com"><?php echo $item['email1_empresa'] ?></a></li>
                                <li><a href="heladeria_ice_cream@gmail.com"><?php echo $item['email2_empresa'] ?></a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Direccion:</h4>
                            <ul>
                                <li><?php echo $item['ubicacion_empresa'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Map Section -->

<!--/ End Map Section -->

<div class="row">
    <div class="col-12" style="background-color: white;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7981.954261233849!2d-72.87672005798495!3d-13.635738278476959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9245fcc955209068!2zMTPCsDM4JzA5LjkiUyA3MsKwNTInMTguMiJX!5e0!3m2!1ses!2spe!4v1657251654555!5m2!1ses!2spe" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


<?php echo $pie ?>