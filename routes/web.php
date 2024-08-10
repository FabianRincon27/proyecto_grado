<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('login.get');
    Route::post('/login.post', [LoginController::class, 'postLogin'])->name('login.post');
});

Route::get('/logout', [LogoutController::class, 'getLogout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'getHome'])->name('home');

    Route::get('/programs', [ProgramController::class, 'getPrograms'])->name('programs');
    Route::get('/program/create', [ProgramController::class, 'createProgram'])->name('program.create');
    Route::post('/programs/update/program/{id}', [ProgramController::class, 'updateProgram'])->name('program.update');
    Route::post('/programs/delete/program/{id}', [ProgramController::class, 'deleteProgram'])->name('program.delete');

    Route::get('/students', [UserController::class, 'getStudents'])->name('students');
    Route::get('/student/create', [UserController::class, 'createStudent'])->name('student.create');
    Route::post('/students/update/student/{id}', [UserController::class, 'updateStudent'])->name('student.update');
    Route::post('/students/delete/student/{id}', [UserController::class, 'deleteStudent'])->name('student.delete');
});