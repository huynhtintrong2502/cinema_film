


<!DOCTYPE html>
<html ng-app="suatchieu-app">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Cinema | Lịch chiếu</title>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/admin/suatchieu.js') ; ?>"></script>

    <link href="<?php echo asset('template/admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/admin/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/admin/css/style.css');?>" rel="stylesheet">

</head>

<body ng-controller="suatchieuController">

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
                <li class="active" >
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
                <h2>Show time</h2>
                <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="list_film">List film</a>
                        </li>
                    <li class="breadcrumb-item">
                        <a href="xemchitiet">Xem chi tiết</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>show time</strong>
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
                                <li ><a class="nav-link active" data-toggle="tab" href="#tab-1"> Rạp 1</a></li>
                                <li ><a class="nav-link" data-toggle="tab" href="#tab-2"> Rạp 2</a></li>
                                <li ng-if="api_maphim != 0 "> <a class="nav-link" data-toggle="tab" href="#tab-3"> Create show time</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
                                        <div class="wrapper wrapper-content animated fadeInRight">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <h5>Show time rạp 1</h5>
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

                                                        <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                    <thead>
                                                    <tr>
                                                        <th>Ngày</th>
                                                        <th>Suất chiếu 1: 08:00</th>
                                                        <th>Suất chiếu 2: 12:00</th>
                                                        <th>Suất chiếu 3: 15:00</th>
                                                        <th>Suất chiếu 4: 19:00</th>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="gradeA" ng-repeat="item in listlichchieu| filter: search_text | orderBy: 'item[0]'">
                                                        <td class="center">{{item[0]}}</td>
                                                        <td class="center" style="background: {{item[5]}}" ng-click="showtime(item[0],'08:00',item[1],1)">{{item[1]}}</td>
                                                        <td class="center" style="background: {{item[6]}}" ng-click="showtime(item[0],'12:00',item[2],1)">{{item[2]}}</td>
                                                        <td class="center" style="background: {{item[7]}}" ng-click="showtime(item[0],'15:00',item[3],1)">{{item[3]}}</td>
                                                        <td class="center" style="background: {{item[8]}}" ng-click="showtime(item[0],'19:00',item[4],1)">{{item[4]}}</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Ngày</th>
                                                        <th>Suất chiếu 1: 08:00</th>
                                                        <th>Suất chiếu 2: 12:00</th>
                                                        <th>Suất chiếu 3: 15:00</th>
                                                        <th>Suất chiếu 4: 19:00</th>
                                                    </tr>
                                                    </tfoot>
                                                    </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        </fieldset>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset>
                                        <div class="wrapper wrapper-content animated fadeInRight">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <h5>Show time rạp 2</h5>
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

                                                        <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                    <thead>
                                                    <tr>
                                                        <th>Ngày</th>
                                                        <th>Suất chiếu 1: 08:00</th>
                                                        <th>Suất chiếu 2: 12:00</th>
                                                        <th>Suất chiếu 3: 15:00</th>
                                                        <th>Suất chiếu 4: 19:00</th>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="gradeA" ng-repeat="item in listlichchieu_2| filter: search_text | orderBy: 'item[0]'">
                                                        <td >{{item[0]}}</td>
                                                        <td class="center" style="background: {{item[5]}}" ng-click="showtime(item[0],'08:00',item[1],2)">{{item[1]}}</td>
                                                        <td class="center" style="background: {{item[6]}}" ng-click="showtime(item[0],'12:00',item[2],2)">{{item[2]}}</td>
                                                        <td class="center" style="background: {{item[7]}}" ng-click="showtime(item[0],'15:00',item[3],2)">{{item[3]}}</td>
                                                        <td class="center" style="background: {{item[8]}}" ng-click="showtime(item[0],'19:00',item[4],2)">{{item[4]}}</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Ngày</th>
                                                        <th>Suất chiếu 1: 08:00</th>
                                                        <th>Suất chiếu 2: 12:00</th>
                                                        <th>Suất chiếu 3: 15:00</th>
                                                        <th>Suất chiếu 4: 19:00</th>
                                                    </tr>
                                                    </tfoot>
                                                    </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>


                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <fieldset>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Tên phim:</label>
                                            <div class="col-sm-10"><input type="text" ng-model="tenphim" class="form-control" placeholder="Tên phim"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Ngày chiếu:</label>
                                            <div class="col-sm-10"><input type="text" ng-model="ngaychieu" class="form-control" placeholder="Ngày chiếu"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Rạp chiếu:</label>
                                            <div class="col-sm-10"><input type="text" ng-model="rapchieu" class="form-control" placeholder="Rạp chiếu"></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Suất chiếu:</label>
                                            <div class="col-sm-10"><input type="text" ng-model="suatchieu" class="form-control" placeholder="Suất chiếu"></div>
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

    <script src="<?php echo asset('template/admin/js/plugins/dataTables/datatables.min.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('template/admin/js/inspinia.js');?>"></script>
    <script src="<?php echo asset('template/admin/js/plugins/pace/pace.min.js');?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

</body>

</html>

