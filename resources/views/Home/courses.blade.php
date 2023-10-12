@extends('layouts.landing')
\
@section('content')
    <div class="coursearea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="course__text__wraper aos-init aos-animate" data-aos="fade-up">
                        <div class="course__text">
                            <p>Showing {{ $courses->count() }} Course</p>
                        </div>
                        <div class="course__icon">
                            <ul class="nav property__team__tap" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="single__tab__link active" data-bs-toggle="tab"
                                        data-bs-target="#projects__one" aria-selected="true" role="tab"><i
                                            class="icofont-layout"></i>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="single__tab__link" data-bs-toggle="tab"
                                        data-bs-target="#projects__two" aria-selected="false" tabindex="-1"
                                        role="tab"><i class="icofont-listine-dots"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                    <div class="course__sidebar__wraper aos-init aos-animate" data-aos="fade-up">
                        <div class="course__heading">
                            <h5>Search here</h5>
                        </div>
                        <form action="{{ route('courses') }}" method="GET">
                            <div class="flex bg-transparent border items-center pr-4 mb-4">
                                <input type="search"
                                    class="border-0 focus:border-0 focus:ring-0 text-white bg-transparent w-full"
                                    placeholder="Search" name="search" value="{{ request('search') }}">
                            </div>
                        </form>
                        <div class="course__input">
                           
                        </div>
                    </div>

                </div>


                <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                    <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">
                        <div class="tab-pane fade  active show" id="projects__one" role="tabpanel"
                            aria-labelledby="projects__one">

                            <div class="row">
                                {{-- 
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12 aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="gridarea__wraper gridarea__wraper__2">
                                        <div class="gridarea__img">
                                            <a href="course-details.html"><img src="img/grid/grid_1.png" alt="grid"></a>
                                            <div class="gridarea__small__button">
                                                <div class="grid__badge">Data &amp; Tech</div>
                                            </div>
                                            <div class="gridarea__small__icon">
                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="gridarea__content">
                                            <div class="gridarea__list">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-book-alt"></i> 23 Lesson
                                                    </li>
                                                    <li>
                                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="gridarea__heading">
                                                <h3><a href="course-details.html">Foundation course to under stand
                                                        about softwere</a></h3>
                                            </div>
                                            <div class="gridarea__price">
                                                $32.00 <del>/ $67.00</del>
                                                <span> <del class="del__2">Free</del></span>

                                            </div>
                                            <div class="gridarea__bottom">

                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                @foreach ($courses as $item)
                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12 aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="gridarea__wraper">

                                            <div class="gridarea__img">
                                                <a href="">
                                                    <img src="{{ asset('storage/' . $item->banner) }}" alt="grid">
                                                </a>
                                                <div class="gridarea__small__button">
                                                    @foreach (json_decode($item->language) as $language)
                                                        <div class="grid__badge"> {{ $language->value }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__heading">
                                                    <h3><a
                                                            href="{{ route('course-detail', ['slug' => $item->slug]) }}">{!! Str::limit(strip_tags($item->title), $limit = 40, $end = '...') !!}</a>
                                                    </h3>
                                                </div>
                                                <div class="gridarea__price">
                                                    <p>{!! Str::limit(strip_tags($item->description), $limit = 60, $end = '...') !!}</p>
                                                </div>
                                                <div class="gridarea__bottom">
                                                    <div class="gridarea__list">
                                                        <ul>
                                                            <li>
                                                                <div class="gridarea__small__img">
                                                                    <img src="{{ $item->profile_photo_path ? asset('storage/' . $item->profile_photo_path) : asset('assets/img/grid/grid_small_1.jpg') }}"
                                                                        alt="grid">
                                                                    <div class="gridarea__small__content">
                                                                        <h6>{{ $item->user->name }}</h6>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="grid__badge blue__color">
                                                                    {{ $item->category->name }}</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
