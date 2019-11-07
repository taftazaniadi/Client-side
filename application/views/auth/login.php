<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | DEPT KRT </title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="<?php echo site_url('assets/user/img/favicon-32x32.png') ?>" sizes="32x32" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->

    <link href="<?php echo site_url('assets/admin/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo site_url('assets/admin/plugins/node-waves/waves.css') ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo site_url('assets/admin/plugins/animate-css/animate.css') ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo site_url('assets/admin/css/style.css') ?>" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">DEPT <b>KRT AMCC</b></a>
            <small>Departemen Kerumahtanggaan - Dept IT</small>
        </div>
        <div id="infoMessage" class="msg form-line btn-block btn-warning"><?php echo $message; ?></div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?php echo site_url('auth/login') ?>" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="identity" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?php echo site_url('auth/create_user') ?>">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="<?php echo site_url('auth/forgot_password') ?>">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo site_url('assets/admin/plugins/bootstrap/js/bootstrap.js') ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/node-waves/waves.js') ?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery-validation/jquery.validate.js') ?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo site_url('assets/admin/js/admin.js') ?>"></script>
    <script src="<?php echo site_url('assets/admin/js/pages/examples/sign-in.js'); ?>"></script>
</body>

</html>