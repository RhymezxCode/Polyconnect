<?php 
$pageName = "Polyconnect"; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/header.php");
require("core_php_file/login_check.php");
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

        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="img/cover-header-img/bg-01.jpg" data-overlay="0.6" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="img/cover-header-img/avatar-01.jpg" alt="">
                </div>

               <div class="cover--user-name">
                    <h2 class="h3 fw--600"><?php echo Login::full_name(); ?></h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
        </div>
        <!-- Cover Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li class="active"><a href="member-activity-personal.php">Activity</a></li>
                                    <li><a href="member-profile.php">Profile</a></li>
                                    <li><a href="member-friends.php">Friends</a></li>
                                    <li><a href="member-groups.php">Groups</a></li>
                                    <li><a href="member-forum-topics.php">Forum</a></li>
                                    <li><a href="member-media-all.php">Media</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav End -->

                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--60 clearfix">
                                <div class="filter--links float--left">
                                    <ul class="nav ff--primary">
                                        <li class="active"><a href="member-activity-persoanl.php">Personal</a></li>
                                        <li><a href="member-activity-mentions.php">Mentions</a></li>
                                        <li><a href="member-activity-favorites.php">Favorites</a></li>
                                        <li><a href="member-activity-friends.php">Friends</a></li>
                                        <li><a href="member-activity-groups.php">Groups</a></li>
                                    </ul>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="activityfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="updates" selected>Updates</option>
                                            <option value="friendships">Friendships</option>
                                            <option value="group-updates">Group Updats</option>
                                            <option value="membership">Membership</option>
                                            <option value="topics">Topics</option>
                                            <option value="replies">Replies</option>
                                            <option value="posts">Posts</option>
                                            <option value="comments">Comments</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Activity List Start -->
                            <div class="activity--list">
                                <!-- Activity Items Start -->
                                <ul class="activity--items nav">
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> posted an update</p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>

                                                <div class="activity--content">
                                                 <p>I have seen the answer to my questions</p>
                                                 </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> posted an update in the group <a href="group-home.php">Crazy Music Lovers</a></p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>

                                                <div class="activity--content">
                                                    <p>There are many but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                                </div>

                                                <div class="activity--action fw--700">
                                                    <a href="#">See More...</a>
                                                </div>

                                                <div class="activity--comments fs--12">
                                                    <ul class="acomment--items nav">
                                                        <li>
                                                            <div class="acomment--item clearfix">
                                                                <div class="acomment--avatar">
                                                                    <a href="member-activity-personal.php">
                                                                        <img src="img/activity-img/avatar-04.jpg" alt="">
                                                                    </a>
                                                                </div>

                                                                <div class="acomment--info">
                                                                    <div class="acomment--header">
                                                                        <p><a href="#"><?php echo Login::full_name(); ?></a> Replied</p>
                                                                    </div>

                                                                    <div class="acomment--meta">
                                                                        <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                                    </div>

                                                                    <div class="acomment--content">
                                                                        <p>Well Said!</p>
                                                                        <p>Love it..... <span style="color: #ec407a;">&hearts; &hearts; &hearts;</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> and <a href="member-activity-personal.php">Leticia J. Espinosa</a> are now friends</p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> posted an update in the group <a href="group-home.php">Crazy Music Lovers</a></p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>

                                                <div class="activity--content">
                                                    <div class="link--embed">
                                                        <a class="link--url" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" data-trigger="video_popup"></a>

                                                        <div class="link--video">
                                                            <img src="img/activity-img/link-video-poster.jpg" alt="">
                                                        </div>

                                                        <div class="link--info fs--12">
                                                            <div class="link--title">
                                                                <h4 class="h6">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</h4>
                                                            </div>

                                                            <div class="link--desc">
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                                            </div>

                                                            <div class="link--rel ff--primary text-uppercase">
                                                                <p>www.unknownneonnettle.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> posted an update in the group <a href="group-home.php">Crazy Music Lovers</a></p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>

                                                <div class="activity--content">
                                                    <div class="gallery--embed" data-trigger="gallery_popup">
                                                        <ul class="nav AdjustRow">
                                                            <li>
                                                                <a href="img/activity-img/gallery-embed-01.jpg">
                                                                    <img src="img/activity-img/gallery-embed-01.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="img/activity-img/gallery-embed-02.jpg">
                                                                    <img src="img/activity-img/gallery-embed-02.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="img/activity-img/gallery-embed-03.jpg">
                                                                    <img src="img/activity-img/gallery-embed-03.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="img/activity-img/gallery-embed-04.jpg" data-overlay="0.5">
                                                                    <img src="img/activity-img/gallery-embed-04.jpg" alt="">
                                                                    <span>24+ More</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="member-activity-personal.php">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="member-activity-personal.php"><?php echo Login::full_name(); ?></a> joined the group <a href="group-home.php">Crazy Music Lovers</a></p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                </ul>
                                <!-- Activity Items End -->
                            </div>
                            <!-- Activity List End -->
                        </div>

                        <!-- Load More Button Start -->
                        <div class="load-more--btn pt--30 text-center">
                            <a href="#" class="btn btn-animate">
                                <span>See More Activities<i class="fa ml--10 fa-caret-right"></i></span>
                            </a>
                        </div>
                        <!-- Load More Button End -->
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
                                <p>There are many, but the majority have suffered alteration in some  look even slightly believable.</p>
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