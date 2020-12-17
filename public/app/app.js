var app = angular.module('my-app', []);

app.controller('SinhVienController', function($scope, $http) {
    $http.get('http://localhost:8080/www/QuanLySanGD/public/list').then(function(response) {
        console.log(response);
    });
    $scope.hoten = "Huynh tin trong";
});