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
                    <h2 class="h1 text-white">FAQ</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Frequently Asked Question</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- FAQ Section Start -->
        <section class="faq--section pt--60 pb--20">
            <div class="container">
                <!-- Text Block Start -->
                <div class="text--block pb--60">
                    <div class="content fs--14">
                        <h4>Frequently Asked Question</h4>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                    </div>
                </div>
                <!-- Text Block End -->

                <div class="row">
                    <div class="col-md-6 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <!-- FAQ Item Start -->
                            <div class="faq--item style--2 panel">
                                <div class="title">
                                    <h3 class="h6">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is Social Media?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--2 panel">
                                <div class="title">
                                    <h3 class="h6">
                                        <a href="#faqItem02" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Do I really Need Social Media?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="content collapse">
                                    <div class="content--inner">
                                        <p>There are many but the majority have suffered alteration in some form, by injected humour, or randomised words even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--2 panel">
                                <div class="title">
                                    <h3 class="h6">
                                        <a href="#faqItem03" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What Should I Post?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="content collapse">
                                    <div class="content--inner">
                                        <p>There are many, but the majority have suffered alteration in some form, by injected humour, or randomised words even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--2 panel">
                                <div class="title">
                                    <h3 class="h6">
                                        <a href="#faqItem04" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>How Often Should I Post?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem04" class="content collapse">
                                    <div class="content--inner">
                                        <p>There are many, but the majority have suffered alteration in some form, by injected humour, or randomised words even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--2 panel">
                                <div class="title">
                                    <h3 class="h6">
                                        <a href="#faqItem05" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>How To Handle Negative Nomments On Social Media?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem05" class="content collapse">
                                    <div class="content--inner">
                                        <p>There are many, but the majority have suffered alteration in some form, by injected humour, or randomised words even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->

                        <!-- Text Block Start -->
                        <div class="text--block pt--40" data-scroll-reveal="bottom">
                            <div class="content fs--14">
                                <h4>Can’t Find The Answer to Your Question?</h4>

                                <p>If you can’t find the answer to your question that you are looking for. don’t worry please contact <a href="#">+2347088808260</a> or <a href="#">0123123</a>, or e-mail <a href="#">babajideawodire@yahoo.com</a></p>
                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--1" data-scroll-reveal="group">
                            <img src="img/faq-img/01.jpg" alt="">
                            <img src="img/faq-img/02.jpg" alt="">
                        </div>
                        <!-- Image Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->
<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>