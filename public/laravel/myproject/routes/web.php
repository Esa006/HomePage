<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']); // show form
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);



Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return redirect('/login');
    }
    return "Welcome to your dashboard!";
});
// Route::get('/basiclaravel', [PageController::class, 'home']);
// Route::get('/about',[UserController::class,"about"]);
// Route::get('/index', function () {
//     return view('index', ['age' => 25]);
// });
// Route::get('/users', [UserController::class, 'index']);

// Protected route example
// 

// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/profile/{name?}', function ($name = 'Guest') {
//     return "Welcome " . $name;
// });
Route::resource('users', App\Http\Controllers\UserController::class);


Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "Database connected successfully";
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});


