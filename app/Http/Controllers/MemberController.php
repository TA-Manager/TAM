<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
