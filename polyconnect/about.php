<?php 
$pageName = "Polyconnect"; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/header.php");
?>

<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section style--1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg-black">
                <div class="container">
                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>En</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">En</a></li>
                                <li><a href="#">Bn</a></li>
                                <li><a href="#">In</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Header Topbar Links End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="header--topbar-social nav float--left hidden-xs">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- Header Topbar Social End -->

                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--right">
                    
                        <li>
                            <a href="member-profile.php" class="btn-link">
                                <i class="fa mr--8 fa-user-o"></i>
                                <span>My Account</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Header Topbar Links End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bg-black" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                             <!-- Header Navbar Logo Start -->
                        <div class="custom header--navbar-logo navbar-brand">
                            <a href="index.php">
                                <img src="img/logo-white.png" class="normal" alt="">
                                <img src="img/logo-black.png" class="sticky" alt="">
                            </a>
                        </div>
                        <!-- Header Navbar Logo End -->
                    </div>
   <!-- dropdown here -->
                    <?php 
                    require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
                    include(ROOTPATH."inc/dropdown_menu.php");
                    ?>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">About Us</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">About</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Section Start -->
        <div class="section pt--80 pb--40">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--40">
                        <img src="img/about-img/01.jpg" alt="">
                    </div>

                    <div class="col-md-6 pb--40">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="content fs--14">
                                <h3>About Us</h3>

</div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Features Section Start -->
        <section class="section bg-lighter pt--80 pb--40">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">530</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Stories / Topics Created</h3>
                            </div>

                            <div class="desc">
                           </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">30</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Member Online Right Now</h3>
                            </div>

                            <div class="desc">
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">1.5</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Active Group / Meeting Room</h3>
                            </div>

                            <div class="desc">
                            <p>Messages</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">03</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">New Event In Every Week</h3>
                            </div>

                            <div class="desc">
                            <p>messages</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section pt--80 pb--20">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--50">
                        <!-- Text Block Start -->
                        <div class="text--block pb--10">
                            <div class="title">
                                <h2 class="h2 fw--600">Why Choose Us?</h2>
                            </div>

                            <div class="content fs--14">
                            <p>messages</p>
                                </div>
                        </div>
                        <!-- Text Block End -->

                        <div class="row AdjustRow">
                            <div class="col-md-6 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-comments-o"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Individual Live Chat</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>messages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>
                            
                            <div class="col-md-6 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-wrench"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">User Friendly Settings</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>messages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>
                            
                            <div class="col-md-6 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-group"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Discover Amazing People</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>messages.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-md-6 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Times Fly With Us</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>messages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--1" data-overlay="0.3">
                            <img src="img/why-choose-us-img/video-poster-1.jpg" alt="">

                            <a href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="btn-link" data-trigger="video_popup">
                                <span><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                        <!-- Video Popup End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->

        <!-- History Section Start -->
        <section class="section bg-lighter pt--80 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">Our History</h2>
                    </div>

                    <div class="sub-title">
                    <p>messages</p>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Timeline Start -->
                <div class="timeline">
                    <ul class="nav MasonryRow" data-scroll-reveal="group">
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                     <p>messages</p>
                     </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2017</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                <p>messages</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2015</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                               <p>messages</p> </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2014</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                               <p></p>
                               </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2013</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                <p></p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2012</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>Messages</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">
                                    <p>January 2011</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Timeline End -->
            </div>
        </section>
        <!-- History Section End -->

<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>