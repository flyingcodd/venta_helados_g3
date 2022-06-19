<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Inicio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("") ?>/assets/images/favicon.ico" />

    <link rel="stylesheet" href="<?php echo base_url("") ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url("") ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
</head>

<body class=" color-light ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default  ">
            <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                <a href="<?php echo base_url("") ?>/admin" class="header-logo">
                    <img src="<?php echo base_url("") ?>/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <img src="<?php echo base_url("") ?>/assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                    <span>Helader</span>
                </a>
                <div class="side-menu-bt-sidebar-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="side-menu">
                        <li class="sidebar-layout <?= ('admin'==uri_string()?'active':'')?>">
                            <a href="<?php echo base_url("") ?>/admin" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </i>
                                <span class="ml-2">Inicio</span>
                                <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                            </a>
                        </li>
                        <li class="px-3 pt-3 pb-2">
                            <span class="text-uppercase small font-weight-bold">Paginas</span>
                        </li>
                        <li class="sidebar-layout <?= ('admin/perfil'==uri_string()?'active':'')?>">
                            <a href="<?php echo base_url("") ?>/admin/perfil" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i><span class="ml-2">Perfil de Usuario</span>
                            </a>
                        </li>
                        <li class="sidebar-layout">
                            <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-Linecap="round" stroke-Linejoin="round" stroke-Width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Tabla General</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="sidebar-layout <?= ('admin/usuarios'==uri_string()?'active':'')?>">
                                    <a href="<?php echo base_url("") ?>/admin/usuarios" class="svg-icon">
                                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </i><span class="">Usuarios</span>
                                    </a>
                                </li>
                                <li class="sidebar-layout <?= ('admin/roles'==uri_string()?'active':'')?>">
                                    <a href="<?php echo base_url("") ?>/admin/roles" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </i><span class="">Roles</span>
                                    </a>
                                </li>
                                <li class="sidebar-layout <?= ('admin/helados'==uri_string()?'active':'')?>">
                                    <a href="<?php echo base_url("") ?>/admin/helados" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                            </svg>
                                        </i><span class="">Helados</span>
                                    </a>
                                </li>
                                <li class="sidebar-layout <?= ('admin/ventas'==uri_string()?'active':'')?>">
                                    <a href="<?php echo base_url("") ?>/admin/ventas" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </i><span class="">Ventas</span>
                                    </a>
                                </li>
                                <li class="sidebar-layout <?= ('admin/categorias'==uri_string()?'active':'')?>">
                                    <a href="<?php echo base_url("") ?>/admin/categorias" class="svg-icon">
                                        <i class="fa fa-list-ul"></i><span class="">Categorias de helados</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-layout <?= ('admin/caja'==uri_string()?'active':'')?>">
                            <a href="<?php echo base_url("") ?>/admin/caja" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                    </svg>
                                </i><span class="ml-2">Caja</span>
                            </a>
                        </li>
                        <li class="px-3 pt-3 pb-2">
                            <span class="text-uppercase small font-weight-bold">Configuraciones de empresa</span>
                        </li>
                        <li class="sidebar-layout <?= ('admin/configuraciones'==uri_string()?'active':'')?>">
                            <a href="<?php echo base_url("") ?>/admin/configuraciones?>" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Configuraciones generales</span>
                            </a>
                        </li>

                        <li class="px-3 pt-3 pb-2">
                            <span class="text-uppercase small font-weight-bold">Informacion</span>
                        </li>
                        <!---->

                        <li class="sidebar-layout <?= ('admin/info'==uri_string()?'active':'')?>">
                            <a href="../backend/icon-heroicon.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Info</span>
                            </a>
                        </li>
                        <li class="px-3 pt-3 pb-2">
                            <span class="text-uppercase small font-weight-bold">Ver</span>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="<?php echo base_url("") ?>/tienda" class="svg-icon" target="_blank">
                                <i class="">
                                    <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Ver Tienda</span>
                            </a>
                        </li>
                        <li class="sidebar-layout <?= ('admin/ayuda'==uri_string()?'active':'')?>">
                            <a href="<?php echo base_url("") ?>/producto" class="svg-icon" target="_blank">
                                <i class="">
                                    <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </i>
                                <span class="ml-2">Ver Ayuda</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="pt-5 pb-5"></div>
            </div>
        </div>
        <!--Aqui inicia el navar-->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="side-menu-bt-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <div class="d-flex align-items-center">

                        <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                        <span class="switch-icon-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                            </svg>
                                        </span>
                                        <span class="switch-icon-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class="p-3 card-header-border">
                                                <h6 class="text-center">
                                                    Notificaciones
                                                </h6>
                                            </div>
                                            <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">
                                                <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                    <li class="dropdown-item-1 float-none p-3">
                                                        <div class="list-item d-flex justify-content-start align-items-start">
                                                            <div class="avatar">
                                                                <div class="avatar-img avatar-danger avatar-20">
                                                                    <span>
                                                                        <svg class="icon line" width="30" height="30" id="cart-alt1" stroke="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                            <path d="M3,3H5.32a1,1,0,0,1,.93.63L10,13,8.72,15.55A1,1,0,0,0,9.62,17H19" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                                                            <polyline points="10 13 18.2 13 21 6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline>
                                                                            <line x1="20.8" y1="6" x2="7.2" y2="6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                                                            <circle cx="10.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle>
                                                                            <circle cx="16.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="list-style-detail ml-2 mr-2">
                                                                <h6 class="font-weight-bold">Su pedido se realiza</h6>
                                                                <p class="m-0">
                                                                    <small class="text-secondary">If several languages coalesce</small>
                                                                </p>
                                                                <p class="m-0">
                                                                    <small class="text-secondary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>
                                                                        3 hours ago</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item-1 float-none p-3">
                                                        <div class="list-item d-flex justify-content-start align-items-start">
                                                            <div class="avatar">
                                                                <div class="avatar-img avatar-success avatar-20">
                                                                    <span><img class="avatar is-squared rounded-circle" src="<?php echo base_url("") ?>/assets/images/user/2.jpg" alt="2.jpg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="list-style-detail ml-2 mr-2">
                                                                <h6 class="font-weight-bold">Nuevo mensaje de Katy</h6>
                                                                <p class="m-0">
                                                                    <small class="text-secondary">You have 3 unreded messages</small>
                                                                </p>
                                                                <p class="m-0">
                                                                    <small class="text-secondary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>
                                                                        5 hours ago</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="card-footer text-muted p-3">
                                                <p class="mb-0 text-primary text-center font-weight-bold">Mostrar todas las notificaciones</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?php echo base_url("") ?>/assets/images/Flag/flag-03.png" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class=" p-0 ">
                                                <ul class="dropdown-menu-1 list-group list-group-flush">
                                                    <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="<?php echo base_url("") ?>/assets/images/Flag/flag001.png" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;" />Ingles</a></li>
                                                    <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="<?php echo base_url("") ?>/assets/images/Flag/flag-04.png" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;" />Italiano</a></li>
                                                    <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="<?php echo base_url("") ?>/assets/images/Flag/flag-02.png" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;" />Frances</a></li>
                                                    <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="<?php echo base_url("") ?>/assets/images/Flag/flag-05.png" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;" />Aleman</a></li>
                                                    <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="<?php echo base_url("") ?>/assets/images/Flag/flag-06.png" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;" />Japones</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                <a href="#" class="search-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?php echo base_url("") ?>/assets/images/user/1.jpg" class="img-fluid avatar-rounded" alt="user">
                                        <span class="mb-0 ml-2 user-name"><?php echo session('nombre_usuario') ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <a href="../app/user-profile.html">My Profile</a>
                                        </li>
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            <a href="../app/user-profile-edit.html">Edit Profile</a>
                                        </li>
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <a href="../app/user-account-setting.html">Account Settings</a>
                                        </li>
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                            <a href="../app/user-privacy-setting.html">Privacy Settings</a>
                                        </li>
                                        <li class="dropdown-item  d-flex svg-icon border-top">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <a href="<?php echo base_url("login/salir") ?>">Salir</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">


                    <!--Empieza el contenido-->