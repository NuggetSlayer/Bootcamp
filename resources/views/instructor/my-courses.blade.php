@extends('layouts.main')

@section('header')
    <div class="row">
        <div class="col-xl-12">
            <div class="dashboardarea__wraper">
                <div class="dashboardarea__img">
                    <div class="dashboardarea__inner">
                        <div class="dashboardarea__left">
                            <div class="dashboardarea__left__img">
                                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4" bis_skin_checked="1">
                                    
                                    <div class="mt-2" x-show="! photoPreview" bis_skin_checked="1">
                                        <img src="https://ui-avatars.com/api/?name=A&amp;color=7F9CF5&amp;background=EBF4FF"
                                            alt="Abii" class="object-cover">
                                    </div>

                                </div>
                            </div>

                            <div class="dashboardarea__left__content font-semibold">
                                <h1>Welcome, {{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                        <div class="dashboardarea__star">

                        </div>
                        @can('isInstructor')
                            <div class="dashboardarea__right">
                                <div class="dashboardarea__right__button">
                                    <a class="default__button flex align-middle gap-1" href="{{ route('course-form') }}">Create
                                        a New
                                        Course
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endcan
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
    {{-- <div class="dashboard__content__wraper">
        <div class="dashboard__section__title ">
            <h4>Courses</h4>
            <a href="{{ route('form') }}">Create Course</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="dashboard__table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Language</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <tr class="dashboard__table__row">
                                    <td>{{ $item->title }}</td>
                                    <td>{!! Str::limit(strip_tags($item->description), $limit = 20, $end = '...') !!}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->language_name }}</td>
                                    <td class="flex gap-2">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </a>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-pen-tool">
                                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                                <path d="M2 2l7.586 7.586"></path>
                                                <circle cx="11" cy="11" r="2"></circle>
                                            </svg>
                                        </a>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-9 col-lg-9 col-md-12">
        <div class="dashboard__content__wraper">
            <div class="dashboard__section__title">
                <h4>Courses</h4>
            </div>
            <div class="row">
                <div class="tab-content tab__content__wrapper aos-init aos-animate">
                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                        aria-labelledby="projects__one">
                        <div class="row flex-wrap">
                            @forelse ($course as $item)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="gridarea__wraper">
                                        <div class="gridarea__img">
                                            <img src="{{ asset('storage/' . $item->banner) }}" alt="grid">
                                        </div>
                                        <div class="gridarea__content">
                                            <div class="gridarea__heading">
                                                <h3><a
                                                        href="{{ route('course', ['slug' => $item->slug]) }}">{!! Str::limit(strip_tags($item->title), $limit = 40, $end = '...') !!}</a>
                                                </h3>
                                            </div>
                                            <div class="gridarea__price">
                                                <p>{!! Str::limit(strip_tags($item->description), $limit = 60, $end = '...') !!}</p>
                                            </div>
                                            <div class="gridarea__bottom">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <div class="grid__badge pink__color">
                                                                {{ $item->language_name }}
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="grid__badge blue__color">{{ $item->name }}</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                @if (auth()->user() &&
                                        !auth()->user()->isInstructor())
                                    <div class="dashboardarea__right">
                                        <div class="dashboardarea__right__button be__instructor mx-auto">
                                            <a class="default__button flex align-middle gap-1"
                                                href="{{ route('apply-form', ['id' => Auth::id()]) }}">Be An Instructor
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="no-data text-center">
                                        Course Empty
                                    </div>
                                @endif
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
