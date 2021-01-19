<!DOCTYPE html>
<html ng-app="list_nhanvien-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Nhân viên</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/list_nhanvien.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/animate.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css') ; ?>" rel="stylesheet">

</head>

<body ng-controller="list_nhanvienController">

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
                <li>
                    <a href="list_khachhang"><i class="fa fa-male"></i> <span class="nav-label">Quản lý khách hàng</span></a>
                </li>
                <li class="active">
                    <a href="list_nhanvien"><i class="fa fa-user-o"></i> <span class="nav-label">Quản lý nhân viên</span><span class="fa arrow"></span></a>
                   
                </li>
                <li >
                    <a href="list_film"><i class="fa fa-film"></i> <span class="nav-label">Quản lý list film </span></a>
                   
                </li>
                <li >
                    <a href="insert_ncc_loaiphim"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Thêm NCC-Loại film</span>  </a>
                </li>
                <li>
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
                    <input type="text" ng-model="search_text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
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
                <div class="col-lg-9">
                    <h2>Quản lý khách hàng</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="list_khachhang">List khách hàng</a>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">


            <div class="col-lg-4" ng-repeat="item in listnhanvien | filter: search_text | orderBy: 'TenNV'">
                <div class="contact-box">
                    <a class="row" href="#" ng-click="profile(item)">
                    <div class="col-4">
                        <div class="text-center">
                            <img alt="image" class="rounded-circle m-t-xs img-fluid" src="<?php echo asset('template/img_user/img_nhanvien/{{item.Anh}}') ; ?>">
                            <div class="m-t-xs font-bold">{{item.CMND}}</div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><strong>{{item.TenNV}}</strong></h3>
                        <p><i class="fa fa-map-marker"></i> {{item.DiaChi}}</p>
                        <address>
                            <strong>Giới tính:</strong><br>
                            {{item.GioiTinh}}<br>
                            <strong>Ngày sinh:</strong><br>
                            {{item.NgaySinh}}<br>
                            
                            <abbr title="Phone">P:</abbr> {{item.SDT}}
                            <br>
                            <strong>Ngày Làm việc đầu tiên:</strong><br>
                            {{item.NgayBD}}<br>
                        </address>
                    </div>
                        </a>
                </div>
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
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js') ; ?>"></script>
    <script src="<?php echo asset('template/admin/js/popper.min.js') ; ?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js') ; ?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/metisMenu/jquery.metisMenu.js') ; ?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') ; ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('template/admin/js/inspinia.js') ; ?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js') ; ?>"></script>


</body>

</html>
