@extends('layout.client')

@section('content')
<div class="container mt-4">

    <h3>Thêm Module & Lesson cho khóa học: {{ $course->title }}</h3>

    <form action="{{ route('teacher.courses.modules.store', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div id="module-wrapper">

            <!-- MODULE MẪU (được clone bằng JS) -->
        </div>

        <button type="button" class="btn btn-success mt-3" id="btn-add-module">
            + Thêm Chương
        </button>

        <button type="submit" class="btn btn-primary mt-3 float-end">Lưu tất cả</button>
    </form>
</div>


{{-- TEMPLATE MODULE --}}
<template id="module-template">
    <div class="module-item border p-3 rounded mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold">Chương <span class="module-number"></span></h5>
            <button type="button" class="btn btn-danger btn-sm btn-delete-module">X</button>
        </div>

        <input type="text" class="form-control mt-2 module-title" placeholder="Tên chuơng">

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
    let moduleIndex = 0;

    // THÊM MODULE
    document.getElementById('btn-add-module').addEventListener('click', function () {
        const wrapper = document.getElementById('module-wrapper');
        const template = document.getElementById('module-template').content.cloneNode(true);

        wrapper.appendChild(template);

        const moduleItem = wrapper.querySelectorAll('.module-item')[wrapper.children.length - 1];
        updateModule(moduleItem, moduleIndex);

        moduleIndex++;
    });

    // SETUP MODULE
    function updateModule(moduleItem, idx) {
        moduleItem.querySelector('.module-number').textContent = idx + 1;

        moduleItem.querySelector('.module-title').name = `modules[${idx}][title]`;

        const lessonWrapper = moduleItem.querySelector('.lessons-wrapper');
        let lessonIndex = 0;

        // Kéo-thả lessons để re-order
        new Sortable(lessonWrapper, {
            animation: 150,
            onSort: function () {
                reindexLessons(idx);
            }
        });

        // Thêm lesson
        moduleItem.querySelector('.btn-add-lesson').addEventListener('click', function () {
            const template = document.getElementById('lesson-template').content.cloneNode(true);
            lessonWrapper.appendChild(template);

            const lessonItem = lessonWrapper.querySelectorAll('.lesson-item')[lessonWrapper.children.length - 1];

            updateLesson(lessonItem, idx, lessonIndex);
            lessonIndex++;
        });

        // Xoá module
        moduleItem.querySelector('.btn-delete-module').addEventListener('click', function () {
            moduleItem.remove();
            reindexModules();
        });
    }

    // SETUP LESSON
    function updateLesson(lessonItem, moduleIdx, lessonIdx) {
        lessonItem.querySelector('.lesson-title').name =
            `modules[${moduleIdx}][lessons][${lessonIdx}][title]`;

        lessonItem.querySelector('.lesson-content').name =
            `modules[${moduleIdx}][lessons][${lessonIdx}][content]`;

        lessonItem.querySelector('.lesson-video').name =
            `modules[${moduleIdx}][lessons][${lessonIdx}][video]`;

        lessonItem.querySelector('.lesson-order').name =
            `modules[${moduleIdx}][lessons][${lessonIdx}][order]`;

        lessonItem.querySelector('.lesson-order').value = lessonIdx + 1;

        // Xoá lesson
        lessonItem.querySelector('.btn-delete-lesson').addEventListener('click', function () {
            lessonItem.remove();
            reindexLessons(moduleIdx);
        });
    }

    // REINDEX MODULE
    function reindexModules() {
        const modules = document.querySelectorAll('.module-item');
        moduleIndex = modules.length;

        modules.forEach((item, i) => {
            item.querySelector('.module-number').textContent = i + 1;
            item.querySelector('.module-title').name = `modules[${i}][title]`;
            reindexLessons(i);
        });
    }

    // REINDEX LESSON
    function reindexLessons(moduleIdx) {
        const moduleItem = document.querySelectorAll('.module-item')[moduleIdx];
        const lessons = moduleItem.querySelectorAll('.lesson-item');

        lessons.forEach((lesson, i) => {
            lesson.querySelector('.lesson-title').name =
                `modules[${moduleIdx}][lessons][${i}][title]`;

            lesson.querySelector('.lesson-content').name =
                `modules[${moduleIdx}][lessons][${i}][content]`;

            lesson.querySelector('.lesson-video').name =
                `modules[${moduleIdx}][lessons][${i}][video]`;

            lesson.querySelector('.lesson-order').name =
                `modules[${moduleIdx}][lessons][${i}][order]`;

            lesson.querySelector('.lesson-order').value = i + 1;
        });
    }
</script>


@endsection
