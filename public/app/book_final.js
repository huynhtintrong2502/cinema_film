var app = angular.module('bookfinal-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



app.controller('BookfinalController', function($scope, $http, API, $rootScope, $location, $window) {
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


    $http.get(API + 'maphim').then(function(response) {
        $scope.MaPhim = response.data.MaPhim;
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
    $http.get(API + 'apive').then(function(response) {
        $http.get(API + 've_first/' + response.data.MaPhim + '/' + response.data.NgayXem + '/' + response.data.MaSC + '/' + response.data.MaRap + '/' + response.data.MaGhe).then(function(response) {
            $scope.ve = response.data.MaVe;
            $http.get(API + 'get_vefirst/' + response.data.MaVe).then(function(response) {
                $scope.ve = response.data;
            });
        });
    });


    $scope.printDiv = function(div) {
        var docHead = document.head.outerHTML;
        var printContents = document.getElementById(div).outerHTML;
        var winAttr = "location=yes, statusbar=no, menubar=no, titlebar=no, toolbar=no,dependent=no, width=865, height=600, resizable=yes, screenX=200, screenY=200, personalbar=no, scrollbars=yes";

        var newWin = window.open("", "_blank", winAttr);
        var writeDoc = newWin.document;
        writeDoc.open();
        writeDoc.write('<!doctype html><html>' + docHead + '<body onLoad="window.print()">' + printContents + '</body></html>');
        writeDoc.close();
        newWin.focus();
    }






});