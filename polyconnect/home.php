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
        <header class="header--section style--2">
            <!-- Header Topbar Start -->
            <div class="header--topbar">
                <div class="container">
                    <!-- Logo Start -->
                    <div class="header--topbar-logo float--left">
                        <a href="index.php"><img class="custom" src="img/logo-black.png" alt=""></a>
                    </div>
                    <!-- Logo End -->

                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--right">
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

                             <li>
                            <a href="notification.php" title="notification" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-get-pocket"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>

                        <li>
                            <a href="core_php_file/logout.php" title="Logout" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-user-o"></i>
                            </a>
                        </li>
                    </ul>
           <!-- Header Topbar Links End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bg-dark" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle style--2 collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Header Search Start -->
                    <div class="header--search style--1 float--right" data-form="validate">
                        <form action="#">
                            <input type="text" name="search" placeholder="I’m looking for..." class="form-control" required>

                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search End -->
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
        <section class="banner--section">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="img/5.jpg" data-overlay="0.5">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80">
                                            <div class="title">
                                                <h1 class="h2 text-white">Welcome To Polyconnect Community</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h1 text-white">Connect, Share &amp; Engage</h2>
                                            </div>

                                            <div class="desc fs--16">
                                                <p>If you are a new student, and you need answers to your questions ....
                                                our forums are opened</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">See Members</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="img/6.jpg" data-overlay="0.5">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80">
                                            <div class="title">
                                                <h1 class="h2 text-white">Welcome To Polyconnect Community</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h1 text-white">Connect, Share &amp; Engage</h2>
                                            </div>

                                            <div class="desc fs--16">
                                                <p> Polyconnect is a social network for polytechnic students</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">See Members</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="img/4.jpg" data-overlay="0.5">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80">
                                            <div class="title">
                                                <h1 class="h2 text-white">Welcome To Polyconnect Community</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h1 text-white">Connect, Share &amp; Engage</h2>
                                            </div>

                                            <div class="desc fs--16">
                                                <p>We Connect  Students through out the polytechnics to share ideas and resources</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">See Members</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

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
                                <p> </p>
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
                                <p> </p>
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
                                <h3 class="h2 fs--16">Active Forums</h3>
                            </div>

                            <div class="desc">
                                <p> </p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

             
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- How It Works Section Start -->
        <section class="section pt--70 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">How It Works?</h2>
                    </div>

                    <div class="sub-title">
                        <p> </p>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-7 pb--40">
                        <div class="row gutter--15 AdjustRow" data-scroll-reveal="group">
                            <div class="col-xs-4 pb--15">
                                <img src="img/how-it-works-img/01.jpg" alt="">
                            </div>

                            <div class="col-xs-4 pb--15">
                                <img src="img/how-it-works-img/02.jpg" alt="">
                            </div>

                            <div class="col-xs-4 pb--15">
                                <img src="img/how-it-works-img/03.jpg" alt="">
                            </div>

                            <div class="col-xs-12">
                                <img src="img/how-it-works-img/04.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 pb--40">
                        <!-- Info Items Start -->
                        <div class="info--items" data-scroll-reveal="group">
                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-01.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Create An Account</h3>
                                    </div>

                                    <div class="desc">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-02.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Add Friends &amp; Groups</h3>
                                    </div>

                                    <div class="desc">
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-03.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Start Discussion on your topic of interest</h3>
                                    </div>

                                    <div class="desc">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-04.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Share With Friends</h3>
                                    </div>

                                    <div class="desc">
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->
                        </div>
                        <!-- Info Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works Section End -->

        <!-- Most Popular Groups Section Start -->
        <section class="section bg-lighter pt--70 pb--70">
            <div class="container">
                <!-- Box Nav Start -->
                <div class="box--nav clearfix">
                    <h2 class="h2 fw--600 float--left">Most Popular Groups</h2>

                    <ul class="nav ff--primary float--right">
                        <li class="active"><a href="#boxItemsTab01" class="btn btn-default" data-toggle="tab">Newest</a></li>
                        <li><a href="#boxItemsTab02" class="btn btn-default" data-toggle="tab">Active</a></li>
                        <li><a href="#boxItemsTab03" class="btn btn-default" data-toggle="tab">Popular</a></li>
                        <li><a href="#boxItemsTab04" class="btn btn-default" data-toggle="tab">Alphabetic</a></li>
                    </ul>
                </div>
                <!-- Box Nav End -->

                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade in active" id="boxItemsTab01">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.php">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.php">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.php" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab02">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.php" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab03">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.php" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab04">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.php" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>message</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.php" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->
                </div>
                <!-- Tab Content End -->
            </div>
        </section>
        <!-- Most Popular Groups Section End -->

        <!-- Members and Testimonial Section Start -->
        <section class="section pt--70 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pb--60">
                        <!-- Section Title Start -->
                        <div class="section--title pb--20">
                            <div class="title">
                                <h2 class="h2">Most Popular Members</h2>
                            </div>
                        </div>
                        <!-- Section Title End -->

                        <!-- Member Slider Start -->
                        <div class="member--slider owl-carousel" data-owl-items="4" data-owl-autoplay="false" data-bg-img="img/members-img/pattern-bg.png" data-owl-nav="true" data-owl-center="true" data-owl-responsive='{"0": {"items": "1"}, "486": {"items": "3"}, "992": {"items": "4"}}'>
                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.php" class="btn-link">
                                                <img src="img/members-img/member-01.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.php" class="btn-link">Rosa R. Secor</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.php" class="btn-link">
                                                <img src="img/members-img/member-02.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.php" class="btn-link">Juan Bishop</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.php" class="btn-link">
                                                <img src="img/members-img/member-03.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.php" class="btn-link">Kelly Salazar</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.php" class="btn-link">
                                                <img src="img/members-img/member-04.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.php" class="btn-link">Gregory L. Caudill</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.php" class="btn-link">
                                                <img src="img/members-img/member-05.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.php" class="btn-link">William P. Waite</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 months ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->
                        </div>
                        <!-- Member Slider End -->
                    </div>

                    <div class="col-md-5 pb--60">
                        <!-- Section Title Start -->
                        <div class="section--title pb--20">
                            <div class="title">
                                <h2 class="h2">Show Some Sweet Love</h2>
                            </div>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Items Start -->
                        <div class="testimonial--items owl-carousel" data-owl-dots="true" data-owl-margin="10" data-owl-autoplay="false">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/01.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Polyconnect is a place that connects a lot of polytechnic students together, bring answers to questions easier.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Awodire babajide samuel ( Founder of polyconnect )</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/02.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ever.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Philip K. Rice &amp; Nina B. Bandy</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/03.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ever.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Philip K. Rice &amp; Nina B. Bandy</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <!-- Testimonial Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Members and Testimonial Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section bg-lighter pt--80 pb--20">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--60">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--2" data-overlay="0.3">
                            <img src="img/why-choose-us-img/video-poster-2.jpg" alt="">

                            <a href="https://www.youtube.com/watch?v=YE7VzlLtp-4" data-overlay="0.5" data-overlay-color="primary" data-trigger="video_popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Popup End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="title">
                                <h2 class="h2 fw--600">Why Choose Us?</h2>
                            </div>

                            <div class="content fs--14">
                                <p>We have connection with students of a polytechics, you will be able to get answers to your questions within a short time </p>
                            </div>

                            <div class="action">
                                <a href="#" class="btn btn-default">Read More<i class="fa ml--10 fa-caret-right"></i></a>
                                <a href="register.php" class="btn btn-primary">Get Started<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->

        <!-- FAQ and Download Section Start -->
        <section class="section pt--70 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <div class="title pb--20">
                                <h2 class="h2 fw--600">Frequently Asked Question</h2>
                            </div>

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>How can I gain admission into a polytechnic?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <p>Take a jamb exam, put the name of the polytechnic in the choice of school and register it.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem02" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What are the benefits of this social network?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="content collapse">
                                    <div class="content--inner">
                                        <p> Many benefits, ranging from connecting students to answers questions</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem03" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>How can i create a topic / discussion on here?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="content collapse">
                                    <div class="content--inner">
                                        <p> Goto the forum page and create a topic from there</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->
                    </div>

                    <div class="col-md-7 pb--60">
                        <!-- Download Block Start -->
                        <div class="download--block" data-scroll-reveal="group">
                            <div class="img">
                                <img src="img/download-img/mobile.png" alt="">
                            </div>

                            <div class="info">
                                <div class="title">
                                    <h2 class="h2 fw--600">Download Application &amp; Get More Features</h2>
                                </div>

                                <div class="content fs--12">
                                    <p>polyconnect is on playstore and app store</p>
                                </div>

                                <div class="action text-uppercase">
                                    <a href="#" class="btn btn-sm btn-google"><i class="fa mr--8 fa-play"></i>Play Store</a>
                                    <a href="#" class="btn btn-sm btn-apple"><i class="fa mr--8 fa-apple"></i>App Store</a>
                                </div>
                            </div>
                        </div>
                        <!-- Download Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ and Download Section End -->

<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>