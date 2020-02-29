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
                    <h2 class="h1 text-white">Blog</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Blog</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--30" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <div class="row MasonryRow">
                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.php"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Travel</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.php"><img src="img/posts-img/post-item-02.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-02.jpg" alt="">
                                                            <span>Carla W. Carter</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>05 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>3 Comments</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">Your guide to perfect rebranding</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Creative</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Design</span></a>
                                                        <a href="#"><span>Art</span></a>
                                                        <a href="#"><span>Drawing</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Video Start -->
                                        <div class="post--video">
                                            <a href="blog-details.php"><img src="img/posts-img/post-item-03.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Video End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-03.jpg" alt="">
                                                            <span>Carla W. Carter</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>30 Sep 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">Treat Your Pet's Skin the Way You Treat Your Own with Pet Caress + a Fun Twitter Party</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Pets</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Cat</span></a>
                                                        <a href="#"><span>Dog</span></a>
                                                        <a href="#"><span>Pet Care</span></a>
                                                        <a href="#"><span>Animal</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-03.jpg" alt="">
                                                            <span>Rebeca R. Gosnell</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>12 Aug 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">Classroomscreen.com: A Web Tool Teachers and Students will LOVE lorem ipsum has been the industries unknow printer took galley</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Technology</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>IT</span></a>
                                                        <a href="#"><span>Innovation</span></a>
                                                        <a href="#"><span>World</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.php"><img src="img/posts-img/post-item-04.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-04.jpg" alt="">
                                                            <span>Earl N. Kelly</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Feb 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">Tasty Stuffed Potato Dumplings Vegan</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Food</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Recipes</span></a>
                                                        <a href="#"><span>Potato</span></a>
                                                        <a href="#"><span>Burger</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.php"><img src="img/posts-img/post-item-05.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-05.jpg" alt="">
                                                            <span>Anne S. McCoy</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>13 Jul 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">You Don't Need a Studio for Pro Portraits -- Make the Most of What You DO Have</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Photography</span></a>
                                                        <a href="#"><span>Discover</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Photo</span></a>
                                                        <a href="#"><span>Discovery</span></a>
                                                        <a href="#"><span>Mountain</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom">
                                        <!-- Post Audio Start -->
                                        <div class="post--audio embed-responsive embed-responsive-16by9">
                                            <iframe src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/34019569&auto_play=false&hide_related=true&show_comments=false&show_user=false&show_reposts=false&visual=true&download=false&sharing=false"></iframe>
                                        </div>
                                        <!-- Post Audio End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-06.jpg" alt="">
                                                            <span>Randall E. Dempsey</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>17 Mar 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.php" class="btn-link">Bodak Yellow Cardi B / @IAMCARDIB</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Music</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Audio</span></a>
                                                        <a href="#"><span>Sound</span></a>
                                                        <a href="#"><span>Audio</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's unknown printer took a galley.</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.php" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-xs-12 pb--30">
                                    <!-- Page Count Start -->
                                    <div class="page--count">
                                        <label class="ff--primary fs--14 fw--500 text-darker">
                                            <span>Viewing</span>

                                            <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                            <input type="number" name="page-count" value="01" class="form-control form-sm">
                                            <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                            <span>of 68</span>
                                        </label>
                                    </div>
                                    <!-- Page Count End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
         
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