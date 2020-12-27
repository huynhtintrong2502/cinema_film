var app = angular.module('my-app', []);

// app.config(['$routeProvider', function($routeProvider) {
//     $routeProvider.
//     when('/te', {
//         TemplateUrl: 'test.php',
//         controller: 'cntrl2'
//     }).
//     when('/test1', {
//         TemplateUrl: 'test1.php',
//         controller: 'cntrl2'
//     }).
//     otherwise({
//         redirectTo: '/'
//     });

// }]);


// app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
//     $routeProvider.when('/te', { TemplateUrl: 'test.html' });
//     $routeProvider.when('/te1', { TemplateUrl: 'test2.html' });
//     $routeProvider.otherwise({ redirectTo: '/' });

//     $locationProvider.html5Mode({ enable: true, requireBase: false });
// }]);

// // app.service('share', function() {
// //     this.hoten = "";
// //     this.setData = function(x) {
// //         this.hoten = x;
// //     }
// //     this.getData = function() {
// //         return this.hoten;
// //     }
// // });

// // app.service('share', function() {
// //     var hoten = "";
// //     return hoten;
// // });

// app.service('demoService', function($rootScope) {
//     this.TempData = "";

//     this.SetData = function(d) {
//         this.TempData = d;
//         $rootScope.$emit("dummyevent")
//     }

//     this.GetData = function() {
//         return this.TempData;
//     }
// });

// app.controller('cntrl2', function($scope, $rootScope, demoService) {
//     $scope.title = "controller 2";

//     $rootScope.$on("dummyevent", function() {
//         var t = demoService.GetData();
//         $scope.title2 = t;
//     });

// });

// app.controller('cntrl1', function($scope, $rootScope, $location, demoService) {
//     $scope.hoten = "controller 1";

//     $scope.SendData = function() {
//         var d = $scope.hoten;
//         demoService.SetData(d);
//         // $window.location.href = '/index.html'
//         $location.path("sign_in");
//         // $location.url('http://localhost:8080/Cinema/public/sign_in');
//     }
// });

// app.controller('SinhVienController', function($scope, $http, $rootScope) {
//     // $http.get('http://localhost:8080/www/QuanLySanGD/public/list').then(function(response) {
//     //     console.log(response);
//     // });
//     $scope.hoten = "sha123re";
//     $rootScope.hoten = "$scope.hoten";

// });

// app.controller('Sign_inController', function($scope, share, $rootScope) {
//     $scope.hoten = $rootScope.hoten;

// });


app.controller('IndexController', function($scope, $http) {
    $http.get('http://localhost:8080/Cinema/public/phimmoi').then(function(response) {
        //$scope.ListPhimMoi = response; 
        console.log(response);
    });

});