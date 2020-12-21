var app = angular.module('main-App', ['ngRoute']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: 'Trang/test.html',
            controller: 'cntrl2'
        }).
        when('/products', {
            templateUrl: 'Trang/test1.html',
            controller: 'cntrl2'
        });
    }
]);

app.value('apiUrl', 'http://localhost:8080/Cinema/public');