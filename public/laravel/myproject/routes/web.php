<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $age = 20;
    $names = ['Ravi', 'Kumar', 'Anita'];
    return view('welcome', compact('age', 'names'));
});

Route::get('/basiclaravel', [PageController::class, 'home']);
Route::get('/about',function (){
     return view('about');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/users', [UserController::class, 'index']);


Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/profile/{name?}', function ($name = 'Guest') {
    return "Welcome " . $name;
});
Route::get('/profile/{id}', [UserController::class, 'show']);



Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "Database connected successfully";
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});