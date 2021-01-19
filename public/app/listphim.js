var app = angular.module('listphim-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



app.controller('listphimController', function($scope, $http, API, $rootScope, $location, $window) {
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
                    $scope.listphim = response.data;

                }
            });
        }
    };

    $http.get(API + 'search').then(function(response) {
        var search_txt = response.data.search_text;
        var l = response.data.by_search;
        if (search_txt == null || search_txt == "") {
            $http.get(API + 'phimmoi').then(function(response) {
                $scope.listphim = response.data;
            });
        } else {
            $http.get(API + 'listtimkiem/' + search_txt + '/' + l).then(function(response) {
                $scope.listphim = response.data;
            });
        }

    });

    $scope.xemchitiet = function(MaPhim) {

        var data = 2;
        var url = API + 'luumaphim/' + MaPhim;
        $http({
                method: 'POST',
                url: url,
                data: data,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
            .then(function(response) {
                console.log(MaPhim);

            });

    };

    $scope.next_dat_ve = function() {
        if ($scope.user.Id_nguoidung == 0)
            $window.location.href = 'signin';
        else $window.location.href = 'book_1';

    };






});