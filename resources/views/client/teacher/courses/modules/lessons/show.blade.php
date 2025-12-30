@extends('layout.client')

@section('content')

<div class="container-fluid">
    <div class="row">

        {{-- ==================== MENU BÊN TRÁI ==================== --}}
        <div class="col-md-3 border-end" style="height: 100vh; overflow-y: auto;">
            <h5 class="mt-3">{{ $course->title }}</h5>

            @foreach($course->modules as $module)
                <div class="mt-3">
                    <strong>{{ $module->title }}</strong>

                    <ul class="list-group mt-2">
                        @foreach($module->lessons as $l)
                            <a href="{{ route('lesson.show', [$course->id, $l->id]) }}"
                               class="list-group-item list-group-item-action 
                               {{ $lesson->id == $l->id ? 'active' : '' }}">
                                {{ $l->order }}. {{ $l->title }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- ==================== NỘI DUNG BÀI HỌC ==================== --}}
        <div class="col-md-9 p-4">

            {{-- Video --}}
            <div class="card mb-4">
                <div class="card-body p-0">

                    @if($videoUrl)
                        <video width="100%" controls>
                            <source src="{{ asset($videoUrl) }}" type="video/mp4">
                        </video>
                    @else
                        <div class="p-5 text-center bg-dark text-white">
                            <h4>Chưa có video cho bài học này</h4>
                        </div>
                    @endif

                </div>
            </div>

            {{-- Mô tả bài học --}}
            <div class="card mb-4">
                <div class="card-header"><h4>{{ $lesson->title }}</h4></div>
                <div class="card-body">
                    {!! nl2br(e($lesson->content)) !!}
                </div>
            </div>

            <!-- {{-- ==================== BÀI TẬP ==================== --}}
            <div class="card mb-4">
                <div class="card-header"><h5>Bài tập</h5></div>
                <div class="card-body">

                    

                </div>
            </div> -->

            {{-- ==================== BÌNH LUẬN ==================== --}}
            
            <livewire:lesson-comments :lesson-id="$lesson->id" />

        </div>
    </div>
</div>

@endsection
