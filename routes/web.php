<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApplicationFromController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    $users = DB::table('users')->select('id','name','email')->orderBy('id', 'asc')->get();
    return view('welcome')->with('users', $users);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/applicationform', [ApplicationFromController::class, 'showForm']);
Route::get('/home', [CourseController::class, 'showHome']);
Route::post('/add-count', [CourseController::class, 'AddCount'])->name('add-count');
Route::post('/minus-count', [CourseController::class, 'MinusCount'])->name('minus-count');
Route::get('/notification', [NotificationController::class, 'showNotification']);