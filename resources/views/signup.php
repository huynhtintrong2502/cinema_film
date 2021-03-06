<!DOCTYPE html>
<html ng-app="signup-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cinema | sign up</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/signup.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body class="gray-bg" ng-controller="signupController">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
        <div>

            <h1 class="logo-name">CIM</h1>

            </div>
            <h3>Welcome to CIM</h3>
            <p>Chào mừng các bạn đến với hệ thống đặt và quản lý vé trực tuyến
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>
            Phục vụ các bạn là niềm hân hạnh của đội ngũ nhân viên Cinema
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <h3>Register to CIM</h3>
            <p>Create account to see it in action.</p>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="username" placeholder="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" ng-model="password" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" ng-model="re_password" placeholder="Re_Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" ng-click="dangky()">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="signin">Login</a>
            
            <p class="m-t"></p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/popper.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js');?>"></script>
    <!-- iCheck -->
    <script src="<?php echo asset('template/admin/js/plugins/iCheck/icheck.min.js');?>"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
