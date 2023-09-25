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
            <div class="container-fluid full__width__padding mt-5">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="dashboardarea__wraper">
                            <div class="dashboardarea__img">
                                <div class="dashboardarea__inner">
                                    <div class="dashboardarea__left">
                                        <div class="dashboardarea__left__img">
                                            <img src="{{ asset('assets/img/dashbord/dashbord__2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="dashboardarea__left__content font-semibold">
                                            <h1>Welcome, {{ Auth::user()->name }}</h1>
                                        </div>
                                    </div>
                                    <div class="dashboardarea__star">

                                    </div>
                                    <div class="dashboardarea__right">
                                        <div class="dashboardarea__right__button">
                                            <a class="default__button flex align-middle gap-1"
                                                href="{{ route('form') }}">Create a New Course
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard">
                <div class="container-fluid full__width__padding">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="dashboard__inner sticky-top">
                                {{-- <div class="dashboard__nav__title">
                                    <h6>Welcome, Micle Obema</h6>
                                </div>
                                <div class="dashboard__nav">
                                    <ul>
                                        <li>
                                            <a class="active" href="instructor-dashboard.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                                Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="instructor-profile.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                My Profile</a>
                                        </li>
                                        <li>
                                            <a href="instructor-message.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-book-open">
                                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                                </svg>
                                                Message</a><span class="dashboard__label">12</span>
                                        </li>
                                        <li>
                                            <a href="instructor-wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-bookmark">
                                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="instructor-reviews.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-star">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                                Reviews</a>
                                        </li>
                                        <li>
                                            <a href="instructor-my-quiz-attempts.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-help-circle">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <line x1="12" y1="17" x2="12.01"
                                                        y2="17"></line>
                                                </svg>
                                                My Quiz Attempts</a>
                                        </li>
                                        <li>
                                            <a href="instructor-order-history.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-shopping-bag">
                                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z">
                                                    </path>
                                                    <line x1="3" y1="6" x2="21"
                                                        y2="6"></line>
                                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                </svg>
                                                Order History</a>
                                        </li>
                                    </ul>
                                </div> --}}

                                <div class="dashboard__nav__title mt-40">
                                    <h6>Instructor</h6>
                                </div>
                                <div class="dashboard__nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('instructor') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-monitor">
                                                    <rect x="2" y="3" width="20"
                                                        height="14" rx="2" ry="2"></rect>
                                                    <line x1="8" y1="21" x2="16"
                                                        y2="21"></line>
                                                    <line x1="12" y1="17" x2="12"
                                                        y2="21"></line>
                                                </svg>
                                                My Courses</a>
                                        </li>
                                        <li>
                                            <a href="instructor-announcments.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-volume-1">
                                                    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                                </svg>
                                                Announcments</a>
                                        </li>
                                        <li>
                                            <a href="instructor-quiz-attempts.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg>
                                                Quiz Attempt</a>
                                        </li>
                                        <li>
                                            <a href="instructor-assignments.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-volume-1">
                                                    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                                </svg>
                                                Assignments</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="dashboard__nav__title mt-40">
                                    <h6>user</h6>
                                </div>

                                <div class="dashboard__nav">
                                    <ul>
                                        <li>
                                            <a href="instructor-settings.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                                Settings</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    this.closest('form').submit(); "
                                                    role="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-volume-1">
                                                        <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                                    </svg>
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>



                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            @yield('content')
                        </div>
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
