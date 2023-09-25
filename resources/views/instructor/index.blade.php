@extends('layouts.instructor')

@section('content')
    <div class="dashboard__content__wraper">
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
    </div>
    {{-- <div class="dashboard__content__wraper">
        <div class="dashboard__section__title">
            <h4>Courses</h4>
        </div>
        <div class="row">
            <div class="col-xl-12 aos-init aos-animate" data-aos="fade-up">
                <ul class="nav  about__button__wrap dashboard__button__wrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button" aria-selected="true" role="tab">Publish</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button" aria-selected="false" role="tab" tabindex="-1">Pending</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button" aria-selected="false" role="tab" tabindex="-1">Draft</button>
                    </li>
             


                </ul>
            </div>


            <div class="tab-content tab__content__wrapper aos-init aos-animate" id="myTabContent" data-aos="fade-up">

                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="row">
                   
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <img src="../img/grid/grid_2.png" alt="grid">
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge blue__color">Mechanical</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
    
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 29 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 2 hr 10 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="#">Nidnies course to under stand
                                            about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price green__color">
                                        $32.00<del>/$67.00</del>
                                        <span>.Free</span>
    
                                    </div>
                                    <div class="gridarea__bottom">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_2.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Rinis Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="../course-details.html"><img src="../img/grid/grid_3.png" alt="grid"></a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge pink__color">Development</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
    
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 25 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 40 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="../course-details.html">Minws course to under stand
                                            about solution</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $40.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>
    
                                    </div>
                                    <div class="gridarea__bottom">
    
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_3.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
    
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="../course-details.html"><img src="../img/grid/grid_6.png" alt="grid"></a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge">New</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
    
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 25 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 1 hr 40 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="../course-details.html">Minws course to under stand
                                            about solution</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $40.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>
    
                                    </div>
                                    <div class="gridarea__bottom">
    
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_3.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
    
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">

                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="../course-details.html"><img src="../img/grid/grid_5.png" alt="grid"></a>
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
                                        <h3><a href="../course-details.html">Foundation course to under stand
                                            about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>
    
                                    </div>
                                    <div class="gridarea__bottom">
    
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_1.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
    
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <img src="../img/grid/grid_6.png" alt="grid">
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge blue__color">Mechanical</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
    
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 29 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 2 hr 10 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="#">Nidnies course to under stand
                                            about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price green__color">
                                        $32.00<del>/$67.00</del>
                                        <span>.Free</span>
    
                                    </div>
                                    <div class="gridarea__bottom">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_2.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Rinis Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                </div>

                <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <a href="../course-details.html"><img src="../img/grid/grid_1.png" alt="grid"></a>
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
                                        <h3><a href="../course-details.html">Foundation course to under stand
                                            about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price">
                                        $32.00 <del>/ $67.00</del>
                                        <span> <del class="del__2">Free</del></span>
    
                                    </div>
                                    <div class="gridarea__bottom">
    
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_1.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Micle Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
    
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="gridarea__wraper">
                                <div class="gridarea__img">
                                    <img src="../img/grid/grid_2.png" alt="grid">
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge blue__color">Mechanical</div>
                                    </div>
                                    <div class="gridarea__small__icon">
                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                    </div>
    
                                </div>
                                <div class="gridarea__content">
                                    <div class="gridarea__list">
                                        <ul>
                                            <li>
                                                <i class="icofont-book-alt"></i> 29 Lesson
                                            </li>
                                            <li>
                                                <i class="icofont-clock-time"></i> 2 hr 10 min
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gridarea__heading">
                                        <h3><a href="#">Nidnies course to under stand
                                            about softwere</a></h3>
                                    </div>
                                    <div class="gridarea__price green__color">
                                        $32.00<del>/$67.00</del>
                                        <span>.Free</span>
    
                                    </div>
                                    <div class="gridarea__bottom">
                                        <a href="instructor-details.html">
                                            <div class="gridarea__small__img">
                                                <img src="../img/grid/grid_small_2.jpg" alt="grid">
                                                <div class="gridarea__small__content">
                                                    <h6>Rinis Jhon</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="gridarea__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>

            



            </div>




        </div>
    </div> --}}
@endsection
