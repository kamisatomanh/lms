@extends('layout.client')

@section('content')
<div class="container mt-4">

    <h3>Chỉnh sửa Module & Lesson: {{ $course->title }}</h3>

    <form action="{{ route('teacher.courses.modules.multiUpdate', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div id="module-wrapper">

            {{-- RENDER MODULE & LESSON CÓ SẴN --}}
            @foreach($modules as $mIndex => $module)
                <div class="module-item border p-3 rounded mb-4">

                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold">Module <span class="module-number">{{ $mIndex + 1 }}</span></h5>
                        <button type="button" class="btn btn-danger btn-sm btn-delete-module">X</button>
                    </div>

                    <input type="text"
                           class="form-control mt-2 module-title"
                           name="modules[{{ $mIndex }}][title]"
                           value="{{ $module->title }}">

                    {{-- Giữ ID để biết module nào đang update --}}
                    <input type="hidden" name="modules[{{ $mIndex }}][id]" value="{{ $module->id }}">

                    <div class="lessons-wrapper mt-3 p-2 bg-light border rounded">

                        @foreach($module->lessons as $lIndex => $lesson)
                            <div class="lesson-item border p-2 rounded mb-2 bg-white">

                                <div class="d-flex justify-content-between">
                                    <strong>Bài học</strong>
                                    <button type="button" class="btn btn-danger btn-sm btn-delete-lesson">X</button>
                                </div>

                                <input type="text"
                                       class="form-control mt-2 lesson-title"
                                       name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][title]"
                                       value="{{ $lesson->title }}">

                                <textarea class="form-control mt-2 lesson-content"
                                          name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][content]">{{ $lesson->content }}</textarea>

                                {{-- File video mới --}}
                                <input type="file"
                                       class="form-control mt-2 lesson-video"
                                       name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][video]">

                                {{-- Giữ video cũ --}}
                                @if($lesson->video_url)
                                    <p class="text-success mt-2">Video hiện tại: {{ $lesson->video_url }}</p>
                                    <input type="hidden"
                                           name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][old_video]"
                                           value="{{ $lesson->video_url }}">
                                @endif

                                {{-- Giữ ID lesson --}}
                                <input type="hidden"
                                       name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][id]"
                                       value="{{ $lesson->id }}">

                                <input type="hidden"
                                       class="lesson-order"
                                       name="modules[{{ $mIndex }}][lessons][{{ $lIndex }}][order]"
                                       value="{{ $lesson->order }}">
                            </div>
                        @endforeach

                    </div>

                    <button type="button" class="btn btn-primary btn-sm mt-2 btn-add-lesson">+ Thêm bài học</button>
                </div>
            @endforeach

        </div>

        <button type="button" class="btn btn-success mt-3" id="btn-add-module">+ Thêm Module</button>

        <button type="submit" class="btn btn-primary mt-3 float-end">Cập nhật</button>
    </form>
</div>

{{-- Dùng lại SCRIPT của create --}}
<template id="module-template">
    <div class="module-item border p-3 rounded mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold">Module <span class="module-number"></span></h5>
            <button type="button" class="btn btn-danger btn-sm btn-delete-module">X</button>
        </div>

        <input type="text" class="form-control mt-2 module-title" placeholder="Tên module">

        <!-- Lessons -->
        <div class="lessons-wrapper mt-3 p-2 bg-light border rounded"></div>

        <button type="button" class="btn btn-primary btn-sm mt-2 btn-add-lesson">+ Thêm bài học</button>
    </div>
</template>



{{-- TEMPLATE LESSON --}}
<template id="lesson-template">
    <div class="lesson-item border p-2 rounded mb-2 bg-white">
        <div class="d-flex justify-content-between">
            <strong>Bài học</strong>
            <button type="button" class="btn btn-danger btn-sm btn-delete-lesson">X</button>
        </div>

        <input type="text" class="form-control mt-2 lesson-title" placeholder="Tên bài học">

        <textarea class="form-control mt-2 lesson-content" placeholder="Nội dung"></textarea>

        <input type="file" accept="video/*" class="form-control mt-2 lesson-video">

        <!-- ORDER (auto, hidden) -->
        <input type="hidden" class="lesson-order">
    </div>
