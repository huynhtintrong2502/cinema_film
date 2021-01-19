var app = angular.module('account_khachhang-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('account_khachhangController', function($scope, $http, API, $rootScope, $location, $window) {
    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public/signin';
        else {

            $scope.tenanh = "macdinh";

            $scope.logout = function() {
                $http.get(API + 'luu_User_1/' + 0).then(function(response) {
                    $window.location.href = '/Cinema/public/signin';
                });
            };

            $http.get(API + 'user').then(function(response) {
                var khachhang = response.data;
                if (khachhang.Id_nguoidung == 0)
                    $window.location.href = '/Cinema/public/signin';
                else {
                    $http.get(API + 'getkhachhangfirst/' + khachhang.Id_nguoidung).then(function(response) {
                        $scope.khachfrst = response.data;
                        $scope.hoten = response.data.HoTen;
                        $scope.gioitinh = response.data.GioiTinh;
                        $scope.ngaysinh = '25/02/2000';
                        $scope.email = response.data.Email;
                        $scope.sdt = response.data.SDT;
                        $scope.cmnd = response.data.CMND;
                        $scope.diachi = response.data.DiaChi;
                    });

                    $http.get(API + 'thongke_doanhthu_theokhach/' + khachhang.Id_khach).then(function(response) {
                        $scope.doanhthu = response.data;
                    });


                    $http.get(API + 'listve_khachhang/' + khachhang.Id_khach).then(function(response) {
                        $scope.listxem = response.data;
                    });

                    $scope.logout = function() {
                        $http.get(API + 'luu_User_1/' + 0).then(function(response) {
                            $window.location.href = '/Cinema/public/signin';
                        });
                    };



                    $('#form-upload-msds').submit(function(e) {
                        e.preventDefault();

                        let img_trailler_1 = $("#img_1")[0].files[0];
                        if (img_trailler_1 == '' || img_trailler_1 == null)
                            alert('Bạn chưa chọn ảnh!');
                        else {
                            //upload file ảnh hiển thị
                            var formData = new FormData();
                            formData.append('file', img_trailler_1);
                            url = API + 'template/uploadfile_img_khachhang.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    alert("upload thành công!");
                                    $scope.tenanh = img_trailler_1.name;
                                })

                        }
                    });


                    $scope.savechange = function() {
                        if ($scope.hoten == '' || $scope.hoten == null)
                            alert('Bạn chưa nhập họ tên!');
                        else if ($scope.gioitinh == '' || $scope.gioitinh == null)
                            alert('Bạn chưa nhập giới tính!');
                        else if ($scope.ngaysinh == '' || $scope.ngaysinh == null)
                            alert('Bạn chưa chọn ngày sinh!');
                        else if ($scope.email == '' || $scope.email == null)
                            alert('Bạn chưa nhập email!');
                        else if ($scope.sodienthoai == '' || $scope.sodienthoai == null)
                            alert('Bạn chưa nhập số điện thoại!');
                        else if ($scope.cmnd == '' || $scope.cmnd == null)
                            alert('Bạn chưa nhập chứng minh nhân dân!');
                        else if ($scope.diachi == '' || $scope.diachi == null)
                            alert('Bạn chưa nhập địa chỉ!');
                        else {
                            var mydate = new Date($scope.ngaysinh);
                            var date1 = mydate.getDate();
                            var month1 = mydate.getMonth() + 1;
                            var year1 = mydate.getFullYear();
                            $ngay = year1 + "-" + month1 + "-" + date1;
                            $http.get(API + 'update_khachhang/' + $scope.Id_nguoidung + '/' + $scope.hoten + '/' + $scope.gioitinh + '/' + $ngay + '/' + $scope.email + '/' + $scope.sodienthoai + '/' + $scope.cmnd + '/' + $scope.tenanh + '/' + $scope.diachi).then(function(response) {
                                alert('Cập nhật thành công');
                                $http.get(API + 'getkhachhangfirst/' + $scope.khachfrst.ID).then(function(response) {
                                    $scope.khachfrst = response.data;
                                });

                            });
                        }
                    };






                }

            });








        }
    });




});