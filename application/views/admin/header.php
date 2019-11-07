<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>AMCC || Dept Kerumahtanggaan</title>
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="<?php echo site_url('assets/user/img/favicon-32x32.png') ?>" sizes="32x32" />

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/css/gaya.css') ?>">
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo site_url('assets/admin/'); ?>css/style.css" rel="stylesheet">
    
    <!-- jquery -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
    
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo site_url('assets/admin/'); ?>css/themes/all-themes.css" rel="stylesheet" />
    <style>
  html, body, #map-canvas {
    margin: 0;
    padding: 0;
    height: 100%;
  }
</style>
</head>
<body class="<?php if ($this->ion_auth->is_admin()): ?>
 <?php   echo 'theme-light-blue'; ?>
<?php else: ?>
  <?php   echo 'theme-purple'; ?>
<?php endif ?>">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->