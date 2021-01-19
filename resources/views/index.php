
<!doctype html>
<html  ng-app="my-app">
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('app/app.js') ; ?>"></script>
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- Mobile menu -->
        <link href="<?php echo asset('template/css/gozha-nav.css') ; ?>" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo asset('template/css/external/jquery.selectbox.css') ; ?>" rel="stylesheet" />

		<!-- Slider Revolution CSS Files -->
		
        <link rel="stylesheet" type="text/css" href="<?php echo asset('template/revolution/css/settings.css') ; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('template/revolution/css/layers.css') ; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('template/revolution/css/navigation.css') ; ?>">
    
        <!-- Custom -->
        <link href="<?php echo asset('template/css/style.css?v=1') ; ?>" rel="stylesheet" />

        <!-- Select -->
        <!-- Swiper slider -->
        <!-- Magnific-popup -->

    
        <!-- Custom -->

        <!-- Modernizr --> 
        <!-- Modernizr --> 
        <script src="<?php echo asset('template/js/external/modernizr.custom.js') ; ?>"></script>
        
       
    
</head>

<body ng-controller="IndexController">
    <div class="wrapper">
        <!-- Banner -->
        <div class="banner-top">
            <img alt='top banner' src="<?php echo asset('template/images/banners/bra.jpg') ; ?>">
        </div>

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
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
                            <li><a href="signin" class="auth__function-item" ng-if="(Maus == 0)">Sign in</a></li>
                            <li><a href="signup" ng-if="(Maus == 0)" class="auth__function-item">Sign up</a></li>
                            <li><a href="#" ng-if="(Maus != 0)" class="auth__function-item" ng-click="setting()">Settings</a></li>
                            <li><a href="#" ng-if="(Maus != 0)" ng-click="DangXuat()" class="auth__function-item">Log out</a></li>
                        </ul>

                    </div>
                    <a href="#" ng-click="next_dat_ve()" class="btn btn-md btn--warning btn--book btn-control--home " >Book a ticket</a>
                </div>
            </div>
        </header>

        
        <!-- Slider -->
        <div class="bannercontainer rev_slider_wrapper">
 
 <!-- the ID here will be used in the JavaScript below to initialize the slider -->
 <div id="rev_slider_1" class="banner rev_slider" style="display:none">

     <!-- BEGIN SLIDES LIST -->
     <ul >
         <!-- SLIDE 1 -->
         <li data-transition="fade" class="slide" data-title='Rush.'>

             <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
             <img class="rev-slidebg" alt='' src="<?php echo asset('template/img_phim/slidepanel/slide1.jpg') ; ?>">

             <div class="tp-caption slide__name margin-slider" data-x="right" data-y="80" data-frames='[{
                    "delay":300,
                    "split":"chars",
                    "splitdelay":0.1,
                    "speed":700,
                    "frame":"0",
                    "from":"x:[-100%];opacity:0;",
                    "mask":"x:0px;y:0px;s:inherit;e:inherit;",
                    "to":"o:1;",
                    "ease":"Power4.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 RUSH
             </div>

             <div class="tp-caption n slide__time margin-slider" data-x="right" data-hoffset='250' data-y="186" data-frames='[{
                    "delay":1200,
                    "speed":300,
                    "frame":"0",
                    "from":"x:[50%];opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 From
             </div>

             <div class="tp-caption  slide__date margin-slider" data-x="right" data-hoffset='149' data-y="186" data-frames='[{
                    "delay":1700,
                    "speed":500,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 October 18
             </div>
             <div class="tp-caption slide__time margin-slider" data-x="right" data-hoffset='120' data-y="186" data-frames='[{
                    "delay":1200,
                    "speed":300,
                    "frame":"0",
                    "from":"x:[50%];opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 till
             </div>
             <div class="tp-caption slide__date margin-slider" data-x="right" data-y="186" data-frames='[{
                    "delay":1700,
                    "speed":500,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 November 01
             </div>
             <div class="tp-caption slide__text margin-slider text-right" data-x="right" data-y="250" data-frames='[{
                    "delay":2300,
                    "speed":400,
                    "frame":"0",
                    "from":"y:100px;skX:50px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 Two-time Academy Award winner Ron Howard, teams once again with fellow two-time Academy<br> Award nominee, writer Peter Morgan , on Rush, a spectacular big-screen re-creation of the merciless<br> 1970s rivalry between James
                 Hunt and Niki Lauda
             </div>
             <div class="tp-caption margin-slider" data-x="right" data-y="324" data-frames='[{
                    "delay":2600,
                    "speed":400,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 <a href="#" class="slide__link">check out cinemas &amp; time</a>
             </div>

         </li>

         <!-- SLIDE 2 -->
         <li data-transition="fade" class="slide" data-title='Travel worldwide. Create trip film.'>

             <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
             <img class="rev-slidebg" alt='' src="<?php echo asset('template/images/bg-video.jpg') ; ?>">
             <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="<?php echo asset('template/video/TravelIs.mp4') ; ?>" data-videopreload="auto" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9"
                 data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
             <div class="tp-caption slide__name slide__name--smaller" data-x="center" data-y="160" data-splitin="chars" data-elementdelay="0.1" data-speed="700" data-start="1400" data-easing="easeOutBack" data-frames='[{
                    "delay":1400,
                    "speed":700,
                    "split":"chars",
                    "splitdelay":0.1,
                    "frame":"0",
                    "from":"opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 Travel, Admire, Remember.
             </div>
             <div class="tp-caption slide__time" data-x="center" data-hoffset='-115' data-y="242" data-frames='[{
                    "delay":1800,
                    "speed":300,
                    "frame":"0",
                    "from":"x:[50%];opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 From
             </div>
             <div class="tp-caption slide__date position-center postion-place--two lfb ltb" data-x="center" data-hoffset='-50' data-y="242" data-frames='[{
                    "delay":2200,
                    "speed":500,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 April 18
             </div>
             <div class="tp-caption slide__time" data-x="center" data-hoffset='5' data-y="242" data-frames='[{
                    "delay":1800,
                    "speed":300,
                    "frame":"0",
                    "from":"x:[50%];opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 - till
             </div>
             <div class="tp-caption slide__date" data-x="center" data-hoffset='60' data-y="242" data-frames='[{
                    "delay":2200,
                    "speed":500,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 May 01
             </div>

             <div class="tp-caption slider-wrap-btn" data-x="center" data-y="310" data-frames='[{
                    "delay":2800,
                    "speed":400,
                    "frame":"0",
                    "from":"y:100px;opacity:0;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 <a href="#" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>
             </div>
         </li>

         <!-- SLIDE 3 -->
         <li data-transition="fade" class="slide" data-title='Stop wishing. Start doing.'>

             <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
             <img class="rev-slidebg" alt='' src="<?php echo asset('template/img_phim/slidepanel/side4.jpg') ; ?>">
             <div class="tp-caption slide__name slide__name--smaller slide__name--specific" data-x="center" data-y="160" data-frames='[{
                    "delay":1400,
                    "speed":700,
                    "frame":"0",
                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                    "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span>
             </div>

             <div class="tp-caption slide__descript" data-x="center" data-y="240" data-frames='[{
                    "delay":2000,
                    "speed":500,
                    "frame":"0",
                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                    "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 find your best match movie with A.MOVIE
             </div>

             <div class="tp-caption slider-wrap-btn" data-x="center" data-y="310" data-frames='[{
                    "delay":2500,
                    "speed":500,
                    "frame":"0",
                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                    "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
                    "to":"o:1;",
                    "ease":"Power3.easeInOut"
                    },{
                    "delay":"wait",
                    "speed":300,
                    "frame":"999",
                    "to":"opacity:0;",
                    "ease":"Power3.easeInOut"
                  }]'>
                 <a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
             </div>
         </li>
         


     </ul><!-- END SLIDES LIST -->

 </div><!-- END SLIDER CONTAINER -->

