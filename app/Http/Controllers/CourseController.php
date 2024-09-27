<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public $count = 1;

    public function showHome()
    {
        $users = DB::table('users')->select('id', 'name', 'email')->orderBy('id', 'asc')->get();
        $count = session('count', 1);

        return view('home')->with(['users' => $users, 'count' => $count]);
    }

    public function AddCount(Request $request)
    {
        $count = session('count', 1);
        $count++;
        if ($count > 9) {
            $count = 0;
        }
        session(['count' => $count]);
        return redirect('/home');
    }
    public function MinusCount(Request $request)
    {
        $count = session('count', 1);
        $count--;
        if ($count < 0) {
            $count = 9;
        }
        session(['count' => $count]);
        return redirect('/home');
    }
}
