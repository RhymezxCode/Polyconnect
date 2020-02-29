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
                            <a href="cart.php" title="Cart" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-link">
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
                    <h2 class="h1 text-white">Contact</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Contact</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Section Start -->
        <div class="contact--section pt--80 pb--20">
            <div class="container">
                <!-- Map Start -->
                <div class="map mb--80" data-trigger="map" data-map-options='{"latitude": "23.790546", "longitude": "90.375583", "zoom": "16", "api_key": "AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"}'></div>
                <!-- Map End -->

                <div class="row">
                    <div class="col-md-3 pb--60">
                        <!-- Contact Info Items Start -->
                        <div class="contact-info--items" data-scroll-reveal="group">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-map-o"></i>Address :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p>Yabatech</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-envelope-o"></i>E-mail :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="mailto:info@domain.com" class="btn-link">info@domain.com</a>, <a href="mailto:support@domain.com" class="btn-link">support@domain.com</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-phone"></i>Telephone :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="tel:(+00)123123456" class="btn-link">+2347088808260</a>, <a href="tel:(+00)123123456" class="btn-link">(+00) 123123456</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info Items End -->
                    </div>

                    <div class="col-md-9 pb--60">
                        <!-- Contact Form Start -->
                        <div class="contact--form" data-form="ajax">
                            <div class="contact--title">
                                <h3 class="h4">Drop Us A Line</h3>
                            </div>

                            <div class="contact--subtitle pt--15">
                                <h4 class="h6 fw--400 text-darkest">Don’t worry ! your e-mail address will not published.</h4>
                            </div>

                            <div class="contact--notes ff--primary mt--2">
                                <p>(Required field are marked *)</p>
                            </div>

                            <form action="forms/contact-form.php" method="post">
                                <div class="row gutter--20">
                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-primary mt--10">Send Message</button>
                                    </div>
                                </div>

                                <div class="status"></div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>