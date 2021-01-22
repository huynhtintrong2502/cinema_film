<!DOCTYPE html>
<html ng-app="account_khachhang-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cinema | Account</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/account_khachhang.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body ng-controller="account_khachhangController">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" style="width:60px;height:70px" src="<?php echo asset('template/img_user/img_khachhang/{{khachfrst.Anh}}') ; ?>"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{khachfrst.TenKH}}</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" ng-click="logout()">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
               
                <li class="active">
                    <a href="#"><i class="fa fa-male"></i> <span class="nav-label">Profile</span></a>
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
                            <a href="/Cinema/public" >Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                        <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                                   
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Profile</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-2"> Edit</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <fieldset>
                                        <div class="wrapper wrapper-content">
                                            <div class="row animated fadeInRight">
                                                <div class="col-md-4" >
                                                    <div class="ibox" >
                                                        <div class="ibox-title">
                                                            <h5>Profile Detail</h5>
                                                        </div>
                                                        <div >
                                                            <div class="ibox-content no-padding border-left-right" style="text-align:center;">
                                                                <img alt="image" class="img-fluid" style="border-radius: 5%;" src="<?php echo asset('template/img_user/img_khachhang/{{khachfrst.Anh}}') ; ?>">
                                                            </div>
                                                            <div class="ibox-content profile-content" >
                                                                <h4><strong>{{khachfrst.TenKH}}</strong></h4>
                                                                <p><i class="fa fa-map-marker"></i> {{khachfrst.DiaChi}}</p>
                                                                <h5>
                                                                    Chứng minh nhân dân:
                                                                </h5>
                                                                <p>{{khachfrst.CMND}}</p>
                                                                <h5>
                                                                    Số điện thoại:
                                                                </h5>
                                                                <p>{{khachfrst.SDT}}</p>
                                                                <h5>
                                                                    Email:
                                                                </h5>
                                                                <p>{{khachfrst.Email}}</p>
                                                                <h5>
                                                                    Ngày Sinh:
                                                                </h5>
                                                                <p>{{khachfrst.NgaySinh}}</p>
                                                                <h5>
                                                                    Giới tính:
                                                                </h5>
                                                                <p>{{khachfrst.GioiTinh}}</p>
                                                                <div class="row m-t-lg">
                                                                    <div class="col-md-4"  style="text-align:center;">
                                                                        <span class="fa fa-money"></span>
                                                                        <h5><strong>$</strong>{{doanhthu}}</h5>
                                                                    </div>
                                                                    <div class="col-md-4" style="text-align:center;">
                                                                        <span class="fa fa-film"></span>
                                                                        <h5><strong>28</strong> Following</h5>
                                                                    </div>
                                                                    <div class="col-md-4" style="text-align:center;">
                                                                        <span class="fa fa-tasks"></span>
                                                                        <h5><strong>{{khachfrst.TenLoaiKH}}</strong></h5>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                    </div>
                                                </div>
                                                    </div>
                                                <div class="col-md-8">
                                                    <div class="ibox ">
                                                        <div class="ibox-title">
                                                            <h5>Lịch sử xem phim</h5>
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


                                                                    <div class="feed-element" ng-repeat="item in listxem">
                                                                        <a href="#" class="float-left">
                                                                            <img alt="image" class="rounded-circle" src="<?php echo asset('template/img_user/img_khachhang/{{khachfrst.Anh}}') ; ?>">
                                                                        </a>
                                                                        <div class="media-body ">
                                                                            <small class="float-right"></small>
                                                                            <strong>Đã xem phim: </strong> {{item.TenPhim}} <br>
                                                                            <strong>Đạo diễn: </strong> {{item.DaoDien}} <br>
                                                                            <small class="text-muted">Ngày xem: {{item.NgayXem}}</small>

                                                                        </div>
                                                                    </div>

                                                                    
                                                                </div>

                                                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        </fieldset>
                                        
                                        <div class="hr-line-dashed"></div>
                                      


                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                    <fieldset>
                                           

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Họ tên:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Họ tên" ng-model="hoten"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Giới tính:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Giới tính" ng-model="gioitinh"></div>
                                            </div>

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Ngày sinh :</label>
                                                <div class="col-sm-10"><input type="date"  class="form-control"  ng-model="ngaysinh"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Địa chỉ:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Địa chỉ" ng-model="diachi"></div>
                                            </div>

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Email:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Email" ng-model="email"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Số điện thoại:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Số điện thoại" ng-model="sdt"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Chứng minh nhân dân:</label>
                                                <div class="col-sm-10"><input type="text"  class="form-control" placeholder="Chứng minh nhân dân" ng-model="cmnd"></div>
                                            </div>
                                            <form  enctype="multipart/form-data" method="POST" id="form-upload-msds">
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Ảnh:</label>
                                                    <div class="col-sm-10">    
                                                        <div class="custom-file">
                                                            <input  type="file" class="custom-file-input" id="img_1" name="img_1">
                                                            <label for="img_trailler" class="custom-file-label">Choose file...</label>
                                                            <button class="btn btn-primary btn-sm" type="submit">Upload</button>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </form>
                                        </fieldset>
                                        
                                        <div class="hr-line-dashed"></div>
                                     
                                        <div class="btn-group">
                                            <button  class="btn btn-primary btn-sm -toggle" ng-click="savechange()">Save changes</button>
                                           
                                        </div>
                                        <div class="btn-group">
                                            <button   class="btn btn-default btn-sm -toggle" ng-click="cancel()">Cancel</button>
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
    <script src="<?php echo asset('template/admin/js/inspinia.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Peity -->
    <script src="<?php echo asset('template/admin/js/plugins/peity/jquery.peity.min.js');?>"></script>

    <!-- Peity -->
    <script src="<?php echo asset('template/admin/js/demo/peity-demo.js');?>"></script>

</body>

</html>
