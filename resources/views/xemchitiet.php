<!doctype html>
<html ng-app="xemchitiet-app">

<head >
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>AMovie - Movie page</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gozha.net">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <!-- jQuery UI -->
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

    <!-- Mobile menu -->
    <link href="<?php echo asset('template/css/gozha-nav.css') ; ?>" rel="stylesheet" />
    <!-- Select -->
    <link href="<?php echo asset('template/css/external/jquery.selectbox.css') ; ?>" rel="stylesheet" />
    <!-- Swiper slider -->
    <link href="<?php echo asset('template/css/external/idangerous.swiper.css') ; ?>" rel="stylesheet" />
    <!-- Magnific-popup -->
    <link href="<?php echo asset('template/css/external/magnific-popup.css') ; ?>" rel="stylesheet" />


    <!-- Custom -->
    <link href="<?php echo asset('template/css/style.css?v=1') ; ?>" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="<?php echo asset('template/js/external/modernizr.custom.js') ; ?>"></script>

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
</head>

<body ng-controller="xemchitietController">
    <div class="wrapper">
        <!-- Banner -->
      
        <!-- Header section -->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href='/Cinema/public' class="logo">
                    <img alt='logo' src="<?php echo asset('template/images/logo.png') ; ?>">
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
                            <li><a href="#" ng-if="(Maus != 0)" ng-click="settings()" class="auth__function-item">Settings</a></li>
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
        <section class="container">
            <div class="col-sm-12">
                <div class="movie">
                    <h2 class="page-heading">{{phimfirst.TenPhim}}</h2>

                    <div class="movie__info">
                        <div class="col-sm-4 col-md-3 movie-mobile">
                            <div class="movie__images" style="text-align: center">
                                <span class="movie__rating">{{phimfirst.DanhGia|number:1}}</span>
                                <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{phimfirst.AnhHienThi}}') ; ?>">
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-9">
                            <p class="movie__time">{{phimfirst.ThoiLuong}} min</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#">{{phimfirst.QuocGia}}</a></p>
                            <p class="movie__option"><strong>Year: </strong><a href="#">{{phimfirst.NamSX}}</a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#">{{phimfirst.TenTheLoai}}</a></p>
                            <p class="movie__option"><strong>Release date: </strong>{{phimfirst.NgayMua}}</p>
                            
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#">{{phimfirst.AgeDuocXem}}</a></p>

                            <a href="#" class="comment-link">Comments:  {{count_Comment}}</a>

                            <div class="movie__btns movie__btns--full">
                                <a href="#" ng-click="next_dat_ve()" class="btn btn-md btn--warning">book a ticket for this movie</a>
                                <a href="#" class="watchlist">Add to watchlist</a>
                            </div>

                            <div class="share">
                                <span class="share__marker">Share: </span>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">The plot</h2>

                    <p class="movie__describe">{{phimfirst.NoiDung}} </p>

                    <h2 class="page-heading">photos &amp; videos</h2>

                    <div class="movie__media">
                        <div class="movie__media-switch">
                            <a href="#" class="watchlist list--photo" data-filter='media-photo'>234 photos</a>
                            <a href="#" class="watchlist list--video" data-filter='media-video'>10 videos</a>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--First Slide-->
                                <div class="swiper-slide media-video">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh1}}') ; ?>' class="movie__media-item ">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh1}}') ; ?>">
                                    </a>
                                </div>

                                <!--Second Slide-->
                                <div class="swiper-slide media-video">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh2}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh2}}') ; ?>">
                                    </a>
                                </div>

                                <!--Third Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh3}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh3}}') ; ?>">
                                    </a>
                                </div>

                                <!--Four Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh4}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh4}}') ; ?>">
                                    </a>
                                </div>

                                <!--Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh5}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh5}}') ; ?>">
                                    </a>
                                </div>

                                <!--Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh6}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh6}}') ; ?>">
                                    </a>
                                </div>

                                <!--First Slide-->
                                <div class="swiper-slide media-video">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh7}}') ; ?>' class="movie__media-item ">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh7}}') ; ?>">
                                    </a>
                                </div>

                                <!--Second Slide-->
                                <div class="swiper-slide media-video">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh8}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh8}}') ; ?>">
                                    </a>
                                </div>

                                <!--Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh9}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh9}}') ; ?>">
                                    </a>
                                </div>

                                <!--Slide-->
                                <div class="swiper-slide media-photo">
                                    <a href='<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh10}}') ; ?>' class="movie__media-item">
                                        <img alt='' src="<?php echo asset('template/img_phim/img_trailer/{{imgtrailerfirst.Anh10}}') ; ?>">
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <h2 class="page-heading">showtime &amp; tickets</h2>
                <div class="choose-container">
                    <form id='select' class="select" method='get'>
                        <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
                            <option value="1" selected='selected'>London</option>
                            <option value="2">New York</option>
                            <option value="3">Paris</option>
                            <option value="4">Berlin</option>
                            <option value="5">Moscow</option>
                            <option value="3">Minsk</option>
                            <option value="4">Warsawa</option>
                            <option value="5">Kiev</option>
                        </select>
                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='01/03/2021' class="datepicker__input">
                    </div>
                    
                    <div class="btn" ng-click="load()">
                      <input type='submit' value="load" />
                    </div>
                    <a href="#" id="map-switch" class="watchlist watchlist--map watchlist--map-full" ng-click="loadgiochieu()"><span class="show-map">Show cinemas on map</span><span  class="show-time">Show cinema time table</span></a>
                    
                    <div class="clearfix"></div>

                    <div class="time-select">
                    <div class="time-select__group group--first" >
                            <div class="col-sm-3">
                                <p class="time-select__place">Rạp 1</p>
                            </div>
                            <ul class="col-sm-6 items-wrap" ng-click="chonrap1()">
                                <li class="time-select__item" data-time='{{time1_1}}'>{{time1_1}}</li>
                                <li class="time-select__item" data-time='{{time1_2}}'>{{time1_2}}</li>
                                <li class="time-select__item" data-time='{{time1_3}}'>{{time1_3}}</li>
                                <li class="time-select__item" data-time='{{time1_4}}'>{{time1_4}}</li>
                                <li class="time-select__item" data-time='{{time1_5}}'>{{time1_5}}</li>
                                <li class="time-select__item" data-time='{{time1_6}}'>{{time1_6}}</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-3">
                                <p class="time-select__place">Rạp 2</p>
                            </div>
                            <ul class="col-sm-6 items-wrap" ng-click="chonrap2()">
                                <li class="time-select__item" data-time='{{time2_1}}'>{{time2_1}}</li>
                                <li class="time-select__item" data-time='{{time2_2}}'>{{time2_2}}</li>
                                <li class="time-select__item" data-time='{{time2_3}}'>{{time2_3}}</li>
                                <li class="time-select__item" data-time='{{time2_4}}'>{{time2_4}}</li>
                                <li class="time-select__item" data-time='{{time2_5}}'>{{time2_5}}</li>
                                <li class="time-select__item" data-time='{{time2_6}}'>{{time2_6}}</li>
                            </ul>
                        </div>

                    
                    </div>

                    <!-- hiden maps with multiple locator-->
                    <div class="map">
                        <div id='cimenas-map'></div>
                    </div>

                    <h2 class="page-heading">comments ({{count_Comment}})</h2>

                    <div class="comment-wrapper">
                        <form id="comment-form" class="comment-form" method='post'>
                            <textarea class="comment-form__text" placeholder='Add you comment here' ng-model="noidung"></textarea>
                            <label class="comment-form__info">250 characters left</label>
                            <button type='submit' class="btn btn-md btn--danger comment-form__btn" ng-click="addComment()">add comment</button>
                        </form>

                        <div class="comment-sets">

                            <div class="comment" ng-repeat="item in listcmt">
                                <div class="comment__images">
                                    <img alt='' style="height:50px; width: 50px; border-radius:50%" src="<?php echo asset('template/img_user/img_khachhang/{{item.Anh}}') ; ?>">
                                </div>

                                

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>{{item.TenKH}}</a>
                                <p class="comment__date">{{item.ThoiGianCMT}}</p>
                                <p class="comment__message" style="font-size: 20px; padding: 10px;">{{item.NoiDung}}</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>


                           


                            <div class="comment-more">
                                <a href="#" class="watchlist">Show more comments</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

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
    <script>
        window.jQuery || document.write('<script src="<?php echo asset('template/js/external/jquery-3.1.1.min.js') ; ?>"><\/script>')
    </script>
    <!-- Migrate -->
    <script src="<?php echo asset('template/js/external/jquery-migrate-1.2.1.min.js') ; ?>"></script>
    <!-- jQuery UI -->
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Bootstrap 3-->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- Mobile menu -->
    <script src="<?php echo asset('template/js/jquery.mobile.menu.js') ; ?>"></script>
    <!-- Select -->
    <script src="<?php echo asset('template/js/external/jquery.selectbox-0.2.min.js') ; ?>"></script>

    <!-- Stars rate -->
    <script src="<?php echo asset('template/js/external/jquery.raty.js') ; ?>"></script>
    <!-- Swiper slider -->
    <script src="<?php echo asset('template/js/external/idangerous.swiper.min.js') ; ?>"></script>
    <!-- Magnific-popup -->
    <script src="<?php echo asset('template/js/external/jquery.magnific-popup.min.js') ; ?>"></script>

    <!--*** Google map  ***-->  
    <!--*** Google map infobox  ***-->

    <!-- Share buttons -->
    <script type="text/javascript">
        var addthis_config = {
            "data_track_addressbar": true
        };
    </script>
    
    <!-- Form element -->
    <script src="<?php echo asset('template/js/external/form-element.js') ; ?>"></script>
    <!-- Form validation -->
    <script src="<?php echo asset('template/js/form.js') ; ?>"></script>

    <!-- Custom -->
    <script src="<?php echo asset('template/js/custom.js') ; ?>"></script>

    <script type="text/javascript" src="<?php echo asset('app/xemchitiet.js') ; ?>"></script>
    

    <script type="text/javascript">
        $(document).ready(function() {
            init_MoviePage();
            init_MoviePageFull();
        });
    </script>





</body>

</html>