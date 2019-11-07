<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register || Dept KRT AMCC </title>
    <!-- Favicon-->
   <link rel="shortcut icon" href="<?php echo site_url('assets/img/favicon.ico') ?>">

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
            <small>AMICTA 2017 - Dikih Arif </small>
        </div>
         <div id="infoMessage" class="msg form-line btn-block btn-warning"><?php echo $message;?></div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="<?php echo site_url('auth/create_user') ?>">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="first_name" placeholder="first_name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="last_name" placeholder="last_name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">work</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="company" placeholder="Orma atau UKM" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="help-info" id="al-email"></div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="number" class="form-control" name="phone" placeholder="phone" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" required="" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Dengan ini saya telah setuju dan patuh terhadap ketentuan yang berlaku di Dept Kerumahtanggaan AMCC</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo site_url('auth/login') ?>">You already have a membership?</a>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#email").keyup(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/getEmail') ?>",
                data: {
                    email: $("#email").val()
                },
                dataType: "json",
                success: function (data) {
                  if(!data){a
                    alert('ada');
                    $("#al-email").text("Email already exist");
                  }else {
                    alert('ga ada');
                     $("#al-email").text("");
                  }
                }
            });
        });
    });
    </script>