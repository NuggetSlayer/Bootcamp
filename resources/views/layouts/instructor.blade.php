<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Instructor Dashboard | Edurock - Education LMS Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins_plyr.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css ') }}">
    @vite('resources/css/app.css')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("is_dark");
        }
        if (localStorage.getItem("theme-color") === "light") {
            ç
            document.documentElement.classList.remove("is_dark");
        }
    </script>
    @livewireStyles
</head>

<body class="body__wrapper">
    <!-- pre loader area start -->
    <div id="back__preloader">
        <div id="back__circle_loader"></div>
        <div class="back__loader_logo">
            <img src="{{ asset('assets/img/pre.png') }}" alt="Preload">
        </div>
    </div>
    <!-- pre loader area end -->


    <main class="main_wrapper overflow-hidden h-screen">
        <!-- Mobile Menu Start Here -->
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap headerarea">

                    <div class="mobile-navigation">

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="../index.html">Home</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="../index.html">Homes Light</a>
                                            <ul class="dropdown">
                                                <li><a href="../index.html">Home (Default)</a></li>
                                                <li><a href="../home-2.html">Elegant</a></li>
                                                <li><a href="../home-3.html">Classic</a></li>
                                                <li><a href="../home-4.html">Classic LMS</a></li>
                                                <li><a href="../home-5.html">Online Course </a></li>
                                                <li><a href="../home-6.html">Marketplace </a></li>
                                                <li><a href="../home-7.html">University</a></li>
                                                <li><a href="../home-8.html">eCommerce</a></li>
                                                <li><a href="../home-9.html">Kindergarten</a></li>
                                                <li><a href="../home-10.html">Machine Learning</a></li>
                                                <li><a href="../home-11.html">Single Course</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="../index.html">Homes Dark</a>
                                            <ul class="dropdown">
                                                <li><a href="../index-dark.html">Home Default (Dark)</a></li>
                                                <li><a href="../home-2-dark.html">Elegant (Dark)</a></li>
                                                <li><a href="../home-3-dark.html">Classic (Dark)</a></li>
                                                <li><a href="../home-4-dark.html">Classic LMS (Dark)</a></li>
                                                <li><a href="../home-5-dark.html">Online Course (Dark)</a></li>
                                                <li><a href="../home-6-dark.html">Marketplace (Dark)</a></li>
                                                <li><a href="../home-7-dark.html">University (Dark)</a></li>
                                                <li><a href="../home-8-dark.html">eCommerce (Dark)</a></li>
                                                <li><a href="../home-9-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="../home-10-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="../home-11-dark.html">Single Course (Dark)</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="#">Pages</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="../about.html">About</a></li>
                                                <li><a href="../about-dark.html">About (Dark)<span
                                                            class="mega__menu__label new">New</span></a></li>
                                                <li><a href="../blog.html">Blog</a></li>
                                                <li><a href="../blog-dark.html">Blog (Dark)</a></li>
                                                <li><a href="../blog-details.html">Blog Details</a></li>
                                                <li><a href="../blog-details-dark.html">Blog Details (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="../error.html">Error 404</a></li>
                                                <li><a href="../error-dark.html">Error (Dark)</a></li>
                                                <li><a href="../event-details.html">Event Details</a></li>
                                                <li><a href="../zoom/zoom-meetings.html">Zoom<span
                                                            class="mega__menu__label">Online Call</span></a></li>
                                                <li><a href="../zoom/zoom-meetings-dark.html">Zoom Meeting (Dark)</a>
                                                </li>
                                                <li><a href="../zoom/zoom-meeting-details.html">Zoom Meeting
                                                        Details</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="../zoom/zoom-meeting-details-dark.html">Meeting Details
                                                        (Dark)</a>
                                                </li>
                                                <li><a href="../login.html">Login</a></li>
                                                <li><a href="../login-dark.html">Login (Dark)</a></li>
                                                <li><a href="#">Maintenance</a></li>
                                                <li><a href="#">Maintenance (Dark)</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 4</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Terms & Condition (Dark)</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Privacy Policy (Dark)</a></li>
                                                <li><a href="#">Success Stories</a></li>
                                                <li><a href="#">Success Stories (Dark)</a></li>
                                                <li><a href="#">Work Policy</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img
                                                        src="{{ asset('assets/') }}../img/mega/mega_menu_2.png"
                                                        alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="menu-item-has-children "><a href="../course.html">Courses</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="../course.html">Grid <span class="mega__menu__label">All
                                                            Courses</span></a></li>
                                                <li><a href="../course-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="../course-grid.html">Course Grid</a></li>
                                                <li><a href="../course-grid-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="../course-list.html">Course List</a></li>
                                                <li><a href="../course-list-dark.html">Course List (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="../course-details.html">Course Details</a></li>
                                                <li><a href="../course-details-dark.html">Course Details (Dark)</a>
                                                </li>
                                                <li><a href="../course-details-2.html">Course Details 2</a></li>
                                                <li><a href="../course-details-2-dark.html">Details 2 (Dark)</a></li>
                                                <li><a href="../course-details-3.html">Course Details 3</a></li>
                                                <li><a href="../course-details-3.html">Details 3 (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="become-an-instructor.html">Become An Instructor</a>
                                                <li><a href="create-course.html">Create Course <span
                                                            class="mega__menu__label">Career</span></a></li>
                                                <li><a href="../instructor.html">Instructor</a></li>
                                                <li><a href="../instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="../instructor-details.html">Instructor Details</a></li>
                                                <li><a href="../lesson.html">Course Lesson<span
                                                            class="mega__menu__label new">New</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img
                                                        src="{{ asset('assets/') }}../img/mega/mega_menu_1.png"
                                                        alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="admin-dashboard.html">Dashboard</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Admin</a>

                                            <ul class="dropdown">
                                                <li><a href="admin-dashboard.html">Admin Dashboard</a></li>
                                                <li><a href="admin-profile.html">Admin Profile</a></li>
                                                <li><a href="admin-message.html">Message</a></li>
                                                <li><a href="admin-course.html">Courses</a></li>
                                                <li><a href="admin-reviews.html">Review</a></li>
                                                <li><a href="admin-quiz-attempts.html">Admin Quiz</a></li>

                                                <li><a href="admin-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Instructor</a>
                                            <ul class="dropdown">
                                                <li><a href="instructor-dashboard.html">Inst. Dashboard</a></li>
                                                <li><a href="instructor-profile.html">Inst. Profile</a></li>
                                                <li><a href="instructor-message.html">Message</a></li>
                                                <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                                <li><a href="instructor-reviews.html">Review</a></li>
                                                <li><a href="instructor-my-quiz-attempts.html">My Quiz</a></li>
                                                <li><a href="instructor-order-history.html">Order History</a></li>
                                                <li><a href="instructor-course.html">My Courses</a></li>
                                                <li><a href="instructor-announcments.html">Announcements</a></li>
                                                <li><a href="instructor-quiz-attempts.html">Quiz Attempts</a></li>
                                                <li><a href="instructor-assignments.html">Assignment</a></li>
                                                <li><a href="instructor-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Student</a>
                                            <ul class="dropdown">
                                                <li><a href="student-dashboard.html">Dashboard</a></li>
                                                <li><a href="student-profile.html">Profile</a></li>
                                                <li><a href="student-message.html">Message</a></li>
                                                <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                                <li><a href="student-wishlist.html">Wishlist</a></li>
                                                <li><a href="student-reviews.html">Review</a></li>
                                                <li><a href="student-my-quiz-attempts.html">My Quiz</a></li>
                                                <li><a href="student-assignments.html">Assignment</a></li>
                                                <li><a href="student-settings.html">Settings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="ecommerce/shop.html">eCommerce</a>
                                    <ul class="dropdown">
                                        <li><a href="../ecommerce/shop.html">Shop<span
                                                    class="mega__menu__label">Online
                                                    Store</span></a></li>
                                        <li><a href="../ecommerce/product-details.html">Product Details</a></li>
                                        <li><a href="../ecommerce/cart.html">Cart</a></li>
                                        <li><a href="../ecommerce/checkout.html">Checkout</a></li>
                                        <li><a href="../ecommerce/wishlist.html">Wishlist</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i
                                class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="single-mobile-curr-lang">
                                    <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                                    <div class="lang-curr-dropdown curr-dropdown-active">
                                        <ul>
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">Real</a></li>
                                            <li><a href="#">BDT</a></li>
                                        </ul>
                                    </div>
                                </div> -->

                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i
                                class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="../login.html">Login</a></li>
                                <li><a href="../login.html">/ Create Account</a></li>
                                <li><a href="../login.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                    <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end Here -->

        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->

        <!-- dashboardarea__area__start  -->
        <div class="dashboardarea sp_bottom_100">
            <div class="container-fluid full__width__padding mt-4">
                @yield('header')
            </div>

            <div class="dashboard">
                <div class="container-fluid full__width__padding">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            
                            @yield('sidebar')
                        </div>
                            @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- dashboardarea__area__end   -->


    </main>

    <div class="footerarea">
        <div class="container">
            <div class="footerarea__copyright__wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="footerarea__copyright__content">
                            <p>© 2023 Powered by <a href="#">Edurock</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="footerarea__copyright__list">
                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- footer__section__end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/plugin_plyr.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.getElementById("light--to-dark-button")?.classList.add("dark--mode");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.getElementById("light--to-dark-button")?.classList.remove("dark--mode");
        }
    </script>

    @livewireScripts

</body>

</html>
