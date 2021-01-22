var app = angular.module('book3-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



app.controller('Book3Controller', function($scope, $http, API, $rootScope, $location, $window) {
    $danhdau_maphim = 0;
    $danhdau_ngayxem = 0;
    $danhdau_suatchieu = 0;
    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public';
    });


    $scope.Anh_user = 'anhmacdinh.png';
    $scope.Ten_user = 'Sign in';
    // kiểm tra đăng nhập
    $http.get(API + 'user').then(function(response) {
        $MaUser = response.data.Id_nguoidung;
        if ($MaUser != 0 || $MaUser != null) {
            $scope.user = response.data;
            if (response.data.Id_nguoidung != 0) {
                $http.get(API + 'getkhachhangfirst/' + response.data.Id_nguoidung).then(function(response) {
                    $scope.Anh_user = response.data.Anh;
                    $scope.Ten_user = response.data.TenKH;
                    var splitted = $scope.Ten_user.split(" ", 5);
                    for (let item of splitted) {
                        $scope.Ten_user = item;
                    }
                });

            } else
                $scope.Maus = $MaUser;
        } else $scope.Maus = 0;

    });


    //xử lý tìm kiếm
    $scope.timkiem = function() {
        var l = $('#input_store_select_search').val();
        if (l == undefined)
            l = 1;
        if ($scope.search_text == "" || $scope.search_text == null)
            alert("Mời bạn nhập nội dung tìm kiếm!");
        else {
            $http.get(API + 'listtimkiem/' + $scope.search_text + '/' + l).then(function(response) {
                if (response.data.length == 0) {
                    alert("Không tìm thấy!");
                } else {
                    $http.get(API + 'luutimkiem/' + $scope.search_text + '/' + l).then(function(response) {
                        $window.location.href = 'listphim';
                    });

                }
            });
        }
    };

    // xử lý tiền vé và set toàn bộ dữ liệu


    $scope.thuong = "";
    $scope.trung = "";
    $scope.vip = "";
    $sum = 0;

    $http.get(API + 'apive').then(function(response) {

        $http.get(API + 'getghe/' + response.data.MaGhe).then(function(response) {
            if (response.data.MaLoaiGhe == 1)
                $scope.thuong = "$30";
            else if (response.data.MaLoaiGhe == 2)
                $scope.trung = "$40";
            else $scope.vip = "$50";
            $scope.count_ghe = 1;
            $scope.sum = response.data.GiaGhe;
            $sum = response.data.GiaGhe;

        });
    });

    $http.get(API + 'user').then(function(response) {
        var id_user = response.data.Id_nguoidung;
        $http.get(API + 'getkhachhangfirst/' + id_user).then(function(response) {
            $scope.email = response.data.Email;
            $scope.phone = response.data.SDT;
        });
    });
    // Chức năng đặt vé
    $scope.datve = function() {
        if ($scope.email == "" || $scope.phone == "")
            alert("Mời bạn nhập đầy đủ thông tin email hoặc số điện thoại");
        else {

            $http.get(API + 'apive').then(function(response) {
                var today = new Date();
                var date = today.getDate();
                var month = today.getMonth() + 1;
                var year = today.getFullYear();
                $NgayMua = year + "-" + month + "-" + date;

                var today1 = new Date(response.data.NgayXem);
                var date1 = today1.getDate();
                var month1 = today1.getMonth() + 1;
                var year1 = today1.getFullYear();
                $NgayXem = year1 + "-" + month1 + "-" + date1;
                $http.get(API + 'create_ve/' + response.data.MaRap + '/' + response.data.MaSC + '/' + response.data.MaGhe + '/' + $scope.user.Id_nguoidung + '/' + response.data.MaPhim + '/' + $NgayXem + '/' + $NgayMua + '/' + $sum).then(function(response) {
                    console.log(response.data);
                    $window.location.href = 'book_final';
                });
            });
        }

    };





});