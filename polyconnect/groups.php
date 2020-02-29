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
                    <h2 class="h1 text-white">Groups</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Groups</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">All Groups : 25</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Last Active</option>
                                            <option value="most-members">Most Members</option>
                                            <option value="newly-created">Newly Created</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->
                            
                            <!-- Box Items Start -->
                            <div class="box--items">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/07.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-television"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Movies ( Let’s Enjoy )</a></h2>
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/08.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-street-view"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Yoga ( Be Happy )</a></h2>
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/09.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-qq"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Fashion ( Just Take A Tour )</a></h2>
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/10.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-music"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Sports ( Injoy Yourself )</a></h2>
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/11.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-tree"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Lifestyle ( I don’t care )</a></h2>
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.php" class="img" data-overlay="0.1">
                                                <img src="img/group-img/12.jpg" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-deaf"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="group-home.php">Gym ( Love Pets )</a></h2>
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
                                </div>
                            </div>
                            <!-- Box Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>of 28</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->
<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/footer.php");
?>