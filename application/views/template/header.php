<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <!-- <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-2-columns.html" data-toggle="tooltip" data-placement="top" title="2-Columns"><i class="ficon feather icon-sidebar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="starter-list">
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="<?php echo base_url(); ?>app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="feather icon-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url('index.php/authentication/logout') ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url(); ?>html/ltr/vertical-menu-template/index.html">
                        <!-- <div class="brand-logo"></div> -->
                        <h2 class="brand-text mb-0">SIM-KCDIX</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Data Sekolah</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href="#"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Fixed navbar">Profile Sekolah</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Data Siswa</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-upload"></i><span class="menu-title">Import Data</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Fixed navbar">Import Siswa</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Import PTK</span></a>
                        </li>
                    </ul>
                </li>
                <!-- <li class=" nav-item"><a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->