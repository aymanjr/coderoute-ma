<?php

use App\Http\Controllers\UserController;
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

//CRUD Question

Route::get('/questions/', [\App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('create');
Route::get('/questions/show/{id}', [\App\Http\Controllers\QuestionController::class, 'show'])->name('show');
Route::get('/questions/edit/{id}', [\App\Http\Controllers\QuestionController::class, 'edit'])->name('edit');
Route::post('/questions/update/{id}', [\App\Http\Controllers\QuestionController::class, 'update'])->name('update');
Route::post('/questions/store', [\App\Http\Controllers\QuestionController::class, 'store'])->name('store');
Route::post('/questions/delete/{id}', [\App\Http\Controllers\QuestionController::class, 'destroy'])->name('delete');
