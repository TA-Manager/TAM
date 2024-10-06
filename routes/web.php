<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApplicationFromController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    $users = DB::table('users')->select('id','name','email')->orderBy('id', 'asc')->get();
    return view('welcome')->with('users', $users);
});

Route::get('/home', [CourseController::class, 'showHome'])->middleware('auth');
Route::post('/add-count', [CourseController::class, 'AddCount'])->name('add-count');
Route::post('/minus-count', [CourseController::class, 'MinusCount'])->name('minus-count');
Route::get('/@me', [MemberController::class, 'showProfile']);
Route::get('login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/applicationform', [ApplicationFromController::class, 'showForm']);
Route::get('/notification', [NotificationController::class, 'showNotification']);
