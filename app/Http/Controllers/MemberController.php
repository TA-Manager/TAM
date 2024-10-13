<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function showProfile()
    {
        // Get the authenticated user from Google OAuth
        $user = Auth::user();

        // Assuming the user's email is used for login or association
        $member = Member::where('email', $user->email)->first();

        if (!$member) {
            return redirect()->back()->withErrors('No member profile found.');
        }

        // Pass the member details to the view
        return view('@me')->with(['member' => $member]);
    }

    public $isSelect = false;

    public function showHongFha()
    {
        $this->isSelect = session('isSelect', false);
        $members = DB::table('members')->select('student_id', 'first_name', 'last_name', 'salary')->orderBy('student_id', 'asc')->get();
        return view('HongFha')->with('isSelect', $this->isSelect)->with('members', $members);
    }

    public function changeSelect(Request $request)
    {
        $isSelect = session('isSelect', false);
        $isSelect = !$isSelect;
        session(['isSelect' => $isSelect]);

        return redirect('/HongFha');
    }
}
