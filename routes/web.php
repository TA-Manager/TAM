<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApplicationFromController;

Route::get('/', function () {
    $users = DB::table('users')->select('id','name','email')->orderBy('id', 'asc')->get();
    return view('welcome')->with('users', $users);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/applicationform', [ApplicationFromController::class, 'showForm']);