@extends('layouts.instructor')



@section('sidebar')
    <div class="accordion content__cirriculum__wrap" id="accordionExample">

        <div class="accordion-item">
            <div class="font-bold mx-4 mt-4">
                <h3 class="text-xl">
                    Videos
                </h3>
            </div>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @foreach ($videos as $key => $item)
                        <div class="scc__wrap">
                            <div class="scc__info">
                                <h5><a href="{{ route('video', ['slug' => $item->slug]) }}">{{ $key + 1 }}. Lesson
                                        {{ $key + 1 }} </a></h5>

                            </div>
                            <div class="scc__meta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-youtube">
                                    <path
                                        d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                    </path>
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02">
                                    </polygon>
                                </svg>
                                <a href="{{ route('video', ['slug' => $item->slug]) }}"><span class="question"><i
                                            class="icofont-eye"></i> Watch</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-xl-9 col-lg-12 col-md-12">
        <div class="lesson__content__main">
                
            <div class="lesson__content__wrap">
                <h3>{{ $video->title }}</h3>
                <span><a href="course-details.html">Close</a></span>
            </div>
            <div class="plyr__video-embed rbtplayer w-full">
                <iframe src="{{ $video->url }}" allowfullscreen allow="autoplay"></iframe>
            </div>
        </div>
    </div>
@endsection
