<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/main', function () {
    return view('app');
});

Route::get('/login', function () {
    return view('pages.login');
});

/*************************** Student part *************************/
Route::get('/student/main', function () {
    return view('pages.student.main');
});


Route::get('/student/activity', function () {
    return view('pages.student.activity');
});
Route::get('/student/is/activity/create', function () {
    return view('pages.student.creat-activity');
});

Route::get('/student/profile', function () {
    return view('pages.student.profile');
});
Route::get('/student/profile/edit', function () {
    return view('pages.student.edit-profile');
});
Route::get('/student/is', function () {
    return view('pages.student.is-detail');
});
Route::get('/student/is/edit', function () {
    return view('pages.student.edit-is');
});

Route::get('/student/is/proposal', function () {
    return view('pages.student.proposal');
});
Route::get('/student/is/proposal/edit', function () {
    return view('pages.student.edit-proposal');
});

Route::get('/student/is/checklist', function () {
    return view('pages.student.checklist');
});



/*************************** Advisor part *************************/
Route::get('/advisor/main', function () {
    return view('pages.advisor.main');
});

Route::get('/advisor/profile', function () {
    return view('pages.advisor.profile');
});

/*************************** Committee part *************************/
Route::get('/board/main', function () {
    return view('pages.board.main');
});
Route::get('/board/is', function () {
    return view('pages.board.is');
});
Route::get('/board/advisor', function () {
    return view('pages.board.advisor');
});

Route::get('/board/report', function () {
    return view('pages.board.report');
});

/*************************** Admin part *************************/
Route::get('/admin/main', function () {
    return view('pages.admin.main');
});
Route::get('/admin/calendar', function () {
    return view('pages.admin.calendar');
});
Route::get('/admin/advisor', function () {
    return view('pages.admin.advisor');
});
Route::get('/admin/is', function () {
    return view('pages.admin.is');
});
Route::get('/admin/report', function () {
    return view('pages.admin.report');
});
Route::get('/admin/form', function () {
    return view('pages.admin.form');
});
