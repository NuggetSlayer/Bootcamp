@extends('layouts.main')

@section('header')
<div class="container-fluid full__width__padding">
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboardarea__wraper">
                <div class="dashboardarea__img">
                    <div class="dashboardarea__inner admin__dashboard__inner">
                        <div class="dashboardarea__left">
                            <div class="dashboardarea__left__img">
                                <img src="{{ asset('assets/img/dashbord/dashbord__2.jpg') }}" alt="">
                            </div>
                            <div class="dashboardarea__left__content font-semibold">
                                <h1>Hello {{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                        {{-- <div class="dashboardarea__right">
                            <div class="dashboardarea__right__button">
                                <a class="default__button" href="create-course.html">Create a New Course
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('sidebar')
    <div class="dashboard__inner sticky-top">
        <div class="dashboard__nav__title mt-40">
            <h6>Instructor</h6>
        </div>
        <div class="dashboard__nav">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-monitor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2">
                            </rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        My Courses</a>
                </li>
                <li>
                    <a href="{{ route('enrolled-courses') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bookmark">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Enrolled Courses</a>
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
        <div class="dashboard__content__wraper">
            <div class="dashboard__section__title">
                <h4>Dashboard</h4>
            </div>
            <div class="row">
                
                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                    <div class="dashboard__single__counter">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img src="{{ asset('assets/img/counter/counter__2.png') }}" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">{{ $instructor }}</span>

                                </div>
                                <p>Total Instructor</p>

                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                    <div class="dashboard__single__counter">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img src="{{ asset('assets/img/counter/counter__3.png') }}" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">{{ $user }}</span>

                                </div>
                                <p>Total Students</p>

                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
@endsection
