<?php 
$pageName = "Polyconnect"; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/header.php");
//require("core_php_file/Login_check.php");
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
                    <h2 class="h1 text-white">Members</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Members</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">All Members : 30,000</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Last Active</option>
                                            <option value="new-registered">New Registerd</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Member Items Start -->
                            <div class="member--items">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">
                                                    </a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-06.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Eileen K. Ruiz</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-07.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Byron H. Robinson</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-08.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Kelly Brewer</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-09.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Jessica James</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-10.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Kelvin S. Williams</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-11.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Denise K. Chambers</a>
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
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-12.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Brendan K. Heywood</a>
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
                                        <!-- Member Item End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>of 2,500</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Find A Buddy</h2>

                            <!-- Buddy Finder Widget Start -->
                            <div class="buddy-finder--widget">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">I Am</span>

                                                    <select name="gender" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Looking For</span>

                                                    <select name="lookingfor" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Age</span>

                                                    <select name="age" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="18to25">18 to 25</option>
                                                        <option value="25to30">25 to 30</option>
                                                        <option value="30to35">30 to 35</option>
                                                        <option value="35to40">35 to 40</option>
                                                        <option value="40plus">40+</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">City</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="newyork">New York</option>
                                                        <option value="California">California</option>
                                                        <option value="Atlanta">Atlanta</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Filter Country</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="unitedstates">United States</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="turkey">Turkey</option>
                                                        <option value="vietnam">Vietnam</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Buddy Finder Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Notice</h2>

                            <!-- Text Widget Start -->
                            <div class="text--widget">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  look even slightly believable.</p>
                            </div>
                            <!-- Text Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Forums</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="sub-forums.php">User Interface Design<span>(12)</span></a></li>
                                    <li><a href="sub-forums.php">Front-End Engineering<span>(07)</span></a></li>
                                    <li><a href="sub-forums.php">Web Development<span>(37)</span></a></li>
                                    <li><a href="sub-forums.php">Social Media Marketing<span>(13)</span></a></li>
                                    <li><a href="sub-forums.php">Content Marketing<span>(28)</span></a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Archives</h2>

                            <!-- Nav Widget Start -->
                            <div class="nav--widget">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - July 2017</span>
                                            <span class="count">(86)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dce 2016</span>
                                            <span class="count">(328)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dec 2015</span>
                                            <span class="count">(427)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Advertisements</h2>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/widgets-img/ad.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>