<?php echo $cabecera ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Shop Login -->
<section class="shop login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="login-form">
                    <h2>Login</h2>
                    <p>Please register in order to checkout more quickly</p>
                    <!-- Form -->
                    <form class="form" method="post" action="<?php echo base_url("login/validar") ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Su correo electronico:<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Su Password:<span>*</span></label>
                                    <input type="password" name="password" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit">Login</button>
                                    <a href="<?php echo base_url('registrar') ?>" class="btn">Registar</a>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Recordar me</label>
                                </div>
                                <a href="#" class="lost-pass">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Login -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let mensaje = '<?php echo $mensaje; ?>'

    if (mensaje == '1') {
        Swal.fire(
            'Buen Trabajo!',
            'registrado con exito! puede inisiar session',
            'success'
        )
    }
    if (mensaje == 'nologin') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Contraseña o email incorrectos!'
        })
    }
</script>

<?php echo $pie; ?>