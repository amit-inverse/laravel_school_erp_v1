<?php

use App\Http\Middleware\StudentLogin;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('classes', App\Http\Controllers\ClassesController::class);


Route::resource('classrooms', App\Http\Controllers\ClassroomsController::class);


Route::resource('levels', App\Http\Controllers\LevelsController::class);


Route::resource('batches', App\Http\Controllers\BatchesController::class);


Route::resource('shifts', App\Http\Controllers\ShiftsController::class);


Route::resource('courses', App\Http\Controllers\CoursesController::class);


Route::resource('faculties', App\Http\Controllers\FacultiesController::class);


Route::resource('times', App\Http\Controllers\TimesController::class);


Route::resource('attendances', App\Http\Controllers\AttendancesController::class);


Route::resource('academics', App\Http\Controllers\AcademicsController::class);


Route::resource('days', App\Http\Controllers\DaysController::class);


Route::resource('classAssignings', App\Http\Controllers\ClassAssigningsController::class);


Route::resource('classSchedulings', App\Http\Controllers\ClassSchedulingsController::class);


Route::resource('transactions', App\Http\Controllers\TransactionsController::class);


Route::resource('admissions', App\Http\Controllers\AdmissionsController::class);


Route::resource('teachers', App\Http\Controllers\TeachersController::class);


Route::resource('roles', App\Http\Controllers\RolesController::class);


Route::resource('users', App\Http\Controllers\UsersController::class);

Route::get('/dynamicLevel', ['as' => 'dynamicLevel', 'uses' => 'App\Http\Controllers\ClassSchedulingsController@DynamicLevel']);
Route::get('/class_scheduling_edit', ['as' => 'class_scheduling_edit', 'uses' => 'App\Http\Controllers\ClassSchedulingsController@edit']);
// Route::get('/class_scheduling_update', ['as' => 'class_scheduling_update', 'uses' => 'App\Http\Controllers\ClassSchedulingsController@update']);


Route::resource('departments', App\Http\Controllers\DepartmentsController::class);


Route::resource('rolls', App\Http\Controllers\RollsController::class);

Route::group(['middleware' => ['studentSession']], function () {
    Route::match(['get', 'post'], 'dashboard', 'App\Http\Controllers\StudentsController@dashboard');
    Route::match(['get', 'post'], 'profile', 'App\Http\Controllers\StudentsController@profile');
    Route::match(['get', 'post'], 'course-selection', 'App\Http\Controllers\StudentsController@courseSelection');
    Route::match(['get', 'post'], 'lecture-calendar', 'App\Http\Controllers\StudentsController@lectureCalendar');
    Route::match(['get', 'post'], 'lecture-activity', 'App\Http\Controllers\StudentsController@lectureActivity');
    Route::match(['get', 'post'], 'exam-marks', 'App\Http\Controllers\StudentsController@examMarks');

    Route::match(['get', 'post'], 'student-verify-password', 'App\Http\Controllers\StudentsController@verifyPassword');
    Route::match(['get', 'post'], 'student-change-password', 'App\Http\Controllers\StudentsController@changePassword');
});
Route::get('/students', 'App\Http\Controllers\StudentsController@studentLogin');
Route::post('/student-login-process', 'App\Http\Controllers\StudentsController@studentLoginProcess');
Route::get('/student-logout', 'App\Http\Controllers\StudentsController@studentLogout');
Route::get('/student-get-forgot-password', 'App\Http\Controllers\StudentsController@getForgotPassword');
Route::post('/student-forgot-password', 'App\Http\Controllers\StudentsController@forgotPassword');


Route::resource('feesStructures', App\Http\Controllers\FeesStructuresController::class);
