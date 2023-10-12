@extends('layouts.landing')

@section('content')
    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Log In</h2>
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

    <!-- login__section__start -->
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row flex-col justify-center align-center">

                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                        aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Login</h5>
                                    <p class="login__description">Don't have an account yet? <a href="#"
                                            data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</a></p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div>
                                        <div class="dashboard__form__wraper">
                                            <div class="dashboard__form__input">
                                                <x-label for="email" class="text-white" value="{{ __('Email') }}" />
                                                <x-input id="email"
                                                    class="block mt-1 w-full text-white @error('email') @enderror"
                                                    type="email" name="email" :value="old('email')" required
                                                    autocomplete="username" />
                                                @error('email')
                                                    <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="dashboard__form__wraper">
                                            <div class="dashboard__form__input">
                                                <x-label for="password" class="text-white" value="{{ __('Password') }}" />
                                                <x-input id="password"
                                                    class="block mt-1 w-full text-white @error('password') @enderror"
                                                    type="password" name="password" required autocomplete="current-password"
                                                    :value="old('password')" />
                                                @error('password')
                                                    <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="passwordCheck" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('See Password') }}</span>
                                        </label>
                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="login__button">
                                        <button class="default__button">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class=" login__shape__img educationarea__shape_image">
                <img class="hero__shape hero__shape__1" src="{{ asset('assets/img/education/hero_shape2.png') }}"
                    alt="Shape">
                <img class="hero__shape hero__shape__2" src="{{ asset('assets/img/education/hero_shape3.png') }}"
                    alt="Shape">
                <img class="hero__shape hero__shape__3" src="{{ asset('assets/img/education/hero_shape4.png') }}"
                    alt="Shape">
                <img class="hero__shape hero__shape__4" src="{{ asset('assets/img/education/hero_shape5.png') }}"
                    alt="Shape">
            </div>


        </div>
    </div>
@endsection
