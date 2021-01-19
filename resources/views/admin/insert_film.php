


<!DOCTYPE html>
<html ng-app="insertfilm-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Cinema | Insert phim</title>
    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/insert_film.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/plugins/summernote/summernote-bs4.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/plugins/datapicker/datepicker3.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/animate.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css') ; ?>" rel="stylesheet">

   


</head>

<body ng-controller="insertfilmController">

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
                <li >
                    <a href="list_film"><i class="fa fa-film"></i> <span class="nav-label">Quản lý list film </span></a>
                   
                </li>
                <li >
                    <a href="insert_ncc_loaiphim"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Thêm NCC-Loại film</span>  </a>
                </li>
                <li>
                    <a href="insert_nhanvien"><i class="fa fa-medkit"></i> <span class="nav-label">Thêm nhân viên</span></a>
                </li>
                <li class="active" >
                    <a href="insert_film"><i class="fa fa-edit"></i> <span class="nav-label">Thêm phim</span><span class="fa arrow"></span></a>
                    
                </li>

                <li class="landing_link">
                    <a target="_blank" href="#"><i class="fa fa-star"></i> <span class="nav-label">Xin chào Thầy</span> </a>
                </li>
                <li class="special_link">
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">cùng các bạn</span></a>
                </li>
            </ul>
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
                                        <img alt="image" class="rounded-circle" src="<?php echo asset('template/admin/img/a7.jpg');?>">
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
                                        <img alt="image" class="rounded-circle" src="<?php echo asset('template/admin/img/a4.jpg');?>">
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
                                        <img alt="image" class="rounded-circle" src="<?php echo asset('template/admin/img/profile.jpg');?>">
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
                <h2 ng-if="api_maphim != 0">Edit film</h2>
                <h2 ng-if="api_maphim == 0">Thêm film</h2>
                <ol class="breadcrumb" ng-if="api_maphim != 0">
                        <li class="breadcrumb-item">
                            <a href="list_film">List film</a>
                        </li>
                    <li class="breadcrumb-item" ng-if="api_maphim != 0">
                        <a href="xemchitiet">Xem chi tiết</a>
                    </li>
                    <li class="breadcrumb-item active" ng-if="api_maphim != 0">
                        <strong >Edit film</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <form  enctype="multipart/form-data" method="POST" id="form-upload-msds">
                                   
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li ng-if="api_maphim == 0 "><a class="nav-link active" data-toggle="tab" href="#tab-1"> New film</a></li>
                                <li ng-if="api_maphim != 0 "><a class="nav-link active" data-toggle="tab" href="#tab-1"> Edit film</a></li>
                                <li ng-if="api_maphim == 0 "> <a class="nav-link" data-toggle="tab" href="#tab-2"> Trailler</a></li>
                                <li ng-if="api_maphim == 0 "><a class="nav-link" data-toggle="tab" href="#tab-4"> Images</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Tên film:</label>
                                                <div class="col-sm-10"><input type="text" ng-model="tenphim" class="form-control" placeholder="Tên film"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Đạo diễn:</label>
                                                <div class="col-sm-10"><input type="text" ng-model="daodien" class="form-control" placeholder="Đạo diễn"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Quốc gia:</label>
                                                <div class="col-sm-10"><input type="text" ng-model="quocgia" class="form-control" placeholder="Quốc gia"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Năm sản xuất:</label>
                                                <div class="col-sm-10"><input type="number" ng-model="namsanxuat" class="form-control" placeholder="Năm sản xuất"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Thời lượng:</label>
                                                <div class="col-sm-10"><input type="number" ng-model="thoiluong" class="form-control" placeholder="Thời lượng"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Ngôn ngữ:</label>
                                                <div class="col-sm-10"><input type="text" ng-model="ngonngu" class="form-control" placeholder="Ngôn ngữ" ng-model="te"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Nội dung:</label>
                                                <div class="col-sm-10"  >
                                                <textarea rows="9" cols="70" placeholder="Nội dung" ng-model="noidung" class="form-control"> </textarea>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Thể loại:</label>
                                                <div class="col-sm-10">
                                                    <select ng-model="selected_theloai" class="form-control" placeholder="Tên thể loại" >
                                                        <option ng-repeat="item in listtheloai" value="{{item.MaTL}}">{{item.TenTheLoai}}</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Nhà cung cấp:</label>
                                                <div class="col-sm-10">
                                                    <select ng-model="selected_nhacungcap" class="form-control" placeholder="Tên thể loại" >
                                                        <option ng-repeat="item in listnhacungcap" value="{{item.MaNCC}}">{{item.TenNCC}}</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Tuổi giới hạn:</label>
                                                <div class="col-sm-10"><input type="number" ng-model="tuoigioihan" class="form-control" placeholder="Tuổi giới hạn" ng-model="te"></div>
                                            </div>


                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Ảnh hiển thị:</label>
                                                <div class="col-sm-10">    
                                                    <div class="custom-file">
                                                        <input  type="file" class="custom-file-input" id="img_trailler" name="img_trailler">
                                                        <label for="img_trailler" class="custom-file-label">Choose file...</label>
                                                    </div> 
                                                </div>
                                            </div>

                                        </fieldset>

                                        <div class="hr-line-dashed"></div>
                                            <div class="form-group row" ng-if="api_maphim != 0 ">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary btn-sm" type="submit" ng-click="savechange()">Save changes</button>
                                                   
                                                    <button class="btn btn-white btn-sm" ng-click="cancel()" type="submit">Cancel</button>
                                                </div>
                                        
                                        </div>

                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Video Trailler:</label>
                                                <div class="col-sm-10">    
                                                    <div class="custom-file">
                                                        <input  type="file" class="custom-file-input" id="video_trailler" name="video_trailler">
                                                        <label for="logo" class="custom-file-label">Choose file...</label>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">    
                                                    <div class="ibox ">
                                                        <div class="ibox-title">
                                                            <h5>Video window</h5>
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
                                                        <figure>
                                                            <video controls muted>
                                                                <source ng-src="<?php echo asset('template/img_phim/video_trailer/video_1.mp4') ; ?>">
                                                            </video>    
                                                        </figure>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                        
                                        </fieldset>


                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-stripped table-bordered">

                                                <thead>
                                                <tr>
                                                    <th>
                                                        Group
                                                    </th>
                                                    <th>
                                                        Quantity
                                                    </th>
                                                    <th>
                                                        Discount
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date start
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date end
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                            <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-stripped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Image preview
                                                    </th>
                                                    <th>
                                                        Image url
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/2s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 1:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_1" name="img_1">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/1s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 2:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_2" name="img_2">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/3s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 3:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_3" name="img_3">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/4s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 4:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_4" name="img_4">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/5s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 5:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_5" name="img_5">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/6s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 6:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_6" name="img_6">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 7:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_7" name="img_7">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 8:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input"  id="img_8" name="img_8">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 9:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input" id="img_9" name="img_9">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Image 10:</label>
                                                            <div class="col-sm-10">    
                                                                <div class="custom-file">
                                                                    <input  type="file" class="custom-file-input"  id="img_10" name="img_10">
                                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <br/>
                                    <br/>

                                        <div class="hr-line-dashed"></div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                                    </form>
                                                    <button class="btn btn-white btn-sm" ng-click="cancel()" type="submit">Cancel</button>
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

<!-- SUMMERNOTE -->
<script src="<?php echo asset('template/admin/js/plugins/summernote/summernote-bs4.js');?>"></script>

<!-- Data picker -->
<script src="<?php echo asset('template/admin/js/plugins/datapicker/bootstrap-datepicker.js');?>"></script>

<script>
    $(document).ready(function(){

        $('.summernote').summernote();

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

    });
</script>




</body>

</html>

