@extends('layouts.landing')

@section('content')
    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Course-Details</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Course-Details</li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img class=" shape__icon__img shape__icon__img__1" src="{{ asset('assets/img/herobanner/herobanner__1.png') }}"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__2" src="{{ asset('assets/img/herobanner/herobanner__2.png') }}"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__3" src="{{ asset('assets/img/herobanner/herobanner__3.png') }}"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__4" src="{{ asset('assets/img/herobanner/herobanner__5.png') }}"
                alt="photo">
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->

    <div class="blogarea__2 sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">

                    <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                        <img src="{{ asset('storage/' . $course->banner) }}" alt="blog">

                        <!-- <div class="registerarea__content course__details__video">
                                            <div class="registerarea__video">
                                                <div class="video__pop__btn">
                                                    <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img src="{{ asset('assets/img/icon/video.png') }}" alt=""></a>
                                                </div>


                                            </div>
                                        </div> -->
                    </div>

                    <div class="blog__details__content__wraper">
                        <div class="course__button__wraper" data-aos="fade-up">
                            <div class="course__button">
                                <a href="#">Featured</a>
                                <a class="course__2" href="#">Ux Design</a>
                            </div>
                            <div class="course__date">
                                <p>Last Update:<span> {{ $course->updated_at->format('D, d M Y') }}</span></p>
                            </div>
                        </div>
                        <div class="course__details__heading" data-aos="fade-up">
                            <h3>{{ $course->title }}</h3>
                        </div>
                        <div class="course__details__paragraph" data-aos="fade-up">
                            <p>
                                {{ $course->description }}
                            </p>
                        </div>


                        <div class="course__details__tab__wrapper mt-5" data-aos="fade-up">

                            <div class="tab-content tab__content__wrapper" id="myTabContent">
                                <div class="tab-pane fade  active show" id="projects__two" role="tabpanel"
                                    aria-labelledby="projects__two">

                                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Course Videos
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">

                                                    @forelse ($video as $item)
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-youtube">
                                                                        <path
                                                                            d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                                                        </path>
                                                                        <polygon
                                                                            points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02">
                                                                        </polygon>
                                                                    </svg>
                                                                    <span>Video :</span>{{ $item->title }}
                                                                </h5>
                                                            </div>
                                                            <div class="scc__meta">

                                                                <a href="{{ route('video', ['slug' => $item->slug]) }}"><span
                                                                        class="question"><i class="icofont-eye"></i>
                                                                        Preview</span></a>
                                                            </div>
                                                        </div>

                                                    @empty
                                                        <div class="no-data text-white text-center">
                                                            No Data
                                                        </div>
                                                    @endforelse

                                                    <div class="scc__wrap">
                                                        <div class="scc__meta">
                                                            <span>
                                                                <h1>{{ $video->count() }} Video</h1>
                                                            </span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-4 col-lg-4">

                    <div class="course__details__sidebar">
                        <div class="event__sidebar__wraper" data-aos="fade-up">


                            <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                                <img src="{{ asset('assets/img/blog/blog_7.png') }}" alt="blog">

                                <div class="registerarea__content course__details__video">
                                    <div class="registerarea__video">
                                        <div class="video__pop__btn">
                                            <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img
                                                    src="{{ asset('assets/img/icon/video.png') }}" alt=""></a>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <div class="course__summery__button">
                                <a class="default__button" href="#">Add To Cart</a>
                                <a class="default__button default__button--2" href="#">Buy Now</a>
                            </div>

                            <div class="course__summery__lists">
                                <ul>
                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Instructor:</span><span class="sb_content"><a
                                                    href="instructor-details.html">D. Willaim</a></span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Start Date</span><span class="sb_content">05 Dec
                                                2024</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Total Duration</span><span class="sb_content">08Hrs
                                                32Min</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Enrolled</span><span class="sb_content">100</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Lectures</span><span class="sb_content">30</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Skill Level</span><span class="sb_content">Basic</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Language</span><span class="sb_content">Spanish</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Quiz</span><span class="sb_content">Yes</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Certificate</span><span class="sb_content">Yes</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                            <h4 class="sidebar__title">Follow Us</h4>
                            <div class="follow__icon">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
