<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CourseController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/courses', function () {
    return view('pages.courses.coursesCategories');
});

//Route::get('/quiz',[QuestionController::class,'show']);
//Route::any('/submitans', [QuestionController::class, 'submitans']);


// Route::get('/quiz',[QuestionController::class,'index']);
// Route::get('/quiz/{id}',[QuestionController::class,'GetData']);

Route::get('quiz/{id}', [QuestionController::class, 'show'])->name('quiz.show');
Route::get('courses/{category}', [CourseController::class, 'show'])->name('courses.show');

