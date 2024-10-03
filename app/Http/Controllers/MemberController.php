<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function showProfile()
    {
        $members = DB::table('members')->select('student_id', 'first_name', 'last_name', 'email', 'contact', 'phone_number')->orderBy('student_id', 'asc')->get();
        return view('@me')->with(['members' => $members]);
    }
}
