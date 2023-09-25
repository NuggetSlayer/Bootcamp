@extends('layouts.instructor')

@section('content')
    <form action="" method="post">
        @csrf
        <div class="accordion-item">
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="become__instructor__form">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4">
                                <div class="dashboard__form__wraper">
                                    <div class="dashboard__form__input">
                                        <label for="title">Course Title</label>
                                        <input type="text" class="@error('title') is-invalid @enderror"
                                            placeholder="Course Title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                    <div class="dashboard__form__input">
                                        <label for="category">Select Category</label>
                                    </div>
                                    <div class="dashboard__selector">
                                        <select class="form-select @error('category') is-invalid @enderror" name="category"
                                            aria-label="Default select example" value="{{ old('category') }}">
                                            <option value="" selected>All</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                    <div class="dashboard__form__input">
                                        <label for="language">Select Language</label>
                                    </div>
                                    <div class="dashboard__selector">
                                        <select class="form-select @error('language') is-invalid @enderror" name="language"
                                            aria-label="Default select example">
                                            <option value="" @if (old('language') == '') selected @endif>All
                                            </option>
                                            @foreach ($language as $item)
                                                <option value="{{ $item->id }}"
                                                    @if (old('language') == $item->id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('language')
                                            <small class="invalid-feedback mt-2 ms-1 block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-2">
                                <div class="dashboard__form__wraper">
                                    <div class="dashboard__form__input">
                                        <label for="description">About Course</label>
                                        <textarea id="" cols="30" rows="10" class="@error('description') is-invalid @enderror"
                                            name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <small class="invalid-feedback mt-2 mb-2 ms-1 block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-8 col-md-6 col-12">
                                <div class="create__course__bottom__button">
                                    <button type="submit" href="#">Create Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
