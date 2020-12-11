<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title><?php echo $page_title; ?></title> -->
    <title>Website Builder</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font_awesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fonts/font.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>"> -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">

    <!--// Required Javascript Files //-->
    <script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.select.plugin.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.conformy.plugin.js') ?>"></script>
    <Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <!--// Get Full Year Copyright //-->

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="<?php echo base_url('assets/js/angular.min.js'); ?>"></script>

</head>

<body class="">
    <?php $config = get_config();
    if (isset($config['licensed_msg'])) {
    ?>
        <div id="expiry" class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> <?php echo $config['licensed_msg']; ?>
        </div>

    <?php } ?>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo base_url('WS'); ?>" class="logo logo-dark">
                        <!-- <span class="logo-sm">
                            <img src="assets/images/logo.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span> -->
                        Website Builder
                    </a>
                </div>
                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
            <div class="d-flex">
                <div class="dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets/images/users/avatar-1.png'); ?>" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1"><?= $this->session->userdata('companyname')?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                        <!-- item-->
                        <!-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a> -->
                        <!-- <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a> -->
                        <!-- <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a> -->
                        <!-- <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item text-danger" href="<?= base_url('a/logout') ?>"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">