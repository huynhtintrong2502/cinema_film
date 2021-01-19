<!DOCTYPE html>
<html ng-app="signin-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cinema | Login</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/signin.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body class="gray-bg" ng-controller="signinController">

    <div class="middle-box text-center loginscreen animated fadeInDown">
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
            <p>Login in. To see it in action.</p>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" ng-model="password"  placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" ng-click="signin(username,password)">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="signup">Create an account</a>
            
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/popper.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js');?>"></script>

</body>

</html>
