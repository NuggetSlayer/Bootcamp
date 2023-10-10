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
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="accordion-item">
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="become__instructor__form">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5">
                                    <div class="dashboard__form__wraper">
                                        <div class="dashboard__form__input">
                                            <label for="name">Full Name </label>
                                            <input type="text" class="@error('name') is-invalid @enderror"
                                                placeholder="Name" name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5">
                                    <div class="dashboard__form__wraper">
                                        <div class="dashboard__form__input">
                                            <label for="expertise">Expertise </label>
                                            <input type="text" class="@error('expertise') is-invalid @enderror"
                                                placeholder="expertise" name="expertise" value="{{ old('expertise') }}">
                                            @error('expertise')
                                                <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5">
                                    <div class="dashboard__form__wraper">
                                        <div class="dashboard__form__input">
                                            <label for="profile">Profile Image</label>
                                            <input type="file" class="@error('profile') is-invalid @enderror"
                                                name="profile">
                                            @error('profile')
                                                <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-2">
                                    <div class="dashboard__form__wraper">
                                        <div class="dashboard__form__input">
                                            <label for="biography">Biography</label>
                                            <textarea id="" cols="30" rows="10" class="@error('biography') is-invalid @enderror"
                                                name="biography">{{ old('biography') }}</textarea>
                                            @error('biography')
                                                <small
                                                    class="invalid-feedback mt-2 mb-2 ms-1 block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-8 col-md-6 col-12">
                                    <div class="create__course__bottom__button">
                                        <button type="submit" href="#">Send</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
