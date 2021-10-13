<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title><?php echo $empresa['nombre_empresa'] ?></title>
    <!-- Favicon -->
    <link rel="icon" type="<?php echo base_url('') ?>/image/png" href="<?php echo base_url("") ?>/images/<?php echo $empresa['icono_empresa'] ?>">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/themify-icons.css">
    <!--jquery-ui-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/jquery-ui.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <!--COLOR CSS--->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/color/color3.css">
    <link rel="stylesheet" href="#" id="colors">
</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <div class="color-plate">
        <a class="color-plate-icon"><i class="ti-paint-bucket"></i></a>
        <h4>Eshop Colors</h4>
        <p>Here is some awesome color's available on Eshop Template.</p>
        <span class="color1"></span>
        <span class="color2"></span>
        <span class="color3"></span>
        <span class="color4"></span>
        <span class="color5"></span>
        <span class="color6"></span>
        <span class="color7"></span>
        <span class="color8"></span>
        <span class="color9"></span>
        <span class="color10"></span>
        <span class="color11"></span>
        <span class="color12"></span>
    </div>

    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i><?php echo $empresa['telefono1_empresa'] ?></li>
                                <li><i class="ti-email"></i><?php echo $empresa['email1_empresa'] ?> </li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> <?php echo $empresa['ubicacion_empresa'] ?> </li>
                                <li><i class="ti-alarm-clock"></i> <a href="#"> Horario </a></li>
                                <?php if (session('nombre_usuario') != null) { ?>
                                    <li><i class="ti-user"></i> <a href="#"><?php echo session('nombre_usuario') ?> </a></li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Perfil
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Ver mi perfil</a></li>
                                                <li><a class="dropdown-item" href="#">Editar mi perfil</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('login/salir') ?>">Salir</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                <?php } else {  ?>
                                    <li><i class="ti-power-off"></i><a href="<?php echo base_url("/login") ?>"> Login </a></li>
                                <?php } ?>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                            </ul>

                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?php echo base_url("/") ?>"><img src="https://www.dafont.com/forum/attach/orig/8/7/879162.jpg" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">Todas</option>
                                    <option>Niños</option>
                                    <option>Familiares</option>
                                    <option>Personales</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Buscar productos aqui..." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo $contador ?></span></a>
                                <!-- Shopping Item -->

                                <div class="shopping-item">


                                    <div class="dropdown-cart-header">
                                        <span><?php ?> Objetos</span>
                                        <a href="<?php echo base_url('') ?>/carrito">Ver Carrito</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <?php foreach ($carritos as $carrito) : ?>

                                            <li>
                                                <?php foreach ($helados as $helado) : ?>
                                                    <?php if ($carrito['id_helado'] == $helado['id_helado']) : ?>
                                                        <a href="<?php echo base_url('carrito/borrar/' . $carrito['id_carrito']) ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="<?php echo base_url('imagenesHelado') . "/" . $helado['imagen1_helado'] ?>" alt="#"></a>
                                                        <h4><a href="#"><?php echo $helado['nombre_helado'] ?></a></h4>
                                                        <p class="quantity"><?php echo $carrito['cantidad_carrito']; ?>x - <span class="amount"><?php echo ($helado['precio_helado']) ?></span></p>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>

                                            <span class="total-amount">$<?php echo $precio_total ?></span>

                                        </div>
                                        <a href="<?php echo base_url("carrito/vender") ?>" class="btn animate">Pagar</a>
                                    </div>


                                </div>

                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg center">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="<?php echo base_url("/") ?>">Inicio</a></li>
                                                <li><a href="<?php echo base_url("/tienda") ?>">Productos</a></li>
                                                <li><a href="#">Tienda<i class="ti-angle-down"></i><span class="new">Nuevos</span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="<?php echo base_url("/tienda") ?>">Tienda online</a></li>
                                                        <li><a href="<?php echo base_url("/ofertas") ?>">ofertas</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="<?php echo base_url("/nosotros") ?>">Sobre nosotros</a></li>
                                                <li><a href="<?php echo base_url("/contacto") ?>">Contactanos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->