</template>



{{-- SCRIPT --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.2/Sortable.min.js"></script>

<script>
    let moduleIndex = document.querySelectorAll('.module-item').length;

    // ================================
    //  TẠO NAME CHO INPUT
    // ================================
    function setLessonNames(lessonItem, moduleIdx, lessonIdx) {
        const fields = {
            '.lesson-title': 'title',
            '.lesson-content': 'content',
            '.lesson-video': 'video',
            '.lesson-order': 'order',
        };

        Object.keys(fields).forEach(selector => {
            const el = lessonItem.querySelector(selector);
            el.name = `modules[${moduleIdx}][lessons][${lessonIdx}][${fields[selector]}]`;
        });

        lessonItem.querySelector('.lesson-order').value = lessonIdx + 1;
    }

    function setModuleNames(moduleItem, moduleIdx) {
        moduleItem.querySelector('.module-title').name = `modules[${moduleIdx}][title]`;

        const lessons = moduleItem.querySelectorAll('.lesson-item');
        lessons.forEach((lesson, i) => setLessonNames(lesson, moduleIdx, i));
    }

    // ================================
    //  REINDEX SAU MỖI LẦN XOÁ / THÊM
    // ================================
    function reindexAll() {
        const modules = document.querySelectorAll('.module-item');

        modules.forEach((module, i) => {
            module.querySelector('.module-number').textContent = i + 1;
            setModuleNames(module, i);
        });

        moduleIndex = modules.length;
    }

    // ================================
    //  SETUP BUTTON TRONG MODULE
    // ================================
    function setupModule(moduleItem, idx) {

        // Xóa module
        moduleItem.querySelector('.btn-delete-module').addEventListener('click', () => {
            moduleItem.remove();
            reindexAll();
        });

        const lessonWrapper = moduleItem.querySelector('.lessons-wrapper');

        // Drag & Drop bài học
        new Sortable(lessonWrapper, {
            animation: 150,
            onSort: () => reindexAll()
        });

        // Thêm bài học
        moduleItem.querySelector('.btn-add-lesson').addEventListener('click', () => {
            const template = document.getElementById('lesson-template').content.cloneNode(true);
            lessonWrapper.appendChild(template);

            const lessonItems = lessonWrapper.querySelectorAll('.lesson-item');
            const newLesson = lessonItems[lessonItems.length - 1];

            setupLesson(newLesson, idx, lessonItems.length - 1);
            reindexAll();
        });
    }

    // ================================
    //  SETUP BUTTON TRONG LESSON
    // ================================
    function setupLesson(lessonItem, moduleIdx, lessonIdx) {

        setLessonNames(lessonItem, moduleIdx, lessonIdx);

        // Xóa bài học
        lessonItem.querySelector('.btn-delete-lesson').addEventListener('click', () => {
            lessonItem.remove();
            reindexAll();
        });
    }

    // ================================
    //  THÊM MODULE MỚI
    // ================================
    document.getElementById('btn-add-module').addEventListener('click', () => {

        const wrapper = document.getElementById('module-wrapper');
        const template = document.getElementById('module-template').content.cloneNode(true);

        wrapper.appendChild(template);

        const modules = wrapper.querySelectorAll('.module-item');
        const newModule = modules[modules.length - 1];

        setupModule(newModule, moduleIndex);
        reindexAll();
    });

    // ================================
    //  ÁP DỤNG SCRIPT CHO MODULE + LESSON CÓ SẴN
    // ================================
    document.querySelectorAll('.module-item').forEach((moduleItem, mIdx) => {
        setupModule(moduleItem, mIdx);

        const lessons = moduleItem.querySelectorAll('.lesson-item');
        lessons.forEach((lessonItem, lIdx) => {
            setupLesson(lessonItem, mIdx, lIdx);
        });
    });
</script>


@endsection
