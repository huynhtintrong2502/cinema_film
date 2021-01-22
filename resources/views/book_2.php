<!doctype html>
<html ng-app="book2-app">
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - Booking step 2</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('app/book_2.js') ; ?>"></script>
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo asset('template/css/gozha-nav.css');?>" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo asset('template/css/external/jquery.selectbox.css');?>" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="<?php echo asset('template/css/style.css?v=1');?>" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="<?php echo asset('template/js/external/modernizr.custom.js');?>"></script>
    
    
</head>
 
<body ng-controller="Book2Controller">
    <div class="wrapper place-wrapper">
        <!-- Banner -->


        <!-- Header section -->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href='/Cinema/public' class="logo">
                    <img alt='logo' src="<?php echo asset('template/images/logo.png');?>">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Pages</a>
                            <ul>
                                <li class="menu__nav-item"><a href="movie-page-left.html">Single movie (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-page-right.html">Single movie (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-page-full.html">Single movie (full widht)</a></li>
                                <li class="menu__nav-item"><a href="movie-list-left.html">Movies list (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-list-right.html">Movies list (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-list-full.html">Movies list (full widht)</a></li>
                                <li class="menu__nav-item"><a href="single-cinema.html">Single cinema</a></li>
                                <li class="menu__nav-item"><a href="cinema-list.html">Cinemas list</a></li>
                                <li class="menu__nav-item"><a href="trailer.html">Trailers</a></li>
                                <li class="menu__nav-item"><a href="rates-left.html">Rates (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="rates-right.html">Rates (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="rates-full.html">Rates (full widht)</a></li>
                                <li class="menu__nav-item"><a href="offers.html">Offers</a></li>
                                <li class="menu__nav-item"><a href="contact.html">Contact us</a></li>
                                <li class="menu__nav-item"><a href="404.html">404 error</a></li>
                                <li class="menu__nav-item"><a href="coming-soon.html">Coming soon</a></li>
                                <li class="menu__nav-item"><a href="login.html">Login/Registration</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">Features</a>
                            <ul>
                                <li class="menu__nav-item"><a href="typography.html">Typography</a></li>
                                <li class="menu__nav-item"><a href="page-elements.html">Shortcodes</a></li>
                                <li class="menu__nav-item"><a href="column.html">Columns</a></li>
                                <li class="menu__nav-item"><a href="icon-font.html">Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">Booking steps</a>
                            <ul>
                                <li class="menu__nav-item"><a href="book1.html">Booking step 1</a></li>
                                <li class="menu__nav-item"><a href="book2.html">Booking step 2</a></li>
                                <li class="menu__nav-item"><a href="book3-buy.html">Booking step 3 (buy)</a></li>
                                <li class="menu__nav-item"><a href="book3-reserve.html">Booking step 3 (reserve)</a></li>
                                <li class="menu__nav-item"><a href="book-final.html">Final ticket view</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="gallery-four.html">Gallery</a>
                            <ul>
                                <li class="menu__nav-item"><a href="gallery-four.html">4 col gallery</a></li>
                                <li class="menu__nav-item"><a href="gallery-three.html">3 col gallery</a></li>
                                <li class="menu__nav-item"><a href="gallery-two.html">2 col gallery</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="news-left.html">News</a>
                            <ul>
                                <li class="menu__nav-item"><a href="news-left.html">News (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="news-right.html">News (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="news-full.html">News (full widht)</a></li>
                                <li class="menu__nav-item"><a href="single-page-left.html">Single post (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="single-page-right.html">Single post (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="single-page-full.html">Single post (full widht)</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Mega menu</a>
                               <ul class="mega-menu container">
                                    <li class="col-md-3 mega-menu__coloum">
                                        <h4 class="mega-menu__heading">Now in the cinema</h4>
                                         <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">The Counselor</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Bad Grandpa</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Blue Is the Warmest Color</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Capital</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Spinning Plates</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Bastards</a></li>
                                          </ul>
                                      </li>
                                        
                                      <li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">
                                          <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">Gravity</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Captain Phillips</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Carrie</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Cloudy with a Chance of Meatballs 2</a></li>
                                          </ul>
                                      </li>
                                      
                                      <li class="col-md-3 mega-menu__coloum">
                                        <h4 class="mega-menu__heading">Ending soon</h4>
                                          <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">Escape Plan</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Rush</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Prisoners</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Enough Said</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">The Fifth Estate</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Runner Runner</a></li>
                                          </ul>
                                      </li>
                                    
                                      <li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">
                                          <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">Insidious: Chapter 2</a></li>
                                          </ul>
                                      </li>
                               </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          <img alt="" style="border-radius:50%" src="<?php echo asset('template/img_user/img_khachhang/{{Anh_user}}') ; ?>">
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                          {{Ten_user}}
                      </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item" ng-if="(Maus == 0)">Sign in</a></li>
                            <li><a href="#" ng-if="(Maus == 0)" class="auth__function-item">Sign up</a></li>
                            <li><a href="#" ng-if="(Maus != 0)" class="auth__function-item">Settings</a></li>
                            <li><a href="#" ng-if="(Maus != 0)" ng-click="DangXuat()" class="auth__function-item">Log out</a></li>
                        </ul>

                    </div>
                    <a href="#" ng-click="next_dat_ve()" class="btn btn-md btn--warning btn--book btn-control--home " >Book a ticket</a>
                </div>

            </div>
        </header>
        
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" ng-model="search_text" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>Tên phim</option>
                        <option value="2">Đạo diễn</option>
                        <option value="3">Quốc gia</option>
                        <option value="4">thể loại</option>
                        <option value="5">Năm Sản xuất</option>
                    </select>
                    <button type='submit' ng-click="timkiem()" class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="<?php echo asset('template/images/tickets.png');?>">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Choose a sit</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Price</strong></li>
                        <li class="sits-price sits-price--cheap">$10</li>
                        <li class="sits-price sits-price--middle">$20</li>
                        <li class="sits-price sits-price--expensive">$30</li>
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <div class="sits-anchor">screen</div>

                    <div class="sits">
                        <aside class="sits__line">
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">I</span>
                            <span class="sits__indecator additional-margin">J</span>
                            <span class="sits__indecator">K</span>
                            <span class="sits__indecator">L</span>
                        </aside>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap {{dis1}}" ng-click="datghe(1,1)" data-place='A2' data-price='10'>A2</span>
                                <span class="sits__place sits-price--cheap {{dis2}}" ng-click="datghe(2,1)" data-place='A3' data-price='10'>A3</span>
                                <span class="sits__place sits-price--cheap {{dis3}}" ng-click="datghe(3,1)" data-place='A4' data-price='10'>A4</span>
                                <span class="sits__place sits-price--cheap {{dis4}}" ng-click="datghe(4,1)" data-place='A5' data-price='10'>A5</span>
                                <span class="sits__place sits-price--cheap {{dis5}}" ng-click="datghe(5,1)" data-place='A6' data-price='10'>A6</span>
                                <span class="sits__place sits-price--cheap {{dis6}}" ng-click="datghe(6,1)" data-place='A7' data-price='10'>A7</span>
                                <span class="sits__place sits-price--cheap {{dis7}}" ng-click="datghe(7,1)" data-place='A8' data-price='10'>A8</span>
                                <span class="sits__place sits-price--cheap {{dis8}}" ng-click="datghe(8,1)" data-place='A9' data-price='10'>A9</span>
                                <span class="sits__place sits-price--cheap {{dis9}}" ng-click="datghe(9,1)" data-place='A10' data-price='10'>A10</span>
                                <span class="sits__place sits-price--cheap {{dis10}}" ng-click="datghe(10,1)" data-place='A11' data-price='10'>A11</span>
                                <span class="sits__place sits-price--cheap {{dis11}}" ng-click="datghe(11,1)" data-place='A12' data-price='10'>A12</span>
                                <span class="sits__place sits-price--cheap {{dis12}}" ng-click="datghe(12,1)" data-place='A13' data-price='10'>A13</span>
                                <span class="sits__place sits-price--cheap {{dis13}}" ng-click="datghe(13,1)" data-place='A14' data-price='10'>A14</span>
                                <span class="sits__place sits-price--cheap {{dis14}}" ng-click="datghe(14,1)" data-place='A15' data-price='10'>A15</span>
                                <span class="sits__place sits-price--cheap {{dis15}}" ng-click="datghe(15,1)" data-place='A16' data-price='10'>A16</span>
                                <span class="sits__place sits-price--cheap {{dis16}}" ng-click="datghe(16,1)" data-place='A17' data-price='10'>A17</span>
                            </div>
                            
                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap {{dis17}}" ng-click="datghe(17,1)" data-place='B1' data-price='10'>B1</span>
                                <span class="sits__place sits-price--cheap {{dis18}}" ng-click="datghe(18,1)" data-place='B2' data-price='10'>B2</span>
                                <span class="sits__place sits-price--cheap {{dis19}}" ng-click="datghe(19,1)" data-place='B3' data-price='10'>B3</span>
                                <span class="sits__place sits-price--cheap {{dis20}}" ng-click="datghe(20,1)" data-place='B4' data-price='10'>B4</span>
                                <span class="sits__place sits-price--cheap {{dis21}}" ng-click="datghe(21,1)" data-place='B5' data-price='10'>B5</span>
                                <span class="sits__place sits-price--cheap {{dis22}}" ng-click="datghe(22,1)" data-place='B6' data-price='10'>B6</span>
                                <span class="sits__place sits-price--cheap {{dis23}}" ng-click="datghe(23,1)" data-place='B7' data-price='10'>B7</span>
                                <span class="sits__place sits-price--cheap {{dis24}}" ng-click="datghe(24,1)" data-place='B8' data-price='10'>B8</span>
                                <span class="sits__place sits-price--cheap {{dis25}}" ng-click="datghe(25,1)" data-place='B9' data-price='10'>B9</span>
                                <span class="sits__place sits-price--cheap {{dis26}}" ng-click="datghe(26,1)" data-place='B10' data-price='10'>B10</span>
                                <span class="sits__place sits-price--cheap {{dis27}}" ng-click="datghe(27,1)" data-place='B11' data-price='10'>B11</span>
                                <span class="sits__place sits-price--cheap {{dis28}}" ng-click="datghe(28,1)" data-place='B12' data-price='10'>B12</span>
                                <span class="sits__place sits-price--cheap {{dis29}}" ng-click="datghe(29,1)" data-place='B13' data-price='10'>B13</span>
                                <span class="sits__place sits-price--cheap {{dis30}}" ng-click="datghe(30,1)" data-place='B14' data-price='10'>B14</span>
                                <span class="sits__place sits-price--cheap {{dis31}}" ng-click="datghe(31,1)" data-place='B15' data-price='10'>B15</span>
                                <span class="sits__place sits-price--cheap {{dis32}}" ng-click="datghe(32,1)" data-place='B16' data-price='10'>B16</span>
                                <span class="sits__place sits-price--cheap {{dis33}}" ng-click="datghe(33,1)" data-place='B17' data-price='10'>B17</span>
                                <span class="sits__place sits-price--cheap {{dis34}}" ng-click="datghe(34,1)" data-place='B18' data-price='10'>B18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap {{dis35}}" ng-click="datghe(35,1)" data-place='C1' data-price='10'>C1</span>
                                <span class="sits__place sits-price--cheap {{dis36}}" ng-click="datghe(36,1)" data-place='C2' data-price='10'>C2</span>
                                <span class="sits__place sits-price--cheap {{dis37}}" ng-click="datghe(37,1)" data-place='C3' data-price='10'>C3</span>
                                <span class="sits__place sits-price--cheap {{dis38}}" ng-click="datghe(38,1)" data-place='C4' data-price='10'>C4</span>
                                <span class="sits__place sits-price--cheap {{dis39}}" ng-click="datghe(39,1)" data-place='C5' data-price='10'>C5</span>
                                <span class="sits__place sits-price--cheap {{dis40}}" ng-click="datghe(40,1)" data-place='C6' data-price='10'>C6</span>
                                <span class="sits__place sits-price--cheap {{dis41}}" ng-click="datghe(41,1)" data-place='C7' data-price='10'>C7</span>
                                <span class="sits__place sits-price--cheap {{dis42}}" ng-click="datghe(42,1)" data-place='C8' data-price='10'>C8</span>
                                <span class="sits__place sits-price--cheap {{dis43}}" ng-click="datghe(43,1)" data-place='C9' data-price='10'>C9</span>
                                <span class="sits__place sits-price--cheap {{dis44}}" ng-click="datghe(44,1)" data-place='C10' data-price='10'>C10</span>
                                <span class="sits__place sits-price--cheap {{dis45}}" ng-click="datghe(45,1)" data-place='C11' data-price='10'>C11</span>
                                <span class="sits__place sits-price--cheap {{dis46}}" ng-click="datghe(46,1)" data-place='C12' data-price='10'>C12</span>
                                <span class="sits__place sits-price--cheap {{dis47}}" ng-click="datghe(47,1)" data-place='C13' data-price='10'>C13</span>
                                <span class="sits__place sits-price--cheap {{dis48}}" ng-click="datghe(48,1)" data-place='C14' data-price='10'>C14</span>
                                <span class="sits__place sits-price--cheap {{dis49}}" ng-click="datghe(49,1)" data-place='C15' data-price='10'>C15</span>
                                <span class="sits__place sits-price--cheap {{dis50}}" ng-click="datghe(50,1)" data-place='C16' data-price='10'>C16</span>
                                <span class="sits__place sits-price--cheap {{dis51}}" ng-click="datghe(51,1)" data-place='C17' data-price='10'>C17</span>
                                <span class="sits__place sits-price--cheap {{dis52}}" ng-click="datghe(52,1)" data-place='C18' data-price='10'>C18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap {{dis53}}" ng-click="datghe(53,1)" data-place='D1' data-price='10'>D1</span>
                                <span class="sits__place sits-price--cheap {{dis54}}" ng-click="datghe(54,1)" data-place='D2' data-price='10'>D2</span>
                                <span class="sits__place sits-price--cheap {{dis55}}" ng-click="datghe(55,1)" data-place='D3' data-price='10'>D3</span>
                                <span class="sits__place sits-price--cheap {{dis56}}" ng-click="datghe(56,1)" data-place='D4' data-price='10'>D4</span>
                                <span class="sits__place sits-price--cheap {{dis57}}" ng-click="datghe(57,1)" data-place='D5' data-price='10'>D5</span>
                                <span class="sits__place sits-price--cheap {{dis58}}" ng-click="datghe(58,1)" data-place='D6' data-price='10'>D6</span>
                                <span class="sits__place sits-price--cheap {{dis59}}" ng-click="datghe(59,1)" data-place='D7' data-price='10'>D7</span>
                                <span class="sits__place sits-price--cheap {{dis60}}" ng-click="datghe(60,1)" data-place='D8' data-price='10'>D8</span>
                                <span class="sits__place sits-price--cheap {{dis61}}" ng-click="datghe(61,1)" data-place='D9' data-price='10'>D9</span>
                                <span class="sits__place sits-price--cheap {{dis62}}" ng-click="datghe(62,1)" data-place='D10' data-price='10'>D10</span>
                                <span class="sits__place sits-price--cheap {{dis63}}" ng-click="datghe(63,1)" data-place='D11' data-price='10'>D11</span>
                                <span class="sits__place sits-price--cheap {{dis64}}" ng-click="datghe(64,1)" data-place='D12' data-price='10'>D12</span>
                                <span class="sits__place sits-price--cheap {{dis65}}" ng-click="datghe(65,1)" data-place='D13' data-price='10'>D13</span>
                                <span class="sits__place sits-price--cheap {{dis66}}" ng-click="datghe(66,1)" data-place='D14' data-price='10'>D14</span>
                                <span class="sits__place sits-price--cheap {{dis67}}" ng-click="datghe(67,1)" data-place='D15' data-price='10'>D15</span>
                                <span class="sits__place sits-price--cheap {{dis68}}" ng-click="datghe(68,1)" data-place='D16' data-price='10'>D16</span>
                                <span class="sits__place sits-price--cheap {{dis69}}" ng-click="datghe(69,1)" data-place='D17' data-price='10'>D17</span>
                                <span class="sits__place sits-price--cheap {{dis70}}" ng-click="datghe(70,1)" data-place='D18' data-price='10'>D18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle {{dis71}}" ng-click="datghe(71,2)" data-place='E1' data-price='20'>E1</span>
                                <span class="sits__place sits-price--middle {{dis72}}" ng-click="datghe(72,2)" data-place='E2' data-price='20'>E2</span>
                                <span class="sits__place sits-price--middle {{dis73}}" ng-click="datghe(73,2)" data-place='E3' data-price='20'>E3</span>
                                <span class="sits__place sits-price--middle {{dis74}}" ng-click="datghe(74,2)" data-place='E4' data-price='20'>E4</span>
                                <span class="sits__place sits-price--middle {{dis75}}" ng-click="datghe(75,2)" data-place='E5' data-price='20'>E5</span>
                                <span class="sits__place sits-price--middle {{dis76}}" ng-click="datghe(76,2)" data-place='E6' data-price='20'>E6</span>
                                <span class="sits__place sits-price--middle {{dis77}}" ng-click="datghe(77,2)" data-place='E7' data-price='20'>E7</span>
                                <span class="sits__place sits-price--middle {{dis78}}" ng-click="datghe(78,2)" data-place='E8' data-price='20'>E8</span>
                                <span class="sits__place sits-price--middle {{dis79}}" ng-click="datghe(79,2)" data-place='E9' data-price='20'>E9</span>
                                <span class="sits__place sits-price--middle {{dis80}}" ng-click="datghe(80,2)" data-place='E10' data-price='20'>E10</span>
                                <span class="sits__place sits-price--middle {{dis81}}" ng-click="datghe(81,2)" data-place='E11' data-price='20'>E11</span>
                                <span class="sits__place sits-price--middle {{dis82}}" ng-click="datghe(82,2)" data-place='E12' data-price='20'>E12</span>
                                <span class="sits__place sits-price--middle {{dis83}}" ng-click="datghe(83,2)" data-place='E13' data-price='20'>E13</span>
                                <span class="sits__place sits-price--middle {{dis84}}" ng-click="datghe(84,2)" data-place='E14' data-price='20'>E14</span>
                                <span class="sits__place sits-price--middle {{dis85}}" ng-click="datghe(85,2)" data-place='E15' data-price='20'>E15</span>
                                <span class="sits__place sits-price--middle {{dis86}}" ng-click="datghe(86,2)" data-place='E16' data-price='20'>E16</span>
                                <span class="sits__place sits-price--middle {{dis87}}" ng-click="datghe(87,2)" data-place='E17' data-price='20'>E17</span>
                                <span class="sits__place sits-price--middle {{dis88}}" ng-click="datghe(88,2)" data-place='E18' data-price='20'>E18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle {{dis89}}" ng-click="datghe(89,2)" data-place='F1' data-price='20'>F1</span>
                                <span class="sits__place sits-price--middle {{dis90}}" ng-click="datghe(90,2)" data-place='F2' data-price='20'>F2</span>
                                <span class="sits__place sits-price--middle {{dis91}}" ng-click="datghe(91,2)" data-place='F3' data-price='20'>F3</span>
                                <span class="sits__place sits-price--middle {{dis92}}" ng-click="datghe(92,2)" data-place='F4' data-price='20'>F4</span>
                                <span class="sits__place sits-price--middle {{dis93}}" ng-click="datghe(93,2)" data-place='F5' data-price='20'>F5</span>
                                <span class="sits__place sits-price--middle {{dis94}}" ng-click="datghe(94,2)" data-place='F6' data-price='20'>F6</span>
                                <span class="sits__place sits-price--middle {{dis95}}" ng-click="datghe(95,2)" data-place='F7' data-price='20'>F7</span>
                                <span class="sits__place sits-price--middle {{dis96}}" ng-click="datghe(96,2)" data-place='F8' data-price='20'>F8</span>
                                <span class="sits__place sits-price--middle {{dis97}}" ng-click="datghe(97,2)" data-place='F9' data-price='20'>F9</span>
                                <span class="sits__place sits-price--middle {{dis98}}" ng-click="datghe(98,2)" data-place='F10' data-price='20'>F10</span>
                                <span class="sits__place sits-price--middle {{dis99}}" ng-click="datghe(99,2)" data-place='F11' data-price='20'>F11</span>
                                <span class="sits__place sits-price--middle {{dis100}}" ng-click="datghe(100,2)" data-place='F12' data-price='20'>F12</span>
                                <span class="sits__place sits-price--middle {{dis101}}" ng-click="datghe(101,2)" data-place='F13' data-price='20'>F13</span>
                                <span class="sits__place sits-price--middle {{dis102}}" ng-click="datghe(102,2)" data-place='F14' data-price='20'>F14</span>
                                <span class="sits__place sits-price--middle {{dis103}}" ng-click="datghe(103,2)" data-place='F15' data-price='20'>F15</span>
                                <span class="sits__place sits-price--middle {{dis104}}" ng-click="datghe(104,2)" data-place='F16' data-price='20'>F16</span>
                                <span class="sits__place sits-price--middle {{dis105}}" ng-click="datghe(105,2)" data-place='F17' data-price='20'>F17</span>
                                <span class="sits__place sits-price--middle {{dis106}}" ng-click="datghe(106,2)" data-place='F18' data-price='20'>F18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle {{dis107}}" ng-click="datghe(107,2)" data-place='G1' data-price='20'>G1</span>
                                <span class="sits__place sits-price--middle {{dis108}}" ng-click="datghe(108,2)" data-place='G2' data-price='20'>G2</span>
                                <span class="sits__place sits-price--middle {{dis109}}" ng-click="datghe(109,2)" data-place='G3' data-price='20'>G3</span>
                                <span class="sits__place sits-price--middle {{dis110}}" ng-click="datghe(110,2)" data-place='G4' data-price='20'>G4</span>
                                <span class="sits__place sits-price--middle {{dis111}}" ng-click="datghe(111,2)" data-place='G5' data-price='20'>G5</span>
                                <span class="sits__place sits-price--middle {{dis112}}" ng-click="datghe(112,2)" data-place='G6' data-price='20'>G6</span>
                                <span class="sits__place sits-price--middle {{dis113}}" ng-click="datghe(113,2)" data-place='G7' data-price='20'>G7</span>
                                <span class="sits__place sits-price--middle {{dis114}}" ng-click="datghe(114,2)" data-place='G8' data-price='20'>G8</span>
                                <span class="sits__place sits-price--middle {{dis115}}" ng-click="datghe(115,2)" data-place='G9' data-price='20'>G9</span>
                                <span class="sits__place sits-price--middle {{dis116}}" ng-click="datghe(116,2)" data-place='G10' data-price='20'>G10</span>
                                <span class="sits__place sits-price--middle {{dis117}}" ng-click="datghe(117,2)" data-place='G11' data-price='20'>G11</span>
                                <span class="sits__place sits-price--middle {{dis118}}" ng-click="datghe(118,2)" data-place='G12' data-price='20'>G12</span>
                                <span class="sits__place sits-price--middle {{dis119}}" ng-click="datghe(119,2)" data-place='G13' data-price='20'>G13</span>
                                <span class="sits__place sits-price--middle {{dis120}}" ng-click="datghe(120,2)" data-place='G14' data-price='20'>G14</span>
                                <span class="sits__place sits-price--middle {{dis121}}" ng-click="datghe(121,2)" data-place='G15' data-price='20'>G15</span>
                                <span class="sits__place sits-price--middle {{dis122}}" ng-click="datghe(122,2)" data-place='G16' data-price='20'>G16</span>
                                <span class="sits__place sits-price--middle {{dis123}}" ng-click="datghe(123,2)" data-place='G17' data-price='20'>G17</span>
                                <span class="sits__place sits-price--middle {{dis124}}" ng-click="datghe(124,2)" data-place='G18' data-price='20'>G18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle {{dis125}}" ng-click="datghe(125,2)" data-place='I3' data-price='20'>I3</span>
                                <span class="sits__place sits-price--middle {{dis126}}" ng-click="datghe(126,2)" data-place='I4' data-price='20'>I4</span>
                                <span class="sits__place sits-price--middle {{dis127}}" ng-click="datghe(127,2)" data-place='I5' data-price='20'>I5</span>
                                <span class="sits__place sits-price--middle {{dis128}}" ng-click="datghe(128,2)" data-place='I6' data-price='20'>I6</span>
                                <span class="sits__place sits-price--middle {{dis129}}" ng-click="datghe(129,2)" data-place='I7' data-price='20'>I7</span>
                                <span class="sits__place sits-price--middle {{dis130}}" ng-click="datghe(130,2)" data-place='I8' data-price='20'>I8</span>
                                <span class="sits__place sits-price--middle {{dis131}}" ng-click="datghe(131,2)" data-place='I9' data-price='20'>I9</span>
                                <span class="sits__place sits-price--middle {{dis132}}" ng-click="datghe(132,2)" data-place='I10' data-price='20'>I10</span>
                                <span class="sits__place sits-price--middle {{dis133}}" ng-click="datghe(133,2)" data-place='I11' data-price='20'>I11</span>
                                <span class="sits__place sits-price--middle {{dis134}}" ng-click="datghe(134,2)" data-place='I12' data-price='20'>I12</span>
                                <span class="sits__place sits-price--middle {{dis135}}" ng-click="datghe(135,2)" data-place='I13' data-price='20'>I13</span>
                                <span class="sits__place sits-price--middle {{dis136}}" ng-click="datghe(136,2)" data-place='I14' data-price='20'>I14</span>
                                <span class="sits__place sits-price--middle {{dis137}}" ng-click="datghe(137,2)" data-place='I15' data-price='20'>I15</span>
                                <span class="sits__place sits-price--middle {{dis138}}" ng-click="datghe(138,2)" data-place='I16' data-price='20'>I16</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <span class="sits__place sits-price--expensive {{dis139}}" ng-click="datghe(139,3)" data-place='J5' data-price='30'>J5</span>
                                <span class="sits__place sits-price--expensive {{dis140}}" ng-click="datghe(140,3)" data-place='J6' data-price='30'>J6</span>
                                <span class="sits__place sits-price--expensive {{dis141}}" ng-click="datghe(141,3)" data-place='J7' data-price='30'>J7</span>
                                <span class="sits__place sits-price--expensive {{dis142}}" ng-click="datghe(142,3)" data-place='J8' data-price='30'>J8</span>
                                <span class="sits__place sits-price--expensive {{dis143}}" ng-click="datghe(143,3)" data-place='J9' data-price='30'>J9</span>
                                <span class="sits__place sits-price--expensive {{dis144}}" ng-click="datghe(144,3)" data-place='J10' data-price='30'>J10</span>
                                <span class="sits__place sits-price--expensive {{dis145}}" ng-click="datghe(145,3)" data-place='J11' data-price='30'>J11</span>
                                <span class="sits__place sits-price--expensive {{dis146}}" ng-click="datghe(146,3)" data-place='J12' data-price='30'>J12</span>
                                <span class="sits__place sits-price--expensive {{dis147}}" ng-click="datghe(147,3)" data-place='J13' data-price='30'>J13</span>
                                <span class="sits__place sits-price--expensive {{dis148}}" ng-click="datghe(148,3)" data-place='J14' data-price='30'>J14</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--expensive {{dis149}}" ng-click="datghe(149,3)" data-place='K5' data-price='30'>K5</span>
                                <span class="sits__place sits-price--expensive {{dis150}}" ng-click="datghe(150,3)" data-place='K6' data-price='30'>K6</span>
                                <span class="sits__place sits-price--expensive {{dis151}}" ng-click="datghe(151,3)" data-place='K7' data-price='30'>K7</span>
                                <span class="sits__place sits-price--expensive {{dis152}}" ng-click="datghe(152,3)" data-place='K8' data-price='30'>K8</span>
                                <span class="sits__place sits-price--expensive {{dis153}}" ng-click="datghe(153,3)" data-place='K9' data-price='30'>K9</span>
                                <span class="sits__place sits-price--expensive {{dis154}}" ng-click="datghe(154,3)" data-place='K10' data-price='30'>K10</span>
                                <span class="sits__place sits-price--expensive {{dis155}}" ng-click="datghe(155,3)" data-place='K11' data-price='30'>K11</span>
                                <span class="sits__place sits-price--expensive {{dis156}}" ng-click="datghe(156,3)" data-place='K12' data-price='30'>K12</span>
                                <span class="sits__place sits-price--expensive {{dis157}}" ng-click="datghe(157,3)" data-place='K13' data-price='30'>K13</span>
                                <span class="sits__place sits-price--expensive {{dis158}}" ng-click="datghe(158,3)" data-place='K14' data-price='30'>K14</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--expensive {{dis159}}" ng-click="datghe(159,3)" data-place='L6' data-price='30'>L6</span>
                                <span class="sits__place sits-price--expensive {{dis160}}" ng-click="datghe(160,3)" data-place='L7' data-price='30'>L7</span>
                                <span class="sits__place sits-price--expensive {{dis161}}" ng-click="datghe(161,3)" data-place='L8' data-price='30'>L8</span>
                                <span class="sits__place sits-price--expensive {{dis162}}" ng-click="datghe(162,3)" data-place='L9' data-price='30'>L9</span>
                                <span class="sits__place sits-price--expensive {{dis163}}" ng-click="datghe(163,3)" data-place='L10' data-price='30'>L10</span>
                                <span class="sits__place sits-price--expensive {{dis164}}" ng-click="datghe(164,3)" data-place='L11' data-price='30'>L11</span>
                                <span class="sits__place sits-price--expensive {{dis165}}" ng-click="datghe(165,3)" data-place='L12' data-price='30'>L12</span>
                                <span class="sits__place sits-price--expensive {{dis166}}" ng-click="datghe(166,3)" data-place='L13' data-price='30'>L13</span>
                            </div>

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                            <span class="sits__indecator">12</span>
                            <span class="sits__indecator">13</span>
                            <span class="sits__indecator">14</span>
                            <span class="sits__indecator">15</span>
                            <span class="sits__indecator">16</span>
                            <span class="sits__indecator">17</span>
                            <span class="sits__indecator">18</span>
                        </footer>
                    </div>
                </div>
            </div>
                
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                    </aside>

                    <img alt="" src="<?php echo asset('template/images/components/sits_mobile.png');?>">
                </div>
            </div>   
                
            </div>
                

            </div>
        </section>
        </div>
        
        

        <div class="clearfix"></div>
        <form id='film-and-time' class="booking-form" method='get' action='book3-buy.html'>

            <input type='text' name='choosen-number' class="choosen-number">
            <input type='text' name='choosen-number--cheap' class="choosen-number--cheap">
            <input type='text' name='choosen-number--middle' class="choosen-number--middle">
            <input type='text' name='choosen-number--expansive' class="choosen-number--expansive">
            <input type='text' name='choosen-cost' class="choosen-cost">
            <input type='text' name='choosen-sits' class="choosen-sits">


            <div class="booking-pagination booking-pagination--margin">
                    <a href="book_1" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </a>
                    <a href="#" ng-click="kiemtra()" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </a>
            </div>
        </form>
        
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Cities</a></li>
                        <li><a href="movie-list-left.html" class="nav-link__item">Movies</a></li>
                        <li><a href="trailer.html" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Rates</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="coming-soon.html" class="nav-link__item">Coming soon</a></li>
                        <li><a href="cinema-list.html" class="nav-link__item">Cinemas</a></li>
                        <li><a href="offers.html" class="nav-link__item">Best offers</a></li>
                        <li><a href="news-left.html" class="nav-link__item">News</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Terms of use</a></li>
                        <li><a href="gallery-four.html" class="nav-link__item">Gallery</a></li>
                        <li><a href="contact.html" class="nav-link__item">Contacts</a></li>
                        <li><a href="page-elements.html" class="nav-link__item">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>

	<!-- JavaScript-->
        <!-- jQuery 3.1.1--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo asset('template/js/external/jquery-3.1.1.min.js');?>"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo asset('template/js/external/jquery-migrate-1.2.1.min.js');?>"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo asset('template/js/jquery.mobile.menu.js');?>"></script>
         <!-- Select -->
        <script src="<?php echo asset('template/js/external/jquery.selectbox-0.2.min.js');?>"></script>

        <!-- Form element -->
        <script src="<?php echo asset('template/js/external/form-element.js');?>"></script>
        <!-- Form validation -->
        <script src="<?php echo asset('template/js/form.js');?>"></script>

        <!-- Custom -->
        <script src="<?php echo asset('template/js/custom.js');?>"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_BookingTwo();
            });
		</script>

</body>
</html>
