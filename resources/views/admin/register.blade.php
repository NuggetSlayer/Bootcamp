@extends('layouts.landing')

@section('content')
    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Sign Up</h2>
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

                    <div class="tab-pane fade active show" id="projects__two" role="tabpanel"
                        aria-labelledby="projects__two">
                        <div class="col-xl-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Sign Up</h5>
                                    <p class="login__description">Already have an account? <a href="#"
                                            data-bs-toggle="modal" data-bs-target="#registerModal">Admin Registration</a></p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <input type="hidden" name="role" value="Admin">
                                    <div>
                                        <div class="dashboard__form__wraper">
                                            <div class="dashboard__form__input">
                                                <x-label class="text-white" for="name" value="{{ __('Name') }}" />
                                                <x-input id="name"
                                                    class="block text-white mt-1 w-full @error('name') @enderror"
                                                    type="text" name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" />
                                                @error('name')
                                                    <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="dashboard__form__wraper">
                                            <div class="dashboard__form__input">
                                                <x-label class="text-white" for="email" value="{{ __('Email') }}" />
                                                <x-input id="email"
                                                    class="block text-white mt-1 w-full @error('email') @enderror"
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
                                                <x-label class="text-white" for="password" value="{{ __('Password') }}" />
                                                <x-input id="password"
                                                    class="block text-white mt-1 w-full @error('password') @enderror"
                                                    type="password" name="password" required autocomplete="new-password" />
                                                @error('password')
                                                    <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="dashboard__form__wraper">
                                            <div class="dashboard__form__input">
                                                <x-label class="text-white" for="password_confirmation"
                                                    value="{{ __('Confirm Password') }}" />
                                                <x-input id="password"
                                                    class="block text-white mt-1 w-full  @error('password_confirmation') @enderror"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password" />
                                                @error('password confirmation')
                                                    <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center mt-2">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="passwordCheck" />
                                            <span class="ml-2 text-sm text-white">{{ __('See Password') }}</span>
                                        </label>
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-label for="terms">
                                                <div class="flex items-center">
                                                    <x-checkbox name="terms" id="terms" required />

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' =>
                                                                '<a target="_blank" href="' .
                                                                route('terms.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Terms of Service') .
                                                                '</a>',
                                                            'privacy_policy' =>
                                                                '<a target="_blank" href="' .
                                                                route('policy.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Privacy Policy') .
                                                                '</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-label>
                                        </div>
                                    @endif


                                    <div class="login__button">
                                        <button class="default__button">Register</button>
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
