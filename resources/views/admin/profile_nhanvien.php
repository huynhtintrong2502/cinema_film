<!DOCTYPE html>
<html ng-app="profile_nhanvien-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Profile</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/profile_nhanvien.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body ng-controller="profile_nhanvienController">

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
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="list_khachhang" >List khách hàng</a>
                        </li>
                        <li class="breadcrumb-item active">
                        <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right" style="text-align:center;">
                                <img alt="image" class="img-fluid" style="border-radius: 5%;" src="<?php echo asset('template/img_user/img_nhanvien/{{nhanvien.Anh}}') ; ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{nhanvien.TenNV}}</strong></h4>
                                <p><i class="fa fa-map-marker"></i> {{nhanvien.DiaChi}}</p>
                                <h5>
                                    Chứng minh nhân dân:
                                </h5>
                                <p>{{nhanvien.CMND}}</p>
                                <h5>
                                    Số điện thoại:
                                </h5>
                                <p>{{nhanvien.SDT}}</p>
                                <h5>
                                    Ngày Sinh:
                                </h5>
                                <p>{{nhanvien.NgaySinh}}</p>
                                <h5>
                                    Ngày bắt đầu làm:
                                </h5>
                                <p>{{nhanvien.NgayBD}}</p>
                                <h5>
                                    Giới tính:
                                </h5>
                                <p>{{nhanvien.GioiTinh}}</p>
                                <div class="row m-t-lg">
                                    <div class="col-md-4"  style="text-align:center;">
                                        <span class="fa fa-money"></span>
                                        <h5><strong>$</strong>{{doanhthu}}</h5>
                                    </div>
                                    <div class="col-md-4" style="text-align:center;">
                                        <span class="fa fa-film"></span>
                                        <h5><strong>{{soveban}}</strong> Vé</h5>
                                    </div>
                                   
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" ng-click="delete(nhanvien.ID)" class="btn btn-warning btn-sm btn-block"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-money"></i> Tính lương</button>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lịch sử bán vé</h5>
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

                            <div>
                                <div class="feed-activity-list">


                                    <div class="feed-element" ng-repeat="item in listban">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="<?php echo asset('template/img_user/img_nhanvien/{{nhanvien.Anh}}') ; ?>">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right"></small>
                                            <strong>Đã bán vé phim: </strong> {{item.TenPhim}} <br>
                                            <strong>Đạo diễn: </strong> {{item.DaoDien}} <br>
                                            <small class="text-muted">Ngày bán: {{item.NgayXem}}</small>

                                        </div>
                                    </div>

                                    
                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                            </div>

                        </div>
                    </div>

                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lịch sử làm việc</h5>
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
                            <div class="wrapper wrapper-content">
                                <div class="row animated fadeInRight">
                                    <div class="col-lg-12">
                                    <div class="ibox ">
                                       
                                        <div class="ibox-content" id="ibox-content">

                                            <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                                                <div class="vertical-timeline-block" ng-repeat="item in lichsuwork">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>

                                                    <div class="vertical-timeline-content">
                                                        <h2>Ngày làm: {{item.NgayLam}}</h2>
                                                        <p>Giờ bắt đầu: {{item.ThoiGianBatDau}}
                                                        </p>
                                                        <p>Giờ kết thúc: {{item.ThoiGianKetThuc}}
                                                        </p>
                                                        <p>Tiền lương: ${{item.GioLam*10}}
                                                        </p>
                                                        
                                                        <a href="#" class="btn btn-sm btn-primary"> Chi tiết</a>
                                                        
                                                        </span>
                                                    </div>
                                                </div>

                                               

                                              
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        
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
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Peity -->
    <script src="<?php echo asset('template/admin/js/plugins/peity/jquery.peity.min.js');?>"></script>

    <!-- Peity -->
    <script src="<?php echo asset('template/admin/js/demo/peity-demo.js');?>"></script>

</body>

</html>
