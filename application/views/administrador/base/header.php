<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>plantilla/images/favicon.png">
    <title>Ciudad Mujer</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url() ?>plantilla/componentes/css/lib/html5-editor/bootstrap-wysihtml5.css">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/helper.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/style.css" rel="stylesheet">
    <script src="<?=base_url() ?>plantilla/componentes/js/jquery-1.11.0.min.js"></script>
    <link href="<?=base_url() ?>plantilla/componentes/css/estilos.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/datepicker.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url() ?>Anuncios/">
                        <!-- Logo icon -->
                        <b><img src="<?=base_url() ?>plantilla/images/LogoCM.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="<?=base_url() ?>plantilla/images/LogoText.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">
                    <h3>Aqui iria informacion de ayuda y acerca de los desarrolladores</h3>
                    </div>
                    </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <li><a href="<?= base_url()?>login/cerrar_sesion"><span class="btn btn-danger">cerrar session</span></a></li>
                        <!-- Comment -->
                       
                        <!-- End Comment -->
                        <!-- Messages -->
                     
                        <!-- End Messages -->
                        <!-- Profile -->
                     
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <?php
        //$id=$this->session->userdata('id');
        $tipo=$this->session->userdata('id_tipo');
        if($tipo==1){
             include_once"sidebar.php";
        }
        else if($tipo==2){
             include_once"sidebarAdministradora.php";
        }
        else if($tipo==3){
             include_once"sidebarUsuaria.php";
        }
        else{
            include_once"sidebarVisitante.php";
        }
         ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            