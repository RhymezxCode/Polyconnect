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

        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="img/cover-header-img/bg-02.jpg" data-overlay="0.6" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar" data-overlay="0.3" data-overlay-color="primary">
                    <img src="img/cover-header-img/avatar-02.jpg" alt="">
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">Food Recipes</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 months ago</p>
                </div>

                <div class="cover--avatars">
                    <ul class="nav">
                        <li>
                            <a href="member-activity-personal.php" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/group-img/admin-avatar-01.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="member-activity-personal.php" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/group-img/admin-avatar-02.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="member-activity-personal.php" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/group-img/admin-avatar-03.jpg" alt="">
                            </a>
                        </li>
                    </ul>

                    <p>Group Admins</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
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
                                    <li><a href="group-home.php">Home</a></li>
                                    <li class="active"><a href="group-forum.php">Forum</a></li>
                                    <li><a href="group-members.php">Members</a></li>
                                    <li><a href="group-media.php">Media</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav End -->

                            <!-- Forum Header Start -->
                            <div class="forum--header pb--30">
                                <div class="forum--title">
                                    <h3 class="h3 fw--500 text-default">Test Forum</h3>
                                </div>
                            </div>
                            <!-- Forum Header End -->

                            <!-- Topics List Start -->
                            <div class="topics--list">
                                <table class="table">
                                    <thead class="ff--primary fs--14 text-darkest">
                                        <tr>
                                            <th>Forum</th>
                                            <th>Topics</th>
                                            <th>Post</th>
                                            <th>Frieshness</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="sub-forums.php" class="btn-link">User Interface Design</a></h4>

                                                <p>message</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">12</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">49</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.php" class="topic--author">
                                                    <span class="name">David J. Kleiner</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-01.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="sub-forums.php" class="btn-link">Front-End Engineering</a></h4>

                                                <p>message</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.php" class="topic--author">
                                                    <span class="name">Karen S. Barker</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-02.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="sub-forums.php" class="btn-link">Web Development</a></h4>

                                                <p>message</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">05</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">42</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.php" class="topic--author">
                                                    <span class="name">Stuart B. Figueroa</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-03.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Topics List End -->
                        </div>

                        <div class="alert mt--30">
                            <div class="alert--inner ff--primary text-white bg-primary">
                                <p>Oh bother! No topics were found here!</p>
                            </div>
                        </div>

                        <div class="alert mt--20">
                            <div class="alert--inner ff--primary text-white bg-primary">
                                <p>You must be logged in to create new topics.</p>
                            </div>
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