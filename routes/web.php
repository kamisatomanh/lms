<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\CategoryController;
use App\Http\Controllers\client\CourseController;
use App\Http\Controllers\client\LessonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\TeacherController;
use App\Http\middleware\RoleMiddleware;
use App\Http\Controllers\client\QuizController;
use App\Http\Controllers\admin\AdminController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/{id}', [CourseController::class, 'index'])->name('category.courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/course/{courseId}/lesson/{lessonId}', [LessonController::class, 'show'])
    ->name('lesson.show');

// LOGIN
Route::get('/login',       [AuthController::class, 'showLogin'])->name('login');
Route::post('/login',      [AuthController::class, 'login'])->name('login.post');
Route::get('/logout',      [AuthController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/register',    [AuthController::class, 'showRegister'])->name('register');
Route::post('/register',   [AuthController::class, 'register'])->name('register.post');

//profile
Route::get('/profile',     [AuthController::class, 'profile'])->name('profile');
Route::put('/profile',     [AuthController::class, 'updateProfile'])->name('profile.update');
Route::get('my-courses',   [AuthController::class, 'myCourses'])->name('my.courses');

// Teacher Routes
Route::middleware([RoleMiddleware::class . ':tc'])
    ->prefix('teacher')
    ->name('teacher.')
    ->group(function () {

        // ======================
        // COURSES
        // ======================
        Route::prefix('courses')->name('courses.')->group(function () {

            Route::get('/', [TeacherController::class, 'courseIndex'])->name('index');
            
            Route::get('/create', [TeacherController::class, 'courseCreate'])->name('create');
            Route::post('/', [TeacherController::class, 'courseStore'])->name('store');
            
            Route::get('/{id}/edit', [TeacherController::class, 'courseEdit'])->name('edit');
            Route::put('/update/{id}', [TeacherController::class, 'courseUpdate'])->name('update');

            Route::put('/archive/{id}', [TeacherController::class, 'courseArchive'])->name('archive');
            Route::put('/draft/{id}', [TeacherController::class, 'courseDraft'])->name('draft');
            Route::put('/publish/{id}', [TeacherController::class, 'coursePublish'])->name('publish');
            Route::get('/{id}', [TeacherController::class, 'courseShow'])->name('show');

            // ======================
            // MODULES
            // ======================
            Route::prefix('{id}/modules')->name('modules.')->group(function () {

                Route::get('/', [TeacherController::class, 'moduleIndex'])->name('index');
                Route::get('/create', [TeacherController::class, 'moduleCreate'])->name('create');
                Route::post('/', [TeacherController::class, 'moduleStore'])->name('store');
                Route::get('/multiEdit', [TeacherController::class, 'moduleMultiEdit'])->name('multiEdit');
                Route::put('/multiUpdate', [TeacherController::class, 'moduleMultiUpdate'])->name('multiUpdate');

                Route::get('/{module_id}/edit', [TeacherController::class, 'moduleEdit'])->name('edit');
                Route::put('/{module_id}', [TeacherController::class, 'moduleUpdate'])->name('update');

                Route::get('/{module_id}/show', [TeacherController::class, 'moduleShow'])->name('show');

                Route::delete('/{module_id}/delete', [TeacherController::class, 'moduleDelete'])->name('delete');

                // ======================
                // LESSONS
                // ======================
                Route::prefix('{module_id}/lessons')->name('lessons.')->group(function () {

                    Route::get('/', [TeacherController::class, 'lessonIndex'])->name('index');
                    Route::get('/create', [TeacherController::class, 'lessonCreate'])->name('create');
                    Route::post('/', [TeacherController::class, 'lessonStore'])->name('store');

                    Route::get('/{lesson_id}/edit', [TeacherController::class, 'lessonEdit'])->name('edit');
                    Route::put('/{lesson_id}', [TeacherController::class, 'lessonUpdate'])->name('update');

                    Route::put('/{lesson_id}/delete', [TeacherController::class, 'lessonDelete'])->name('delete');
                    Route::get('/{lesson_id}', [TeacherController::class, 'lessonShow'])->name('show');
                    Route::get('/{lesson_id}/questions', [TeacherController::class, 'lessonQuestions'])->name('questions');
                    Route::get('/{lesson_id}/questions/create', [TeacherController::class, 'lessonQuestionsCreate'])->name('questions.create');
                    Route::post('/{lesson_id}/questions/store', [TeacherController::class, 'lessonQuestionsStore'])->name('questions.store');
                });

                // ======================
                // QUIZZES
                // ======================
                Route::prefix('{module_id}/quizzes')->name('quizzes.')->group(function () {

                    Route::get('/', [TeacherController::class, 'quizIndex'])->name('index');
                    
                    Route::get('/create', [TeacherController::class, 'quizCreate'])->name('create');
                    Route::post('/', [TeacherController::class, 'quizStore'])->name('store');
                    Route::get('/create/word', [TeacherController::class, 'quizCreateWord'])->name('create.word');
                    Route::post('/store/word', [TeacherController::class, 'quizStoreWord'])->name('store.word');
                    Route::get('/create/choose', [TeacherController::class, 'quizCreateChoose'])->name('create.choose');
                    Route::post('/store/choose', [TeacherController::class, 'quizStoreChoose'])->name('store.choose');
                    Route::get('/create/random', [TeacherController::class, 'quizCreateRandom'])->name('create.random');
                    Route::post('/store/random', [TeacherController::class, 'quizStoreRandom'])->name('store.random');
                    Route::get('/{quiz_id}/edit', [TeacherController::class, 'quizEdit'])->name('edit');
                    Route::put('/{quiz_id}', [TeacherController::class, 'quizUpdate'])->name('update');

                    Route::put('/{quiz_id}/delete', [TeacherController::class, 'quizDelete'])->name('delete');
                    Route::get('/{quiz_id}', [TeacherController::class, 'quizShow'])->name('show');
                });

            });

        });
    });

// Quiz Routes for Students
Route::get('/course/{courseId}/module/{moduleId}/quiz/{quizId}', [QuizController::class, 'indexQuiz'])->name('quiz.index');
Route::get('/course/{courseId}/module/{moduleId}/quiz/{quizId}/start', [QuizController::class, 'startQuiz'])->name('quiz.start');
Route::post('/course/{courseId}/module/{moduleId}/quiz/{quizId}/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
Route::get('/course/{course}/module/{module}/quiz/{quiz}/review/{result}', [QuizController::class, 'reviewQuiz'])->name('quiz.review');

Route::get('/course/{courseId}/register', [CourseController::class, 'register'])->name('course.register');

Route::post('/course/{courseId}/register/submit', [CourseController::class, 'registerSubmit'])->name('course.register.submit');

Route::middleware([RoleMiddleware::class . ':ad'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/courses', [AdminController::class, 'coursesIndex'])->name('courses.index');
        Route::get('/course/draft', [AdminController::class, 'courseDraftIndex'])->name('courses.draft.index');
        Route::put('/course/{id}/archive', [AdminController::class, 'courseArchive'])->name('course.archive');
        Route::put('/course/{id}/draft', [AdminController::class, 'courseDraft'])->name('course.draft');
        Route::put('/course/{id}/publish', [AdminController::class, 'coursePublish'])->name('course.publish');
        Route::delete('/course/{id}/delete', [AdminController::class, 'courseDelete'])->name('course.delete');
        Route::get('/course/{id}', [AdminController::class, 'courseShow'])->name('course.show');

        Route::get('/categories', [AdminController::class, 'categoriesIndex'])->name('categories.index');
        Route::get('/category/create', [AdminController::class, 'categoryCreate'])->name('category.create');
        Route::post('/category/store', [AdminController::class, 'categoryStore'])->name('category.store');
        Route::get('/category/{id}/edit', [AdminController::class, 'categoryEdit'])->name('category.edit');
        Route::put('/category/{id}/update', [AdminController::class, 'categoryUpdate'])->name('category.update');
        Route::delete('/category/{id}/delete', [AdminController::class, 'categoryDelete'])->name('category.delete');

        Route::get('/students', [AdminController::class, 'studentsIndex'])->name('students.index');
        Route::get('/teachers', [AdminController::class, 'teachersIndex'])->name('teachers.index');
        Route::get('/admins', [AdminController::class, 'adminsIndex'])->name('admins.index');
        Route::get('/user/create', [AdminController::class, 'userCreate'])->name('user.create');
        Route::post('/user/store', [AdminController::class, 'userStore'])->name('user.store');
        Route::get('/user/{id}/edit', [AdminController::class, 'userEdit'])->name('user.edit');
        Route::put('/user/{id}/update', [AdminController::class, 'userUpdate'])->name('user.update');
        Route::delete('/user/{id}/delete', [AdminController::class, 'userDelete'])->name('user.delete');

    });