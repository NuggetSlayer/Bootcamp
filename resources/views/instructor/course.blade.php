@extends('layouts.main')


@section('sidebar')
    <div class="dashboard__inner sticky-top">
        <div class="dashboard__nav__title mt-40">
            <h6>Instructor</h6>
        </div>
        <div class="dashboard__nav">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-monitor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2">
                            </rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        My Courses</a>
                </li>
                <li>
                    <a href="student-enrolled-courses.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bookmark">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Enrolled Courses</a>
                </li>
                <li>
                    <a href="instructor-quiz-attempts.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                            </path>
                        </svg>
                        Quiz Attempt</a>
                </li>
                <li>
                    <a href="instructor-assignments.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-volume-1">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-settings">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
@endsection

@section('content')
    <div class="col-xl-9 col-lg-9 col-md-12">
        <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
            <img src="{{ asset('storage/' . $course->banner) }}" alt="blog">
        </div>

        <div class="blog__details__content__wraper">

            <div class="course__details__heading" data-aos="fade-up">
                <h3>{{ $course->title }}</h3>
            </div>
            <div class="course__details__paragraph mb-5" data-aos="fade-up">
                <p>{{ $course->description }}
                </p>
            </div>

            <h4 class="sidebar__title" data-aos="fade-up">Course Details</h4>
            <div class="course__details__wraper mb-5" data-aos="fade-up">
                <ul>
                    <li>
                        Course level : <span>{{ $course->category_name }}</span>
                    </li>
                    <li>
                        Language : <span>{{ $course->language_name }}</span>
                    </li>
                    <li>
                        Instructor : <span>{{ $course->name }}</span>
                    </li>
                    <li>
                        Created At : <span>{{ $course->created_at->format('D, d M Y') }}</span>
                    </li>
                    <li>
                        Last Updated At : <span>{{ $course->updated_at->format('D, d M Y') }}</span>
                    </li>
                </ul>

            </div>


            <div class="course__details__tab__wrapper" data-aos="fade-up">

                <div class="row">
                    <div class="col-xl-12">
                        <h4 class="sidebar__title" data-aos="fade-up">Course Videos</h4>
                    </div>
                </div>
                <div class="tab-content tab__content__wrapper" id="myTabContent">
                    <div class="tab-pane fade  active show" id="projects__two" role="tabpanel"
                        aria-labelledby="projects__two">

                        <div class="accordion content__cirriculum__wrap" id="accordionExample">
                            <div class="accordion-item">

                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $course->title }}
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        @forelse ($video as $item)
                                            <div class="scc__wrap">
                                                <div class="scc__info text-white flex gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-youtube">
                                                        <path
                                                            d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                                        </path>
                                                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02">
                                                        </polygon>
                                                    </svg>
                                                    <h5><span> Video :</span>{!! Str::limit(strip_tags($item->title), $limit = 60, $end = '...') !!}</h5>
                                                </div>
                                                <div class="scc__meta">
                                                    <a href="{{ route('delete-video', ['slug' => $item->slug]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('edit-video-form', ['slug' => $item->slug]) }}">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-pen-tool">
                                                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                                            <path d="M2 2l7.586 7.586"></path>
                                                            <circle cx="11" cy="11" r="2">
                                                            </circle>
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('video', ['slug' => $item->slug]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3">
                                                            </circle>
                                                        </svg>
                                                    </a>

                                                </div>
                                            </div>
                                        @empty
                                            <div class="no-data text-white text-center">
                                                No Data
                                            </div>
                                        @endforelse
                                        <div class="scc__wrap">
                                                <div class="dashboardarea__right">
                                                    <div class="dashboardarea__right__button">
                                                        <a class="default__button flex align-middle gap-1"
                                                            href="{{ route('video-form', ['id' => $course->id]) }}">
                                                            Add Video
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-film">
                                                                <rect x="2" y="2" width="20"
                                                                    height="20" rx="2.18" ry="2.18"></rect>
                                                                <line x1="7" y1="2" x2="7"
                                                                    y2="22">
                                                                </line>
                                                                <line x1="17" y1="2" x2="17"
                                                                    y2="22">
                                                                </line>
                                                                <line x1="2" y1="12" x2="22"
                                                                    y2="12">
                                                                </line>
                                                                <line x1="2" y1="7" x2="7"
                                                                    y2="7">
                                                                </line>
                                                                <line x1="2" y1="17" x2="7"
                                                                    y2="17">
                                                                </line>
                                                                <line x1="17" y1="17" x2="22"
                                                                    y2="17">
                                                                </line>
                                                                <line x1="17" y1="7" x2="22"
                                                                    y2="7">
                                                                </line>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
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

            <div class="course__details__heading" data-aos="fade-up">
                @can('isInstructor')
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="dashboardarea__right">
                                <div class="dashboardarea__right__button">
                                    <a class="default__button edit__button flex align-middle gap-1"
                                        href="{{ route('edit-course-form', ['slug' => $course->slug]) }}">Edit Course
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
                                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                            <path d="M2 2l7.586 7.586"></path>
                                            <circle cx="11" cy="11" r="2"></circle>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="dashboardarea__right">
                                <div class="dashboardarea__right__button">
                                    <a class="default__button delete__button flex align-middle gap-1"
                                        href="{{ route('delete-course', ['slug' => $course->slug]) }}">Delete Course
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>

        </div>
    </div>
@endsection
