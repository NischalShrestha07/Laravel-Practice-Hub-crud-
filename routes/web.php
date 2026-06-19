<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'addUser'])->name('user.create');

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/store/{id}', [AuthController::class, 'store']);




Route::get('/test', function () {
    return "
    <html>
    <body>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    <h1>welcome to test page</h1>
    </body>

    </html>
    ";
});


Route::get('/mobile/{id}', function ($id) {
    return "Mobile ID: " . $id;
});

Route::get('/product/{name}', function ($name) {
    return "Product name: " . $name;
});


Route::get('user', [AuthController::class, 'test']);
Route::post('user/store', [AuthController::class, 'userStore']);
