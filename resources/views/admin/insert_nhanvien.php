<!DOCTYPE html>
<html ng-app="insert_nhanvien-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Cinema | Nhân viên</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/insert_nhanvien.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/plugins/steps/jquery.steps.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body ng-controller="insert_nhanvienController">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?php echo asset('template/admin/img/profile_small.jpg') ; ?>"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                <li >
                    <a href="dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Trang chủ</span> <span class="fa arrow"></span></a>
                   
                </li>
                <li >
                    <a href="list_khachhang"><i class="fa fa-male"></i> <span class="nav-label">Quản lý khách hàng</span></a>
                </li>
                <li>
                    <a href="list_nhanvien"><i class="fa fa-user-o"></i> <span class="nav-label">Quản lý nhân viên</span><span class="fa arrow"></span></a>
                   
                </li>
                <li >
                    <a href="list_film"><i class="fa fa-film"></i> <span class="nav-label">Quản lý list film </span></a>
                   
                </li>
                <li >
                    <a href="insert_ncc_loaiphim"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Thêm NCC-Loại film</span>  </a>
                </li>
                <li class="active">
                    <a href="insert_nhanvien"><i class="fa fa-medkit"></i> <span class="nav-label">Thêm nhân viên</span></a>
                </li>
                <li >
                    <a href="insert_film"><i class="fa fa-edit"></i> <span class="nav-label">Thêm phim</span><span class="fa arrow"></span></a>
                    
                </li>

                <li class="landing_link">
                    <a target="_blank" href="#"><i class="fa fa-star"></i> <span class="nav-label">Xin chào Thầy</span> </a>
                </li>
                <li class="special_link">
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">cùng các bạn</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#" ng-click="logout()">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Đăng ký nhân viên</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="insert_nhanvien">Đăng ký nhân viên</a>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Đăng ký nhân viên mới</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                Mời bạn nhập đầy đủ thông tin bên dưới
                            </h2>
                            <p>
                            </p>

                            <form id="form" action="#" class="wizard-big">
                                <h1>Account</h1>
                                <fieldset>
                                    <h2>Account Information</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Username *</label>
                                                <input id="userName_1" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group" >
                                                <label>Password *</label>
                                                <input id="password"    name="password" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input id="re_password" ng-model="re_password" name="confirm" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Profile</h1>
                                <fieldset>
                                    <h2>Profile Information</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Họ Tên *</label>
                                                <input id="hoten_1" ng-model="hoten" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới Tính *</label>
                                                <input id="gioitinh_1" ng-model="gioitinh" name="gioitinh" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Chứng Minh Nhân Dân *</label>
                                                <input id="cmnd_1" ng-model="cmnd" name="cmnd" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa Chỉ *</label>
                                                <input id="diachi_1" ng-model="diachi" name="name" type="text" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Số Điện Thoại *</label>
                                                <input id="sdt_1" ng-model="sdt" name="name" type="text" class="form-control required">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Ngày Sinh *</label>
                                                <input id="ngaysinh_1" ng-model="ngaysinh" name="ngaysinh" type="date" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                               
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>Mời bạn bạn click save change bên dưới để hoàn tất!</h2>
                                    </div>
                                </fieldset>

                                
                            </form>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit" ng-click="savechange()">Save changes</button>
                            <button class="btn btn-white btn-sm" ng-click="cancel()" type="submit">Cancel</button>
                        </div>
                                        
                    s</div>
                    </div>

                </div>
            </div>
            <div class="footer">
            <div class="float-right">
                Xin chào thầy và các bạn
            </div>
            <div>
                <strong>Tư duy</strong> là sức mạng của sáng tạo
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/popper.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('template/admin/js/inspinia.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Steps -->
    <script src="<?php echo asset('template/admin/js/plugins/steps/jquery.steps.min.js');?>"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo asset('template/admin/js/plugins/validate/jquery.validate.min.js');?>"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

</body>

</html>
