@extends('layout.client')


@section('content')

<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Danh mục khóa học</h2>

    <div class="row g-4">
        @foreach ($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ route('category.courses', $category->id) }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm category-card">
                        <img src="{{ $category->image ? asset('uploads/category/' . $category->image) : asset('assets/client/img/cat-1.jpg') }}"
                             class="card-img-top"
                             alt="{{ $category->category_name }}">

                        <div class="card-body text-center">
                            <h5 class="card-title text-dark fw-semibold">
                                {{ $category->category_name }}
                            </h5>

                            <p class="text-primary m-0">
                                {{ $category->courses_count }} khóa học
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


@endsection