</div>

            <!-- END SLIDER CONTAINER WRAPPER -->
        <!--end slider -->


<!-- Main content -->

<section class="container">
 <div class="movie-best">
      <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Today Best choice</div>
      <div class="col-sm-12 change--col">
          <div class="movie-beta__item " ng-repeat="item in ListPhimHot">
             <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{item.AnhHienThi}}') ; ?>">
              <span class="best-rate">{{item.DanhGia}}</span>

              <ul class="movie-beta__info">
                  <li><span class="best-voted">71 people voted today</span></li>
                  <li>
                     <p class="movie__time">{{item.TenPhim}}</p>
                     <p>{{item.TenTheLoai}}</p>
                     <p>38 comments</p>
                  </li>
                  <li class="last-block">
                      <a href="#" ng-click="xemchitiet(item.MaPhim)" class="slide__link">more</a>
                  </li>
              </ul>
          </div>



          
      </div>
     <div class="col-sm-10 col-sm-offset-1 movie-best__check">check all movies now playing</div>
 </div>

 <div class="col-sm-12">
     <div class="mega-select-present mega-select-top mega-select--full">
         <div class="mega-select-marker">
             <div class="marker-indecator location">
                 <p class="select-marker"><span>movie to watch now</span> <br>Tên phim</p>
             </div>

             <div class="marker-indecator cinema">
                 <p class="select-marker"><span>find your </span> <br>Đạo diễn</p>
             </div>

             <div class="marker-indecator film-category">
                 <p class="select-marker"><span>find movie due to </span> <br> Quốc gia</p>
             </div>

             <div class="marker-indecator actors">
                 <p class="select-marker"><span> like particular stars</span> <br>Thể loại</p>
             </div>

             <div class="marker-indecator director">
                 <p class="select-marker"><span>admire personalities - find </span> <br>Năm sản xuất</p>
             </div>

         </div>

           <div class="mega-select pull-right">
               <span class="mega-select__point">Search by</span>
               <ul class="mega-select__sort">
                   <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter='location'>Tên phim</a></li>
                   <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Đạo diễn</a></li>
                   <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='film-category'>Quốc Gia</a></li>
                   <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>Thể loại</a></li>
                   <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='director'>Năm sản xuất</a></li>
               </ul>

               <input name="search-input" ng-model="search_text" type='text' class="select__field">
               
               <div class="select__btn">
                 <a href="#" ng-click="timkiem(1)" class="btn btn-md btn--danger location">find <span class="hidden-exrtasm">Tên phim</span></a>
                 <a href="#" ng-click="timkiem(2)" class="btn btn-md btn--danger cinema">find <span class="hidden-exrtasm">Đạo diễn</span></a>
                 <a href="#" ng-click="timkiem(3)" class="btn btn-md btn--danger film-category">find <span class="hidden-exrtasm">Quốc gia</span></a>
                 <a href="#" ng-click="timkiem(4)" class="btn btn-md btn--danger actors">find <span class="hidden-exrtasm">Thể loại</span></a>
                 <a href="#" ng-click="timkiem(5)" class="btn btn-md btn--danger director">find <span class="hidden-exrtasm">Năm sản xuất</span></a>
               </div>

               
           </div>
       </div>
 </div>
 
 <div class="clearfix"></div>

 <h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>

 <div class="col-sm-12">
     <div class="row">
         <div class="col-sm-8 col-md-9">
             <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--dark movie--test--left">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[0].MaPhim)" href="#" class="movie-beta__link">
                             <img  alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[0].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[0].MaPhim)" href='#' class="movie__title">{{lichchieu[0].TenPhim}} ({{lichchieu[0].NamSX}})  </a>

                         <p class="movie__time">{{lichchieu[0].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[0].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                         
                             <span class="movie__rating">{{lichchieu[0].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--light movie--test--left">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[1].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[0].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[1].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[0].TenPhim}} ({{lichchieu[1].NamSX}})  </a>

                         <p class="movie__time">{{lichchieu[1].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[1].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[1].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--light movie--test--right" >
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[2].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[2].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[2].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[2].TenPhim}} ({{lichchieu[2].NamSX}})   </a>

                         <p class="movie__time">{{lichchieu[2].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[2].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[2].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--dark movie--test--right">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[3].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[3].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[3].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[3].TenPhim}} ({{lichchieu[3].NamSX}}) </a>

                         <p class="movie__time">{{lichchieu[3].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[3].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[3].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--dark movie--test--left">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[4].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[4].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[4].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[4].TenPhim}} ({{lichchieu[4].NamSX}})  </a>

                         <p class="movie__time">{{lichchieu[4].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[4].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[4].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--light movie--test--left">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[5].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[5].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[5].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[5].TenPhim}} ({{lichchieu[5].NamSX}}) </a>

                         <p class="movie__time">{{lichchieu[5].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[5].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[5].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--light movie--test--right">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[6].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[6].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[6].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[6].TenPhim}} ({{lichchieu[6].NamSX}})   </a>

                         <p class="movie__time">{{lichchieu[6].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[6].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[6].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->

              <!-- Movie variant with time -->
                 <div class="movie movie--test movie--test--dark movie--test--right">
                     <div class="movie__images">
                         <a ng-click="xemchitiet(lichchieu[7].MaPhim)" href="xemchitiet" class="movie-beta__link">
                         <img alt='' src="<?php echo asset('template/img_phim/panel_phim/{{lichchieu[7].AnhHienThi}}') ; ?>">
                         </a>
                     </div>

                     <div class="movie__info">
                         <a ng-click="xemchitiet(lichchieu[7].MaPhim)" href="xemchitiet" class="movie__title">{{lichchieu[7].TenPhim}} ({{lichchieu[7].NamSX}})  </a>

                         <p class="movie__time">{{lichchieu[7].ThoiLuong}} min</p>

                         <p class="movie__option"><a href="#">{{lichchieu[7].TenTheLoai}}</a></p>
                         
                         <div class="movie__rate">
                             <span class="movie__rating">{{lichchieu[7].DanhGia}}</span>
                         </div>               
                     </div>
                 </div>
              <!-- Movie variant with time -->


             <div class="row">
                 <div class="social-group">
                   <div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4">
                         <div class="social-group__head">Join <br>our social groups</div>
                         <div class="social-group__content">A lot of fun, discussions, queezes and contests among members. <br class="hidden-xs"><br>Always be first to know about best offers from cinemas and our partners</div>
                     </div>

                     <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-4">
                          <div class="facebook-group">

                             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fenvato&tabs=timeline&width=240px&height=330px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=353861661473733" width="240px" height="330px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                         </div>
                     </div>
                     
                     <div class="clearfix visible-sm"></div>
                     
                 </div>
             </div>
         </div>

         <aside class="col-sm-4 col-md-3">
             <div class="sitebar first-banner--left">
                 <div class="banner-wrap first-banner--left">
                     <img alt='banner' src="<?php echo asset('template/images/banners/sale.jpg') ; ?>">
                 </div>

                  <div class="banner-wrap">
                     <img alt='banner' src="<?php echo asset('template/images/banners/sport.jpg') ; ?>">
                 </div>

                  <div class="banner-wrap banner-wrap--last">
                     <img alt='banner' src="<?php echo asset('template/images/banners/boots.jpg') ; ?>">
                 </div>

                 <div class="promo marginb-sm">
                   <div class="promo__head">A.Movie app</div>
                   <div class="promo__describe">for all smartphones<br> and tablets</div>
                   <div class="promo__content">
                       <ul>
                           <li class="store-variant"><a href="#"><img alt='' src="<?php echo asset('template/images/apple-store.svg') ; ?>"></a></li>
                           <li class="store-variant"><a href="#"><img alt='' src="<?php echo asset('template/images/google-play.svg') ; ?>"></a></li>
                           <li class="store-variant"><a href="#"><img alt='' src="<?php echo asset('template/images/windows-store.svg') ; ?>"></a></li>
                       </ul>
                   </div>
               </div>

             </div>
         </aside>
     </div>
 </div>

 <div class="col-sm-12">
     <h2 class="page-heading">Latest news</h2>

     <div class="col-sm-4 similar-wrap col--remove">
         <div class="post post--preview post--preview--wide">
             <div class="post__image">
                 <img alt='' src="<?php echo asset('template/img_tintuc/tin1.jpg') ; ?>">
                 <div class="social social--position social--hide">
                     <span class="social__name">Share:</span>
                     <a href='#' class="social__variant social--first fa fa-facebook"></a>
                     <a href='#' class="social__variant social--second fa fa-twitter"></a>
                     <a href='#' class="social__variant social--third fa fa-vk"></a>
                 </div>
             </div>
             <p class="post__date">22 October 2013 </p>
             <a href="single-page-left.html" class="post__title">"Thor: The Dark World" - World Premiere</a>
             <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
         </div>
     </div>
     <div class="col-sm-4 similar-wrap col--remove">
         <div class="post post--preview post--preview--wide">
             <div class="post__image">
                 <img alt='' src="<?php echo asset('template/img_tintuc/tin2.jpg') ; ?>">
                 <div class="social social--position social--hide">
                     <span class="social__name">Share:</span>
                     <a href='#' class="social__variant social--first fa fa-facebook"></a>
                     <a href='#' class="social__variant social--second fa fa-twitter"></a>
                     <a href='#' class="social__variant social--third fa fa-vk"></a>
                 </div>
             </div>
             <p class="post__date">22 October 2021 </p>
             <a href="single-page-left.html" class="post__title">30th Annual Night Of Stars Presented By The Fashion Group International</a>
             <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
         </div>
     </div>
     <div class="col-sm-4 similar-wrap col--remove">
         <div class="post post--preview post--preview--wide">
             <div class="post__image">
                 <img alt='' src="<?php echo asset('template/img_tintuc/tin3.jpg') ; ?>">
                 <div class="social social--position social--hide">
                     <span class="social__name">Share:</span>
                     <a href='#' class="social__variant social--first fa fa-facebook"></a>
                     <a href='#' class="social__variant social--second fa fa-twitter"></a>
                     <a href='#' class="social__variant social--third fa fa-vk"></a>
                 </div>
             </div>
             <p class="post__date">22 October 2013 </p>
             <a href="single-page-left.html" class="post__title">Hollywood Film Awards 2013</a>
             <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
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
    <!--Chung-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="<?php echo asset('template/js/external/jquery-migrate-1.2.1.min.js') ; ?>"></script>

    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <script src="<?php echo asset('template/js/jquery.mobile.menu.js') ; ?>"></script>

    <script src="<?php echo asset('template/js/external/jquery.selectbox-0.2.min.js') ; ?>"></script>

    <script src="<?php echo asset('template/js/external/jquery.raty.js') ; ?>"></script>

    <script src="<?php echo asset('template/js/external/form-element.js') ; ?>"></script>

    <script src="<?php echo asset('template/js/custom.js') ; ?>"></script>

    <script src="<?php echo asset('template/js/form.js');?>"></script>

	
        

    <script type="text/javascript" src="<?php echo asset('template/revolution/js/jquery.themepunch.tools.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/jquery.themepunch.revolution.min.js') ; ?>"></script>

        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.actions.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.carousel.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.kenburn.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.layeranimation.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.migration.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.navigation.min.js') ; ?>"></script>
		<script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.parallax.min.js') ; ?>"></script>
		<script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.slideanims.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo asset('template/revolution/js/extensions/revolution.extension.video.min.js') ; ?>"></script>

        <script src="<?php echo asset('template/js/external/twitterfeed.js') ; ?>"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            init_Home();
        });
    </script>
        
     


        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

       
      

		
        


</body>
</html>










































