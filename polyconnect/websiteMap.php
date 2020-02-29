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
                            <a href="login.php" class="btn-link">
                                <i class="fa mr--8 fa-user-o"></i>
                                <span>Login</span>
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
                        <button type="button" class="navbar-toggle style--1 collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Header Navbar Logo Start -->
                        <div class="header--navbar-logo navbar-brand">
                            <a href="index.php">
                                <img src="img/logo-white.png" class="custom normal" alt="">
                                <img src="img/logo-black.png" class="custom sticky" alt="">
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

        <!-- Banner Section Start -->
        <section class="banner--section" data-bg-img="img/preview-img/banner-bg.jpg" data-overlay="0.7">
            <div class="container">
                <!-- Banner Content Start -->
                <div class="banner--content pt--100 pb--100 text-center">
                    <div class="title pb--10">
                        <h1 class="h4 text-white">Responsive and Retina Ready Bootstrap Based 40 Demo Templates</h1>
                    </div>

                    <div class="sub-title pb--10">
                        <h2 class="h2 text-white">SociFly - Multipurpose Social Network HTML5 Template</h2>
                    </div>

                    <div class="action eq text-uppercase">
                        <a href="#demos" class="btn btn-white" data-trigger="smoothScroll">Website map</a>
              
                    </div>
                </div>
                <!-- Banner Content End -->
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Demos Section Start -->
        <section id="demos" class="pt--70">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined">
                        <h2 class="h2">All web pages on polyconnect</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="home-1.php" class="btn-link text-darkest text-center" target="_blank">
                                <img src="img/preview-img/home-1.jpg" alt="">

                                <span>Home Version 1</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="home-2.php" class="btn-link text-darkest text-center" target="_blank">
                                <img src="img/preview-img/home-2.jpg" alt="">

                                <span>Home Version 2</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="home-3.php" class="btn-link text-darkest text-center" target="_blank">
                                <img src="img/preview-img/home-3.jpg" alt="">

                                <span>Home Version 3</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-0 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="home-4.php" class="btn-link text-darkest text-center" target="_blank">
                                <img src="img/preview-img/home-4.jpg" alt="">

                                <span>Home Version 4</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Demos Section End -->

        <!-- Demos Section Start -->
        <section class="pt--150 pb--20 bg-primary section--arrow">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined lined-white">
                        <h2 class="h2 text-white">Pages</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="about.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/about.jpg" alt="">

                                <span class="text-white">About Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="faq.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/faq.jpg" alt="">

                                <span class="text-white">FAQ Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="contact.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/contact.jpg" alt="">

                                <span class="text-white">Contact Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="activity.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/activity.jpg" alt="">

                                <span class="text-white">Activity Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="members.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/members.jpg" alt="">

                                <span class="text-white">Members Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-activity-personal.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-activity.jpg" alt="">

                                <span class="text-white">Member Activity Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-profile.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-profile.jpg" alt="">

                                <span class="text-white">Member Profile Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-friends.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-friends.jpg" alt="">

                                <span class="text-white">Member Friends Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-groups.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-groups.jpg" alt="">

                                <span class="text-white">Member Groups Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-forum-topics.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-forum.jpg" alt="">

                                <span class="text-white">Member Forum Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="member-media-all.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/member-media.jpg" alt="">

                                <span class="text-white">Member Media Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="groups.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/groups.jpg" alt="">

                                <span class="text-white">Groups Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="group-home.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/group-activity.jpg" alt="">

                                <span class="text-white">Group Activity Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="group-forum.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/group-forum.jpg" alt="">

                                <span class="text-white">Group Forum Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="group-members.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/group-members.jpg" alt="">

                                <span class="text-white">Group Members Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="group-media.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/group-media.jpg" alt="">

                                <span class="text-white">Group Media Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="forums.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/forums.jpg" alt="">

                                <span class="text-white">Forums Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="topics.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/topics.jpg" alt="">

                                <span class="text-white">Topics Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="topic-replies.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/topic-replies.jpg" alt="">

                                <span class="text-white">Topic Replies Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="products.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/products.jpg" alt="">

                                <span class="text-white">Products Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="product-details.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/product-details.jpg" alt="">

                                <span class="text-white">Product Details Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="cart.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/cart.jpg" alt="">

                                <span class="text-white">Cart Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="checkout.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/checkout.jpg" alt="">

                                <span class="text-white">Checkout Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="blog-sidebar-right.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/blog-sidebar-right.jpg" alt="">

                                <span class="text-white">Blog Page (Right Sidebar)</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="blog-sidebar-left.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/blog-sidebar-left.jpg" alt="">

                                <span class="text-white">Blog Page (Left Sidebar)</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="blog-details.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/blog-details.jpg" alt="">

                                <span class="text-white">Blog Details Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="coming-soon.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/coming-soon.jpg" alt="">

                                <span class="text-white">Coming Soon Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="404.php" class="btn-link text-center" target="_blank">
                                <img src="img/preview-img/404.jpg" alt="">

                                <span class="text-white">404 Page</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Demos Section End -->

        <!-- Features Section Start -->
        <section class="pt--150 pb--20 section--arrow section--arrow-primary">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined">
                        <h2 class="h2">Features</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Based on Bootstrap</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Fully Responsive Design</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">800+ Google Fonts</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Clean Design</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Cross Browser Supported</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Sticky Menu</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Dropdown Menu</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Megamenu Menu</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Boxed &amp; Wide Layouts</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">10 Color Schemes</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">AJAX Contact Form</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Well Documentation</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Well Commented Code</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">W3 Validated Code</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">RTL Support</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Retina Ready</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">250+ HTML Pages</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">8 Homepage Layouts</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">4+ Post Layouts</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">3 Unique Blog Styles</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">3 Archive Pages</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">9 Unique Menu Styles</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">45 Custom Widgets</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Ajax + Mailchimp Widget</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">eCommerce Ready</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Special Pricing &amp; Shop Page</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Coming Soon Page</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Google Map</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Lifetime Updates</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--22 fw--500">Exclusive Support</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->
<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>