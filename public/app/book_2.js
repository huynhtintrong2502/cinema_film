var app = angular.module('book2-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



app.controller('Book2Controller', function($scope, $http, API, $rootScope, $location, $window) {

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
    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public';
    });
    // xử lý chức năng tìm kiếm
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

    //xử lý đặt ghế



    $scope.dis1 = "";
    $scope.dis2 = "";
    $scope.dis3 = "";
    $scope.dis4 = "";
    $scope.dis5 = "";
    $scope.dis6 = "";
    $scope.dis7 = "";
    $scope.dis8 = "";
    $scope.dis9 = "";
    $scope.dis10 = "";
    $scope.dis11 = "";
    $scope.dis12 = "";
    $scope.dis13 = "";
    $scope.dis14 = "";
    $scope.dis15 = "";
    $scope.dis16 = "";
    $scope.dis17 = "";
    $scope.dis18 = "";
    $scope.dis19 = "";
    $scope.dis20 = "";
    $scope.dis21 = "";
    $scope.dis22 = "";
    $scope.dis23 = "";
    $scope.dis24 = "";
    $scope.dis25 = "";
    $scope.dis26 = "";
    $scope.dis27 = "";
    $scope.dis28 = "";
    $scope.dis29 = "";
    $scope.dis30 = "";
    $scope.dis31 = "";
    $scope.dis32 = "";
    $scope.dis33 = "";
    $scope.dis34 = "";
    $scope.dis35 = "";
    $scope.dis36 = "";
    $scope.dis37 = "";
    $scope.dis38 = "";
    $scope.dis39 = "";
    $scope.dis40 = "";
    $scope.dis41 = "";
    $scope.dis42 = "";
    $scope.dis43 = "";
    $scope.dis44 = "";
    $scope.dis45 = "";
    $scope.dis46 = "";
    $scope.dis47 = "";
    $scope.dis48 = "";
    $scope.dis49 = "";
    $scope.dis50 = "";
    $scope.dis51 = "";
    $scope.dis52 = "";
    $scope.dis53 = "";
    $scope.dis54 = "";
    $scope.dis55 = "";
    $scope.dis56 = "";
    $scope.dis57 = "";
    $scope.dis58 = "";
    $scope.dis59 = "";
    $scope.dis60 = "";
    $scope.dis61 = "";
    $scope.dis62 = "";
    $scope.dis63 = "";
    $scope.dis64 = "";
    $scope.dis65 = "";
    $scope.dis66 = "";
    $scope.dis67 = "";
    $scope.dis68 = "";
    $scope.dis69 = "";
    $scope.dis70 = "";
    $scope.dis72 = "";
    $scope.dis73 = "";
    $scope.dis74 = "";
    $scope.dis75 = "";
    $scope.dis76 = "";
    $scope.dis77 = "";
    $scope.dis78 = "";
    $scope.dis79 = "";
    $scope.dis80 = "";
    $scope.dis81 = "";
    $scope.dis82 = "";
    $scope.dis83 = "";
    $scope.dis84 = "";
    $scope.dis85 = "";
    $scope.dis86 = "";
    $scope.dis87 = "";
    $scope.dis88 = "";
    $scope.dis89 = "";
    $scope.dis90 = "";
    $scope.dis90 = "";
    $scope.dis91 = "";
    $scope.dis92 = "";
    $scope.dis93 = "";
    $scope.dis94 = "";
    $scope.dis95 = "";
    $scope.dis96 = "";
    $scope.dis97 = "";
    $scope.dis98 = "";
    $scope.dis99 = "";
    $scope.dis100 = "";
    $scope.dis101 = "";
    $scope.dis102 = "";
    $scope.dis103 = "";
    $scope.dis104 = "";
    $scope.dis105 = "";
    $scope.dis106 = "";
    $scope.dis107 = "";
    $scope.dis108 = "";
    $scope.dis109 = "";
    $scope.dis110 = "";
    $scope.dis111 = "";
    $scope.dis112 = "";
    $scope.dis113 = "";
    $scope.dis114 = "";
    $scope.dis115 = "";
    $scope.dis116 = "";
    $scope.dis117 = "";
    $scope.dis118 = "";
    $scope.dis119 = "";
    $scope.dis120 = "";
    $scope.dis121 = "";
    $scope.dis122 = "";
    $scope.dis123 = "";
    $scope.dis124 = "";
    $scope.dis125 = "";
    $scope.dis126 = "";
    $scope.dis127 = "";
    $scope.dis128 = "";
    $scope.dis129 = "";
    $scope.dis130 = "";
    $scope.dis131 = "";
    $scope.dis132 = "";
    $scope.dis133 = "";
    $scope.dis134 = "";
    $scope.dis135 = "";
    $scope.dis136 = "";
    $scope.dis137 = "";
    $scope.dis138 = "";
    $scope.dis139 = "";
    $scope.dis140 = "";
    $scope.dis141 = "";
    $scope.dis142 = "";
    $scope.dis143 = "";
    $scope.dis144 = "";
    $scope.dis145 = "";
    $scope.dis146 = "";
    $scope.dis147 = "";
    $scope.dis148 = "";
    $scope.dis149 = "";
    $scope.dis150 = "";
    $scope.dis151 = "";
    $scope.dis152 = "";
    $scope.dis153 = "";
    $scope.dis154 = "";
    $scope.dis155 = "";
    $scope.dis156 = "";
    $scope.dis157 = "";
    $scope.dis158 = "";
    $scope.dis159 = "";
    $scope.dis160 = "";
    $scope.dis161 = "";
    $scope.dis162 = "";
    $scope.dis163 = "";
    $scope.dis164 = "";
    $scope.dis165 = "";
    $scope.dis166 = "";


    //đánh dấu


    $scope.dis1d = 0;
    $scope.dis2d = 0;
    $scope.dis3d = 0;
    $scope.dis4d = 0;
    $scope.dis5d = 0;
    $scope.dis6d = 0;
    $scope.dis7d = 0;
    $scope.dis8d = 0;
    $scope.dis9d = 0;
    $scope.dis10d = 0;
    $scope.dis11d = 0;
    $scope.dis12d = 0;
    $scope.dis13d = 0;
    $scope.dis14d = 0;
    $scope.dis15d = 0;
    $scope.dis16d = 0;
    $scope.dis17d = 0;
    $scope.dis18d = 0;
    $scope.dis19d = 0;
    $scope.dis20d = 0;
    $scope.dis21d = 0;
    $scope.dis22d = 0;
    $scope.dis23d = 0;
    $scope.dis24d = 0;
    $scope.dis25d = 0;
    $scope.dis26d = 0;
    $scope.dis27d = 0;
    $scope.dis28d = 0;
    $scope.dis29d = 0;
    $scope.dis30d = 0;
    $scope.dis31d = 0;
    $scope.dis32d = 0;
    $scope.dis33d = 0;
    $scope.dis34d = 0;
    $scope.dis35d = 0;
    $scope.dis36d = 0;
    $scope.dis37d = 0;
    $scope.dis38d = 0;
    $scope.dis39d = 0;
    $scope.dis40d = 0;
    $scope.dis41d = 0;
    $scope.dis42d = 0;
    $scope.dis43d = 0;
    $scope.dis44d = 0;
    $scope.dis45d = 0;
    $scope.dis46d = 0;
    $scope.dis47d = 0;
    $scope.dis48d = 0;
    $scope.dis49d = 0;
    $scope.dis50d = 0;
    $scope.dis51d = 0;
    $scope.dis52d = 0;
    $scope.dis53d = 0;
    $scope.dis54d = 0;
    $scope.dis55d = 0;
    $scope.dis56d = 0;
    $scope.dis57d = 0;
    $scope.dis58d = 0;
    $scope.dis59d = 0;
    $scope.dis60d = 0;
    $scope.dis61d = 0;
    $scope.dis62d = 0;
    $scope.dis63d = 0;
    $scope.dis64d = 0;
    $scope.dis65d = 0;
    $scope.dis66d = 0;
    $scope.dis67d = 0;
    $scope.dis68d = 0;
    $scope.dis69d = 0;
    $scope.dis70d = 0;
    $scope.dis72d = 0;
    $scope.dis73d = 0;
    $scope.dis74d = 0;
    $scope.dis75d = 0;
    $scope.dis76d = 0;
    $scope.dis77d = 0;
    $scope.dis78d = 0;
    $scope.dis79d = 0;
    $scope.dis80d = 0;
    $scope.dis81d = 0;
    $scope.dis82d = 0;
    $scope.dis83d = 0;
    $scope.dis84d = 0;
    $scope.dis85d = 0;
    $scope.dis86d = 0;
    $scope.dis87d = 0;
    $scope.dis88d = 0;
    $scope.dis89d = 0;
    $scope.dis90d = 0;
    $scope.dis90d = 0;
    $scope.dis91d = 0;
    $scope.dis92d = 0;
    $scope.dis93d = 0;
    $scope.dis94d = 0;
    $scope.dis95d = 0;
    $scope.dis96d = 0;
    $scope.dis97d = 0;
    $scope.dis98d = 0;
    $scope.dis99d = 0;
    $scope.dis100d = 0;
    $scope.dis101d = 0;
    $scope.dis102d = 0;
    $scope.dis103d = 0;
    $scope.dis104d = 0;
    $scope.dis105d = 0;
    $scope.dis106d = 0;
    $scope.dis107d = 0;
    $scope.dis108d = 0;
    $scope.dis109d = 0;
    $scope.dis110d = 0;
    $scope.dis111d = 0;
    $scope.dis112d = 0;
    $scope.dis113d = 0;
    $scope.dis114d = 0;
    $scope.dis115d = 0;
    $scope.dis116d = 0;
    $scope.dis117d = 0;
    $scope.dis118d = 0;
    $scope.dis119d = 0;
    $scope.dis120d = 0;
    $scope.dis121d = 0;
    $scope.dis122d = 0;
    $scope.dis123d = 0;
    $scope.dis124d = 0;
    $scope.dis125d = 0;
    $scope.dis126d = 0;
    $scope.dis127d = 0;
    $scope.dis128d = 0;
    $scope.dis129d = 0;
    $scope.dis130d = 0;
    $scope.dis131d = 0;
    $scope.dis132d = 0;
    $scope.dis133d = 0;
    $scope.dis134d = 0;
    $scope.dis135d = 0;
    $scope.dis136d = 0;
    $scope.dis137d = 0;
    $scope.dis138d = 0;
    $scope.dis139d = 0;
    $scope.dis140d = 0;
    $scope.dis141d = 0;
    $scope.dis142d = 0;
    $scope.dis143d = 0;
    $scope.dis144d = 0;
    $scope.dis145d = 0;
    $scope.dis146d = 0;
    $scope.dis147d = 0;
    $scope.dis148d = 0;
    $scope.dis149d = 0;
    $scope.dis150d = 0;
    $scope.dis151d = 0;
    $scope.dis152d = 0;
    $scope.dis153d = 0;
    $scope.dis154d = 0;
    $scope.dis155d = 0;
    $scope.dis156d = 0;
    $scope.dis157d = 0;
    $scope.dis158d = 0;
    $scope.dis159d = 0;
    $scope.dis160d = 0;
    $scope.dis161d = 0;
    $scope.dis162d = 0;
    $scope.dis163d = 0;
    $scope.dis164d = 0;
    $scope.dis165d = 0;
    $scope.dis166d = 0;

    $http.get(API + 'apive').then(function(response) {;
        $http.get(API + 'listve/' + response.data.MaPhim + '/' + response.data.NgayXem + '/' + response.data.MaSC).then(function(response) {
            $ve = response.data;
            if (response.data.count == 0)
                console.log("trống");
            else {
                for (let item of response.data) {
                    switch (item.MaGhe) {
                        case 1:
                            $scope.dis1 = "sits-state--not";
                            break;
                        case 2:
                            $scope.dis2 = "sits-state--not";
                            break;
                        case 3:
                            $scope.dis3 = "sits-state--not";
                            break;
                        case 4:
                            $scope.dis4 = "sits-state--not";
                            break;
                        case 5:
                            $scope.dis5 = "sits-state--not";
                            break;
                        case 6:
                            $scope.dis6 = "sits-state--not";
                            break;
                        case 7:
                            $scope.dis7 = "sits-state--not";
                            break;
                        case 8:
                            $scope.dis8 = "sits-state--not";
                            break;
                        case 9:
                            $scope.dis9 = "sits-state--not";
                            break;
                        case 10:
                            $scope.dis10 = "sits-state--not";
                            break;
                        case 11:
                            $scope.dis11 = "sits-state--not";
                            break;
                        case 12:
                            $scope.dis12 = "sits-state--not";
                            break;
                        case 13:
                            $scope.dis13 = "sits-state--not";
                            break;
                        case 14:
                            $scope.dis14 = "sits-state--not";
                            break;
                        case 15:
                            $scope.dis15 = "sits-state--not";
                            break;
                        case 16:
                            $scope.dis16 = "sits-state--not";
                            break;
                        case 17:
                            $scope.dis17 = "sits-state--not";
                            break;
                        case 18:
                            $scope.dis18 = "sits-state--not";
                            break;
                        case 19:
                            $scope.dis19 = "sits-state--not";
                            break;
                        case 20:
                            $scope.dis20 = "sits-state--not";
                            break;
                        case 21:
                            $scope.dis21 = "sits-state--not";
                            break;
                        case 22:
                            $scope.dis22 = "sits-state--not";
                            break;
                        case 23:
                            $scope.dis23 = "sits-state--not";
                            break;
                        case 24:
                            $scope.dis24 = "sits-state--not";
                            break;
                        case 25:
                            $scope.dis25 = "sits-state--not";
                            break;
                        case 26:
                            $scope.dis26 = "sits-state--not";
                            break;
                        case 27:
                            $scope.dis27 = "sits-state--not";
                            break;
                        case 28:
                            $scope.dis28 = "sits-state--not";
                            break;
                        case 29:
                            $scope.dis29 = "sits-state--not";
                            break;
                        case 30:
                            $scope.dis30 = "sits-state--not";
                            break;
                        case 31:
                            $scope.dis31 = "sits-state--not";
                            break;
                        case 32:
                            $scope.dis32 = "sits-state--not";
                            break;
                        case 33:
                            $scope.dis33 = "sits-state--not";
                            break;
                        case 34:
                            $scope.dis34 = "sits-state--not";
                            break;
                        case 35:
                            $scope.dis35 = "sits-state--not";
                            break;
                        case 36:
                            $scope.dis36 = "sits-state--not";
                            break;
                        case 37:
                            $scope.dis37 = "sits-state--not";
                            break;
                        case 38:
                            $scope.dis38 = "sits-state--not";
                            break;
                        case 39:
                            $scope.dis39 = "sits-state--not";
                            break;
                        case 40:
                            $scope.dis40 = "sits-state--not";
                            break;
                        case 41:
                            $scope.dis41 = "sits-state--not";
                            break;
                        case 42:
                            $scope.dis42 = "sits-state--not";
                            break;
                        case 43:
                            $scope.dis43 = "sits-state--not";
                            break;
                        case 44:
                            $scope.dis44 = "sits-state--not";
                            break;
                        case 45:
                            $scope.dis45 = "sits-state--not";
                            break;
                        case 46:
                            $scope.dis46 = "sits-state--not";
                            break;
                        case 47:
                            $scope.dis47 = "sits-state--not";
                            break;
                        case 48:
                            $scope.dis48 = "sits-state--not";
                            break;
                        case 49:
                            $scope.dis49 = "sits-state--not";
                            break;
                        case 50:
                            $scope.dis50 = "sits-state--not";
                            break;
                        case 51:
                            $scope.dis51 = "sits-state--not";
                            break;
                        case 52:
                            $scope.dis52 = "sits-state--not";
                            break;
                        case 53:
                            $scope.dis53 = "sits-state--not";
                            break;
                        case 54:
                            $scope.dis54 = "sits-state--not";
                            break;
                        case 55:
                            $scope.dis55 = "sits-state--not";
                            break;
                        case 56:
                            $scope.dis56 = "sits-state--not";
                            break;
                        case 57:
                            $scope.dis57 = "sits-state--not";
                            break;
                        case 58:
                            $scope.dis58 = "sits-state--not";
                            break;
                        case 59:
                            $scope.dis59 = "sits-state--not";
                            break;
                        case 60:
                            $scope.dis60 = "sits-state--not";
                            break;
                        case 61:
                            $scope.dis61 = "sits-state--not";
                            break;
                        case 62:
                            $scope.dis62 = "sits-state--not";
                            break;
                        case 63:
                            $scope.dis63 = "sits-state--not";
                            break;
                        case 64:
                            $scope.dis64 = "sits-state--not";
                            break;
                        case 65:
                            $scope.dis65 = "sits-state--not";
                            break;
                        case 66:
                            $scope.dis66 = "sits-state--not";
                            break;
                        case 67:
                            $scope.dis67 = "sits-state--not";
                            break;
                        case 68:
                            $scope.dis68 = "sits-state--not";
                            break;
                        case 69:
                            $scope.dis69 = "sits-state--not";
                            break;
                        case 70:
                            $scope.dis70 = "sits-state--not";
                            break;
                        case 71:
                            $scope.dis71 = "sits-state--not";
                            break;
                        case 72:
                            $scope.dis72 = "sits-state--not";
                            break;
                        case 73:
                            $scope.dis73 = "sits-state--not";
                            break;
                        case 74:
                            $scope.dis74 = "sits-state--not";
                            break;
                        case 75:
                            $scope.dis75 = "sits-state--not";
                            break;
                        case 76:
                            $scope.dis76 = "sits-state--not";
                            break;
                        case 77:
                            $scope.dis77 = "sits-state--not";
                            break;
                        case 78:
                            $scope.dis78 = "sits-state--not";
                            break;
                        case 79:
                            $scope.dis79 = "sits-state--not";
                            break;
                        case 80:
                            $scope.dis80 = "sits-state--not";
                            break;
                        case 81:
                            $scope.dis81 = "sits-state--not";
                            break;
                        case 82:
                            $scope.dis82 = "sits-state--not";
                            break;
                        case 83:
                            $scope.dis83 = "sits-state--not";
                            break;
                        case 84:
                            $scope.dis84 = "sits-state--not";
                            break;
                        case 85:
                            $scope.dis85 = "sits-state--not";
                            break;
                        case 86:
                            $scope.dis86 = "sits-state--not";
                            break;
                        case 87:
                            $scope.dis87 = "sits-state--not";
                            break;
                        case 88:
                            $scope.dis88 = "sits-state--not";
                            break;
                        case 89:
                            $scope.dis89 = "sits-state--not";
                            break;
                        case 90:
                            $scope.dis90 = "sits-state--not";
                            break;
                        case 91:
                            $scope.dis91 = "sits-state--not";
                            break;
                        case 92:
                            $scope.dis92 = "sits-state--not";
                            break;
                        case 93:
                            $scope.dis93 = "sits-state--not";
                            break;
                        case 94:
                            $scope.dis94 = "sits-state--not";
                            break;
                        case 95:
                            $scope.dis95 = "sits-state--not";
                            break;
                        case 96:
                            $scope.dis96 = "sits-state--not";
                            break;
                        case 97:
                            $scope.dis97 = "sits-state--not";
                            break;
                        case 98:
                            $scope.dis98 = "sits-state--not";
                            break;
                        case 99:
                            $scope.dis99 = "sits-state--not";
                            break;
                        case 100:
                            $scope.dis100 = "sits-state--not";
                            break;
                        case 101:
                            $scope.dis101 = "sits-state--not";
                            break;
                        case 102:
                            $scope.dis102 = "sits-state--not";
                            break;
                        case 103:
                            $scope.dis103 = "sits-state--not";
                            break;
                        case 104:
                            $scope.dis104 = "sits-state--not";
                            break;
                        case 105:
                            $scope.dis105 = "sits-state--not";
                            break;
                        case 106:
                            $scope.dis106 = "sits-state--not";
                            break;
                        case 107:
                            $scope.dis107 = "sits-state--not";
                            break;
                        case 108:
                            $scope.dis108 = "sits-state--not";
                            break;
                        case 109:
                            $scope.dis109 = "sits-state--not";
                            break;
                        case 110:
                            $scope.dis110 = "sits-state--not";
                            break;
                        case 111:
                            $scope.dis111 = "sits-state--not";
                            break;
                        case 112:
                            $scope.dis112 = "sits-state--not";
                            break;
                        case 113:
                            $scope.dis113 = "sits-state--not";
                            break;
                        case 114:
                            $scope.dis114 = "sits-state--not";
                            break;
                        case 115:
                            $scope.dis115 = "sits-state--not";
                            break;
                        case 116:
                            $scope.dis116 = "sits-state--not";
                            break;
                        case 117:
                            $scope.dis117 = "sits-state--not";
                            break;
                        case 118:
                            $scope.dis118 = "sits-state--not";
                            break;
                        case 119:
                            $scope.dis119 = "sits-state--not";
                            break;
                        case 120:
                            $scope.dis120 = "sits-state--not";
                            break;
                        case 121:
                            $scope.dis121 = "sits-state--not";
                            break;
                        case 122:
                            $scope.dis122 = "sits-state--not";
                            break;
                        case 123:
                            $scope.dis123 = "sits-state--not";
                            break;
                        case 124:
                            $scope.dis124 = "sits-state--not";
                            break;
                        case 125:
                            $scope.dis125 = "sits-state--not";
                            break;
                        case 126:
                            $scope.dis126 = "sits-state--not";
                            break;
                        case 127:
                            $scope.dis127 = "sits-state--not";
                            break;
                        case 128:
                            $scope.dis128 = "sits-state--not";
                            break;
                        case 129:
                            $scope.dis129 = "sits-state--not";
                            break;
                        case 130:
                            $scope.dis130 = "sits-state--not";
                            break;
                        case 131:
                            $scope.dis131 = "sits-state--not";
                            break;
                        case 132:
                            $scope.dis132 = "sits-state--not";
                            break;
                        case 133:
                            $scope.dis133 = "sits-state--not";
                            break;
                        case 134:
                            $scope.dis134 = "sits-state--not";
                            break;
                        case 135:
                            $scope.dis135 = "sits-state--not";
                            break;
                        case 136:
                            $scope.dis136 = "sits-state--not";
                            break;
                        case 137:
                            $scope.dis137 = "sits-state--not";
                            break;
                        case 138:
                            $scope.dis138 = "sits-state--not";
                            break;
                        case 139:
                            $scope.dis139 = "sits-state--not";
                            break;
                        case 140:
                            $scope.dis140 = "sits-state--not";
                            break;
                        case 141:
                            $scope.dis141 = "sits-state--not";
                            break;
                        case 142:
                            $scope.dis142 = "sits-state--not";
                            break;
                        case 143:
                            $scope.dis143 = "sits-state--not";
                            break;
                        case 144:
                            $scope.dis144 = "sits-state--not";
                            break;
                        case 145:
                            $scope.dis145 = "sits-state--not";
                            break;
                        case 146:
                            $scope.dis146 = "sits-state--not";
                            break;
                        case 147:
                            $scope.dis147 = "sits-state--not";
                            break;
                        case 148:
                            $scope.dis148 = "sits-state--not";
                            break;
                        case 149:
                            $scope.dis149 = "sits-state--not";
                            break;
                        case 150:
                            $scope.dis150 = "sits-state--not";
                            break;
                        case 151:
                            $scope.dis151 = "sits-state--not";
                            break;
                        case 152:
                            $scope.dis152 = "sits-state--not";
                            break;
                        case 153:
                            $scope.dis153 = "sits-state--not";
                            break;
                        case 154:
                            $scope.dis154 = "sits-state--not";
                            break;
                        case 155:
                            $scope.dis155 = "sits-state--not";
                            break;
                        case 156:
                            $scope.dis156 = "sits-state--not";
                            break;
                        case 157:
                            $scope.dis157 = "sits-state--not";
                            break;
                        case 158:
                            $scope.dis158 = "sits-state--not";
                            break;
                        case 159:
                            $scope.dis159 = "sits-state--not";
                            break;
                        case 160:
                            $scope.dis160 = "sits-state--not";
                            break;
                        case 161:
                            $scope.dis161 = "sits-state--not";
                            break;
                        case 162:
                            $scope.dis162 = "sits-state--not";
                            break;
                        case 163:
                            $scope.dis163 = "sits-state--not";
                            break;
                        case 164:
                            $scope.dis164 = "sits-state--not";
                            break;
                        case 165:
                            $scope.dis165 = "sits-state--not";
                            break;
                        case 166:
                            $scope.dis166 = "sits-state--not";
                            break;
                        default:
                    }
                }

            }
            console.log(response.data);
        });

    });



    $scope.danhdau_maghe = 0;

    $scope.kiemtra = function() {
        var t = $('#input_store_times_booking').val();
        if ($scope.danhdau_maghe == 1)
            $window.location.href = 'book_3';
        else
            alert("Bạn chưa chọn ghế!");
    };

    $scope.datghe = function(maghe, loaighe) {

        switch (maghe) {
            case 1:
                if ($scope.dis1 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis1d == 0) {
                        $scope.dis1d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis1d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 2:
                if ($scope.dis2 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis2d == 0) {
                        $scope.dis2d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis2d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 3:
                if ($scope.dis3 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis3d == 0) {
                        $scope.dis3d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis3d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 4:
                if ($scope.dis4 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis4d == 0) {
                        $scope.dis4d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis4d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 5:
                if ($scope.dis5 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis5d == 0) {
                        $scope.dis5d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis5d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 6:
                if ($scope.dis6 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis6d == 0) {
                        $scope.dis6d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis6d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 7:
                if ($scope.dis7 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis7d == 0) {
                        $scope.dis7d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis7d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 8:
                if ($scope.dis8 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis8d == 0) {
                        $scope.dis8d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis8d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 9:
                if ($scope.dis9 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis9d == 0) {
                        $scope.dis9d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis9d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 10:
                if ($scope.dis10 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis10d == 0) {
                        $scope.dis10d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis10d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 11:
                if ($scope.dis11 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis11d == 0) {
                        $scope.dis11d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis11d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 12:
                if ($scope.dis12 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis12d == 0) {
                        $scope.dis12d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis12d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 13:
                if ($scope.dis13 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis13d == 0) {
                        $scope.dis13d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis13d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 14:
                if ($scope.dis14 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis14d == 0) {
                        $scope.dis14d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis14d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 15:
                if ($scope.dis15 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis15d == 0) {
                        $scope.dis15d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis15d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 16:
                if ($scope.dis16 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis16d == 0) {
                        $scope.dis16d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis16d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 17:
                if ($scope.dis17 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis17d == 0) {
                        $scope.dis17d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis17d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 18:
                if ($scope.dis18 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis18d == 0) {
                        $scope.dis18d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis18d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 19:
                if ($scope.dis19 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis19d == 0) {
                        $scope.dis19d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis19d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 20:
                if ($scope.dis20 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis20d == 0) {
                        $scope.dis20d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis20d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 21:
                if ($scope.dis21 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis21d == 0) {
                        $scope.dis21d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis21d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 22:
                if ($scope.dis22 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis22d == 0) {
                        $scope.dis22d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis22d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 23:
                if ($scope.dis23 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis23d == 0) {
                        $scope.dis23d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis23d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 24:
                if ($scope.dis24 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis24d == 0) {
                        $scope.dis24d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis24d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 25:
                if ($scope.dis25 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis25d == 0) {
                        $scope.dis25d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis25d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 26:
                if ($scope.dis26 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis26d == 0) {
                        $scope.dis26d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis26d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 27:
                if ($scope.dis27 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis27d == 0) {
                        $scope.dis27d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis27d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 28:
                if ($scope.dis28 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis28d == 0) {
                        $scope.dis28d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis28d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 29:
                if ($scope.dis29 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis29d == 0) {
                        $scope.dis29d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis29d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 30:
                if ($scope.dis30 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis30d == 0) {
                        $scope.dis30d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis30d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 31:
                if ($scope.dis1 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis31d == 0) {
                        $scope.dis31d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis31d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 32:
                if ($scope.dis32 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis32d == 0) {
                        $scope.dis32d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis32d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 33:
                if ($scope.dis33 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis33d == 0) {
                        $scope.dis33d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis33d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 34:
                if ($scope.dis34 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis34d == 0) {
                        $scope.dis34d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis34d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 35:
                if ($scope.dis35 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis35d == 0) {
                        $scope.dis35d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis35d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 36:
                if ($scope.dis36 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis36d == 0) {
                        $scope.dis36d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis36d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 37:
                if ($scope.dis1 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis37d == 0) {
                        $scope.dis37d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis37d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 38:
                if ($scope.dis38 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis38d == 0) {
                        $scope.dis38d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis38d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 39:
                if ($scope.dis39 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis39d == 0) {
                        $scope.dis39d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis39d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 40:
                if ($scope.dis40 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis40d == 0) {
                        $scope.dis40d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis40d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 41:
                if ($scope.dis41 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis41d == 0) {
                        $scope.dis41d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis41d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 42:
                if ($scope.dis42 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis42d == 0) {
                        $scope.dis42d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis42d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 43:
                if ($scope.dis43 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis43d == 0) {
                        $scope.dis43d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis43d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 44:
                if ($scope.dis44 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis44d == 0) {
                        $scope.dis44d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis44d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 45:
                if ($scope.dis45 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis45d == 0) {
                        $scope.dis45d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis45d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 46:
                if ($scope.dis46 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis46d == 0) {
                        $scope.dis46d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis46d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 47:
                if ($scope.dis47 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis47d == 0) {
                        $scope.dis47d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis47d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 48:
                if ($scope.dis48 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis48d == 0) {
                        $scope.dis48d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis48d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 49:
                if ($scope.dis49 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis49d == 0) {
                        $scope.dis49d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis49d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 50:
                if ($scope.dis50 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis50d == 0) {
                        $scope.dis50d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis50d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 51:
                if ($scope.dis51 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis51d == 0) {
                        $scope.dis51d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis51d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 52:
                if ($scope.dis52 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis52d == 0) {
                        $scope.dis52d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis52d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 53:
                if ($scope.dis53 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis53d == 0) {
                        $scope.dis53d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis53d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 54:
                if ($scope.dis54 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis54d == 0) {
                        $scope.dis54d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis54d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 55:
                if ($scope.dis55 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis55d == 0) {
                        $scope.dis55d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis55d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 56:
                if ($scope.dis56 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis56d == 0) {
                        $scope.dis56d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis56d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 57:
                if ($scope.dis57 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis57d == 0) {
                        $scope.dis57d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis57d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 58:
                if ($scope.dis58 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis58d == 0) {
                        $scope.dis58d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis58d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 59:
                if ($scope.dis59 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis59d == 0) {
                        $scope.dis59d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis59d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 60:
                if ($scope.dis60 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis60d == 0) {
                        $scope.dis60d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis60d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 61:
                if ($scope.dis61 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis61d == 0) {
                        $scope.dis61d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis61d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 62:
                if ($scope.dis62 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis62d == 0) {
                        $scope.dis62d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis62d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 63:
                if ($scope.dis63 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis63d == 0) {
                        $scope.dis63d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis63d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 64:
                if ($scope.dis64 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis64d == 0) {
                        $scope.dis64d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis64d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 65:
                if ($scope.dis65 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis65d == 0) {
                        $scope.dis65d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis65d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 66:
                if ($scope.dis66 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis66d == 0) {
                        $scope.dis66d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis66d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 67:
                if ($scope.dis67 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis67d == 0) {
                        $scope.dis67d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis67d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 68:
                if ($scope.dis68 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis68d == 0) {
                        $scope.dis68d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis68d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 69:
                if ($scope.dis69 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis69d == 0) {
                        $scope.dis69d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis69d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 70:
                if ($scope.dis70 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis70d == 0) {
                        $scope.dis70d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis70d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 71:
                if ($scope.dis71 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis71d == 0) {
                        $scope.dis71d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis71d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 72:
                if ($scope.dis72 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis72d == 0) {
                        $scope.dis72d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis72d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 73:
                if ($scope.dis73 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis73d == 0) {
                        $scope.dis73d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis73d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 74:
                if ($scope.dis74 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis74d == 0) {
                        $scope.dis74d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis74d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 75:
                if ($scope.dis75 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis75d == 0) {
                        $scope.dis75d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis75d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 76:
                if ($scope.dis76 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis76d == 0) {
                        $scope.dis76d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis76d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 77:
                if ($scope.dis77 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis77d == 0) {
                        $scope.dis77d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis77d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 78:
                if ($scope.dis78 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis78d == 0) {
                        $scope.dis78d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis78d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 79:
                if ($scope.dis79 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis79d == 0) {
                        $scope.dis79d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis79d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 80:
                if ($scope.dis80 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis80d == 0) {
                        $scope.dis80d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis80d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 81:
                if ($scope.dis81 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis81d == 0) {
                        $scope.dis81d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis81d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 82:
                if ($scope.dis82 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis82d == 0) {
                        $scope.dis82d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis82d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 83:
                if ($scope.dis83 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis83d == 0) {
                        $scope.dis83d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis83d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 84:
                if ($scope.dis84 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis84d == 0) {
                        $scope.dis84d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis84d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 85:
                if ($scope.dis85 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis85d == 0) {
                        $scope.dis85d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis85d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 86:
                if ($scope.dis86 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis86d == 0) {
                        $scope.dis86d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis86d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 87:
                if ($scope.dis87 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis87d == 0) {
                        $scope.dis87d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis87d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 88:
                if ($scope.dis88 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis88d == 0) {
                        $scope.dis88d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis88d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 89:
                if ($scope.dis89 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis89d == 0) {
                        $scope.dis89d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis89d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 90:
                if ($scope.dis90 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis90d == 0) {
                        $scope.dis90d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis90d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 91:
                if ($scope.dis91 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis91d == 0) {
                        $scope.dis91d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis91d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 92:
                if ($scope.dis92 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis92d == 0) {
                        $scope.dis92d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis92d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 93:
                if ($scope.dis93 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis93d == 0) {
                        $scope.dis93d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis93d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 94:
                if ($scope.dis94 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis94d == 0) {
                        $scope.dis94d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis94d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 95:
                if ($scope.dis95 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis95d == 0) {
                        $scope.dis95d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis95d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 96:
                if ($scope.dis96 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis96d == 0) {
                        $scope.dis96d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis96d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 97:
                if ($scope.dis97 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis97d == 0) {
                        $scope.dis97d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis97d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 98:
                if ($scope.dis98 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis98d == 0) {
                        $scope.dis98d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis98d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 99:
                if ($scope.dis99 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis99d == 0) {
                        $scope.dis99d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis99d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 100:
                if ($scope.dis100 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis100d == 0) {
                        $scope.dis100d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis100d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 101:
                if ($scope.dis101 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis101d == 0) {
                        $scope.dis101d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis101d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 102:
                if ($scope.dis102 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis102d == 0) {
                        $scope.dis102d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis102d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 103:
                if ($scope.dis103 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis103d == 0) {
                        $scope.dis103d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis103d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 104:
                if ($scope.dis104 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis104d == 0) {
                        $scope.dis104d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis104d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 105:
                if ($scope.dis105 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis105d == 0) {
                        $scope.dis105d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis105d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 106:
                if ($scope.dis106 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis106d == 0) {
                        $scope.dis106d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis106d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 107:
                if ($scope.dis107 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis107d == 0) {
                        $scope.dis107d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis107d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 108:
                if ($scope.dis108 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis108d == 0) {
                        $scope.dis108d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis108d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 109:
                if ($scope.dis109 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis109d == 0) {
                        $scope.dis109d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis109d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 110:
                if ($scope.dis110 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis110d == 0) {
                        $scope.dis110d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis110d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 111:
                if ($scope.dis111 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis111d == 0) {
                        $scope.dis111d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis111d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 112:
                if ($scope.dis112 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis112d == 0) {
                        $scope.dis112d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis112d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 113:
                if ($scope.dis113 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis113d == 0) {
                        $scope.dis113d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis113d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 114:
                if ($scope.dis114 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis114d == 0) {
                        $scope.dis114d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis114d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 115:
                if ($scope.dis115 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis115d == 0) {
                        $scope.dis115d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis115d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 116:
                if ($scope.dis116 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis116d == 0) {
                        $scope.dis116d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis116d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 117:
                if ($scope.dis117 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis117d == 0) {
                        $scope.dis117d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis117d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 118:
                if ($scope.dis118 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis118d == 0) {
                        $scope.dis118d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis118d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 119:
                if ($scope.dis119 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis119d == 0) {
                        $scope.dis119d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis119d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 120:
                if ($scope.dis120 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis120d == 0) {
                        $scope.dis120d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis120d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 121:
                if ($scope.dis121 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis121d == 0) {
                        $scope.dis121d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis121d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 122:
                if ($scope.dis122 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis122d == 0) {
                        $scope.dis122d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis122d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 123:
                if ($scope.dis123 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis123d == 0) {
                        $scope.dis123d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis123d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 124:
                if ($scope.dis124 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis124d == 0) {
                        $scope.dis124d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis124d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 125:
                if ($scope.dis125 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis125d == 0) {
                        $scope.dis125d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis125d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 126:
                if ($scope.dis126 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis126d == 0) {
                        $scope.dis126d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis126d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 127:
                if ($scope.dis127 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis127d == 0) {
                        $scope.dis127d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis127d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 128:
                if ($scope.dis128 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis128d == 0) {
                        $scope.dis128d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis128d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 129:
                if ($scope.dis129 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis129d == 0) {
                        $scope.dis129d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis129d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 130:
                if ($scope.dis130 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis130d == 0) {
                        $scope.dis130d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis130d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 131:
                if ($scope.dis131 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis131d == 0) {
                        $scope.dis131d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis131d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 132:
                if ($scope.dis132 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis132d == 0) {
                        $scope.dis132d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis132d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 133:
                if ($scope.dis133 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis133d == 0) {
                        $scope.dis133d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis133d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 134:
                if ($scope.dis134 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis134d == 0) {
                        $scope.dis134d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis134d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 135:
                if ($scope.dis135 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis135d == 0) {
                        $scope.dis135d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis135d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 136:
                if ($scope.dis136 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis136d == 0) {
                        $scope.dis136d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis136d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 137:
                if ($scope.dis137 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis137d == 0) {
                        $scope.dis137d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis137d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 138:
                if ($scope.dis138 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis138d == 0) {
                        $scope.dis138d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis138d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 139:
                if ($scope.dis139 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis139d == 0) {
                        $scope.dis139d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis139d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 140:
                if ($scope.dis140 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis140d == 0) {
                        $scope.dis140d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis140d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 141:
                if ($scope.dis141 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis141d == 0) {
                        $scope.dis141d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis141d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 142:
                if ($scope.dis142 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis142d == 0) {
                        $scope.dis142d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis142d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 143:
                if ($scope.dis143 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis143d == 0) {
                        $scope.dis143d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis143d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 144:
                if ($scope.dis144 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis144d == 0) {
                        $scope.dis144d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis144d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 145:
                if ($scope.dis145 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis145d == 0) {
                        $scope.dis145d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis145d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 146:
                if ($scope.dis146 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis146d == 0) {
                        $scope.dis146d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis146d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 147:
                if ($scope.dis147 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis147d == 0) {
                        $scope.dis147d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis147d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 148:
                if ($scope.dis148 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis148d == 0) {
                        $scope.dis148d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis148d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 149:
                if ($scope.dis149 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis149d == 0) {
                        $scope.dis149d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis149d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 150:
                if ($scope.dis150 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis150d == 0) {
                        $scope.dis150d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis150d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 151:
                if ($scope.dis151 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis151d == 0) {
                        $scope.dis151d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis151d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 152:
                if ($scope.dis152 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis152d == 0) {
                        $scope.dis152d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis152d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 153:
                if ($scope.dis153 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis153d == 0) {
                        $scope.dis153d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis153d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 154:
                if ($scope.dis154 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis154d == 0) {
                        $scope.dis154d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis154d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 155:
                if ($scope.dis155 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis155d == 0) {
                        $scope.dis155d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis155d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 156:
                if ($scope.dis156 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis156d == 0) {
                        $scope.dis156d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis156d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 157:
                if ($scope.dis157 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis157d == 0) {
                        $scope.dis157d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis157d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 158:
                if ($scope.dis158 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis158d == 0) {
                        $scope.dis158d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis158d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 159:
                if ($scope.dis159 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis159d == 0) {
                        $scope.dis159d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis159d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 160:
                if ($scope.dis160 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis160d == 0) {
                        $scope.dis160d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis160d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 161:
                if ($scope.dis161 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis161d == 0) {
                        $scope.dis161d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis161d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 162:
                if ($scope.dis162 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis162d == 0) {
                        $scope.dis162d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis162d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 163:
                if ($scope.dis163 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis163d == 0) {
                        $scope.dis163d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis163d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 164:
                if ($scope.dis164 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis164d == 0) {
                        $scope.dis164d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis164d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 165:
                if ($scope.dis165 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis165d == 0) {
                        $scope.dis165d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis165d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            case 166:
                if ($scope.dis165 == "sits-state--not")
                    alert("Xin lỗi, ghế đã có người đặt");
                else {
                    if ($scope.dis165d == 0) {
                        $scope.dis165d = 1;
                        $http.get(API + 'luumaghe/' + 1).then(function(response) {
                            $scope.danhdau_maghe = 1;
                        });
                    } else {
                        $scope.dis165d = 0;
                        $http.get(API + 'luumaghe/' + 0).then(function(response) {
                            $scope.danhdau_maghe = 0;
                        });
                    }
                }
                break;
            default:

        }
    };

});