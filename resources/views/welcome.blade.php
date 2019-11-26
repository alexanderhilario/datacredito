<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IND GROUP</title>
  
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-five">
        
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-envelope-o"></i> ejemplo@mail.com</li>
                            <li><i class="fa fa-phone"></i><a href="#">809 000 0000</a></li>
                            <li><i class="fa fa-map-marker"></i><a href="#">Piza italia</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                    
                    </div>
                </div>
            </div>
        </div>
        
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="" title="" style="width:95px;"></a></div>
                    </div>
                    
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a  href="{{ route('login') }}">Iniciar sesión</a>
                                </ul>
                            </div>
                            
                        </nav>
                        
                        <!--Outer Box-->
                        <div class="outer-box">
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{ asset('images/brand2.png') }}" alt="" title="" style="
    width: 60px;
"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ route('login') }}">Iniciar sesión</a>
                                </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
        
    </header>
    <!--End Main Header -->
    
    <!--Main Slider-->
    <section class="main-slider style-four">
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(images/main-slider/bg2.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <h1>Sistema global <br> de información de empleados</h1>
                        <div class="text">Asegura tu negocio…</div>
                        <div class="link-box">
                            <a href="http://34.211.15.168:8080/" class="theme-btn btn-style-twelve">Iniciar sesión<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/main-slider/bg2.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <h1>Sistema global <br> de información de empleados</h1>
                        <div class="text">Asegura tu negocio…</div>
                        <div class="link-box">
                            <a  href="{{ route('login') }}" class="theme-btn btn-style-twelve">Iniciar sesión<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <!--End Slide Info Boxed-->
        
    </section>
    <!--End Main Slider-->
    
    <!-- About Section Four -->
    <section class="about-section-four">
        <div class="auto-container">
            
            <!-- Sec Title Three -->
            <div class="sec-title-three">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Intro</div>
                        <h2>About us</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-1"><img src="images/resource/about-2.jpg" alt=""></div>
                        <div class="image-2"><img src="images/resource/about-3.jpg" alt=""></div>
                    </div>
                </div>
                
                <!-- Skills Column -->
                <div class="skills-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            
                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-headphones"></span>
                                    </div>
                                    <h5>24/7 full <br> online support</h5>
                                </div>
                            </div>
                            
                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box alternate">
                                        <span class="icon flaticon-loading"></span>
                                    </div>
                                    <h5>12 years of <br> experience</h5>
                                </div>
                            </div>
                            
                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-creativity"></span>
                                    </div>
                                    <h5>Creative <br> finance idea</h5>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!--Skills-->
                        <div class="skills">
                            
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Finance</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                </div>
                            </div>
                            
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Business</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                                </div>
                            </div>
                            
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Investment</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
                                </div>
                            </div>
                            
                        </div>                      
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End About Section Four -->
    
    <!-- Services Section Ten -->
    <section class="services-section-ten">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-three centered">
                <div class="title">Our dedicated services</div>
                <h2>Learn some new info from <br> our latest news</h2>
            </div>
            <div class="row clearfix">
            
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-earnings"></span>
                        </div>
                        <h6><a href="#">Finance <br> Management</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-budget-1"></span>
                        </div>
                        <h6><a href="#">Banking <br> Investigation</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-target"></span>
                        </div>
                        <h6><a href="#">Business <br> Insurance</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-car"></span>
                        </div>
                        <h6><a href="#">Car <br> Insurance</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-analysis-1"></span>
                        </div>
                        <h6><a href="#">Market <br> Research</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-house"></span>
                        </div>
                        <h6><a href="#">Home <br> Insurance</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-employee"></span>
                        </div>
                        <h6><a href="#">Life <br> Insurance</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
                
                <!-- Services Block Fourteen -->
                <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="box-one"></div>
                        <div class="box-two"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-heartbeat"></span>
                        </div>
                        <h6><a href="#">Health <br> Insurance</a></h6>
                        <div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- End Services Section Ten -->
    
    <!-- Feature Section -->
    <section class="feature-section">
        <div class="auto-container">
        
            <!-- Sec Title Three -->
            <div class="sec-title-three">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Our best features</div>
                        <h2>Why choose us</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
                    </div>
                </div>
            </div>
            
            <!--Feature Tabs-->
            <div class="feature-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#feature-expert" class="tab-btn">Expert team <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                            <li data-tab="#feature-brand" class="tab-btn active-btn">Best Finance Brand <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                            <li data-tab="#feature-ideas" class="tab-btn">Best Leadership Ideas<span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!-- Tab -->
                            <div class="tab" id="feature-expert">
                                <div class="content">
                                    <div class="image">
                                        <img src="images/resource/feature.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tab -->
                            <div class="tab active-tab" id="feature-brand">
                                <div class="content">
                                    <div class="image">
                                        <img src="images/resource/feature-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tab -->
                            <div class="tab" id="feature-ideas">
                                <div class="content">
                                    <div class="image">
                                        <img src="images/resource/feature-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Feature Section -->
    
    <!-- Counter Section -->
    <section class="counter-section" style="background-image:url(images/background/6.jpg)">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter style-three">
                <div class="row clearfix">
                
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-start"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000ms" data-stop="1200">0</span>+
                                <div class="counter-title">Finishing Projects</div>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-collaboration"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="195">0</span>
                                <div class="counter-title">Team Member</div>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-hand-shake-1"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="850">0</span>+
                                <div class="counter-title">Happy Clienta</div>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-stopwatch"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="26">0</span>+
                                <div class="counter-title">Years Experience</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    <!-- Counter Section -->
    
    <!-- Team Section Two -->
    <section class="team-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-three centered">
                <div class="title">Our dedicated Team</div>
                <h2>We have a large number of <br> expert team member</h2>
            </div>
            
            <div class="row clearfix">
                
                <!--Team Block-->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-4.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Frazer Diamond</a></h5>
                            <div class="designation">Founder & CEO</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-5.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Chen Lee</a></h5>
                            <div class="designation">Co-Founder</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-6.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Emma O’Brien</a></h5>
                            <div class="designation">Sr. Product Engineer</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-7.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">David Ankrum</a></h5>
                            <div class="designation">Co Founder</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-8.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Maria De Aragon</a></h5>
                            <div class="designation">HRM</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-9.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Joe Hurt</a></h5>
                            <div class="designation">CTO</div>
                        </div>
                    </div>
                </div>
                
                <!--Team Block-->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-10.jpg" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team.html">Damien Wayne</a></h5>
                            <div class="designation">COO</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- End Team Section Two -->
    
    <!-- News Section Two -->
    <section class="news-section-two style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-three">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Some of our blog</div>
                        <h2>Learn about us</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                
                <!-- News Block Two -->
                <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/news-4.jpg" alt="" />
                            <div class="overlay-box">
                                <a href="images/resource/news-4.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                <li><span class="fa fa-user"></span>Admin</li>
                            </ul>
                            <h5><a href="blog-single.html">Strategy for Norway's Peion Fund Global.</a></h5>
                            <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Block Two -->
                <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/news-5.jpg" alt="" />
                            <div class="overlay-box">
                                <a href="images/resource/news-5.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                <li><span class="fa fa-user"></span>Admin</li>
                            </ul>
                            <h5><a href="blog-single.html">What we are capable of usually gets discovered.</a></h5>
                            <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Block Two -->
                <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/news-6.jpg" alt="" />
                            <div class="overlay-box">
                                <a href="images/resource/news-6.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                <li><span class="fa fa-user"></span>Admin</li>
                            </ul>
                            <h5><a href="blog-single.html">Food industry leaders often change their promoters.</a></h5>
                            <a href="#" class="theme-btn btn-style-fourteen">View more</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
            
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></div></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Sponsors Section-->
    
    <!-- Call To Action Section -->
    <section class="call-back-section" style="background-image:url(images/background/6.jpg)">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        
                        <!-- Request Form -->
                        <div class="request-form">
                            <!--Request Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Email Address</label>
                                        <input type="text" name="text" placeholder="" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Business Type</label>
                                        <select class="custom-select-box">
                                            <option>- Select -</option>
                                            <option>Business One</option>
                                            <option>Business Two</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Email Address</label>
                                        <input type="text" name="text" placeholder="" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>&nbsp;</label>
                                        <button class="theme-btn btn-style-thirteen" type="submit" name="submit-form">Submit now <span class="icon fa fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <!-- Title Column -->
                <div class="title-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Request a call back</h2>
                        <div class="text">If you want to discuss your business with our fine consultants, please schedule a meeting through this contact form</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->
    
    <!-- Map Section -->
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker-2.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Map Section -->
    
    <!--Main Footer-->
    <footer class="main-footer style-three">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('images/aura4.svg') }}" alt="" style="width: 220px;"/></a>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                    <ul class="list-style-two">
                                        <li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
                                        <li><span class="icon fa fa-envelope"></span> info@financ.com</li>
                                        <li><span class="icon fa fa-home"></span>380 St Kilda Road, Melbourne <br> VIC 3004, Australia</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Links</h4>
                                    <ul class="list-link">
                                        <li><a href="">Home</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">About us</a></li>
                                        <li><a href="">Testimonials</a></li>
                                        <li><a href="">News</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Support</h4>
                                    <ul class="list-link">
                                        <li><a href="">Contact Us</a></li>
                                        <li><a href="">Submit a Ticket</a></li>
                                        <li><a href="">Visit Knowledge Base</a></li>
                                        <li><a href="">Support System</a></li>
                                        <li><a href="">Refund Policy</a></li>
                                        <li><a href="">Professional Services</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h4>Gallery</h4>
                                    <div class="widget-content">
                                        <div class="images-outer clearfix">
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!-- Copyright Column -->
                    <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">2019 &copy; All rights reserved by <a href="#">Themexriver</a></div>
                    </div>
                    
                    <!-- Social Column -->
                    <div class="social-column col-lg-6 col-md-6 col-sm-12">
                        <ul>
                            <li class="follow">Follow us: </li>
                            <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fa fa-rss-square"></span></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('js/map-script.js') }}"></script>


</body>
</html>