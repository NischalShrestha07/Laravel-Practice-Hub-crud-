<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


//login routes
// Route::get('/', [AuthController::class, 'login'])->name('user.login');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('user.authenticate');
// Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');

// //users routes
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/user/register', [AuthController::class, 'registerUser'])->name('user.register');
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::delete('/users/{id}', [UserController::class, 'delete'])->name('user.delete');



// //dashboard routes
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



// Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
// Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


// //Products Routes
// Route::get('/products', [ProductController::class, 'index'])->name('products');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products/add', [ProductController::class, 'add'])->name('products.add');
// Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');



// //Category Routes
// Route::get('/category', [CategoryController::class, 'index'])->name('category');
// Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('/category/add', [CategoryController::class, 'add'])->name('category.add');
// Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
// Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');



// //customers routes
// Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
// Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
// Route::post('/customer/add', [CustomerController::class, 'add'])->name('customer.add');
// Route::get('/customer/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
// Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
// Route::delete('/customer/{id}', [CustomerController::class, 'delete'])->name('customer.delete');


Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('tasks/{id}/restore', [TaskController::class, 'restored'])->name('tasks.restore');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/haha/$id', function ($id) {
    return $id;
});

Route::get('/hehe/{count}', function ($count) {
    return $count;
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return "Inside the dashboard";
    });
});




Route::prefix('haha')->group(function () {
    Route::get('test', function () {
        return "how are you is it working?";
    });
    Route::get('{whatsup}', function ($whatsup) {
        return $whatsup;
    });
});

Route::prefix('test')->group(function () {
    Route::get('/', [TestController::class, 'index']);
    Route::get('/create', [TestController::class, 'create']);
    Route::post('/store', [TestController::class, 'store'])->name('test.store');
    Route::get('/edit/{id}', [TestController::class, 'edit'])->name('test.edit');
    Route::put('/edit/{id}/update', [TestController::class, 'update'])->name('test.update');
});
