<!DOCTYPE html>
<html ng-app="xemchitiet-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | E-commerce product detail</title>
    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/xemchitiet.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/plugins/slick/slick.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/plugins/slick/slick-theme.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">



</head>

<body ng-controller="xemchitietController">

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
                <li>
                    <a href="list_nhanvien"><i class="fa fa-user-o"></i> <span class="nav-label">Quản lý nhân viên</span><span class="fa arrow"></span></a>
                   
                </li>
                <li class="active">
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
                    <form role="search" class="navbar-form-custom" action="search_results.html">
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
            <h2>Xem chi tiết</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="list_film">List film</a>
                        </li>
                    <li class="breadcrumb-item">
                        <a href="xemchitiet">Xem chi tiết</a>
                    </li>
                   
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">

                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/panel_phim/{{film.AnhHienThi}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh1}}');?>');background-position: center center; background-size: cover;">
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh2}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh3}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh4}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh5}}');?>');background-position: center center; background-size: cover;">
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh6}}');?>');background-position: center center; background-size: cover;">
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh7}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh8}}');?>');background-position: center center; background-size: cover;">
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh9}}');?>');background-position: center center; background-size: cover;">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="background-image: url('<?php echo asset('template/img_phim/img_trailer/{{film.Anh10}}');?>');background-position: center center; background-size: cover;">
                                               
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        {{film.TenPhim}}
                                    </h2>
                                    <small>Category: {{film.TenTheLoai}}</small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">Revenue ${{doanhthu}}  </h2>
                                    </div>
                                    <hr>

                                    <h4>Content</h4>

                                    <div class="small text-muted">
                                        {{film.NoiDung}}
                                    </div>
                                    <dl class="small m-t-md">
                                        <dt>Director</dt>
                                        <dd>{{film.DaoDien}}</dd>
                                        <dt>Country</dt>
                                        <dd>{{film.QuocGia}}</dd>
                                        <dt>Year</dd>
                                        <dd>{{film.NamSX}}</dt>
                                        <dt>Age restriction</dd>
                                        <dd>{{film.AgeDuocXem}}</dt>
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm" ng-click="edit()"><i class="fa fa-pencil"></i> Edit </button>
                                            <button class="btn btn-warning btn-sm" ng-click="delete(film.MaPhim)"><i class="fa fa-trash-o"></i> Delete </button>
                                            <button class="btn btn-white btn-sm" ng-click="showtime()"><i class="fa fa-film"></i> Show time </button>
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
<script src="<?php echo asset('template/admin/js/popper.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/bootstrap.js');?>"></script>
<script src="<?php echo asset('template/admin/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
<script src="<?php echo asset('template/admin/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo asset('template/admin/js/inspinia.js');?>"></script>
<script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js');?>"></script>

<!-- slick carousel-->
<script src="<?php echo asset('template/admin/js/plugins/slick/slick.min.js');?>"></script>

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>

</body>

</html>
