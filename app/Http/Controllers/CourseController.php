<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class CourseController extends Controller
{
    //
    public $count = 1;
    public $isConfirm = false;

    public function showHome()
    {
        $user = Auth::user();

        $member = Member::where('email', $user->email)->first();

        if (!$member) {
            return redirect()->back()->withErrors('No member profile found.');
        }

        if ($member->role === 'STUDENT_SERVICES_SECTION') {
            return redirect('/HongFha');
        }

        if ($member->role === 'PROFESSOR') {
            return redirect('/Profescer');
        }

        $users = DB::table('courses')->select('id', 'name', 'image_path')->orderBy('id', 'asc')->get();
        $count = session('count', 1);

        return view('home')->with(['users' => $users, 'count' => $count])->with('isConfirm', $this->isConfirm);
    }

    public function AddCount(Request $request)
    {
        $count = session('count', 1);
        $count++;
        $courseCount = DB::table('courses')->count();
        if ($count > $courseCount-1) {
            $count = 0;
        }
        session(['count' => $count]);
        return redirect('/home');
    }
    public function MinusCount(Request $request)
    {
        $count = session('count', 1);
        $count--;
        $courseCount = DB::table('courses')->count();
        if ($count < 0) {
            $count = $courseCount-1;
        }
        session(['count' => $count]);
        return redirect('/home');
    }

    public function confirmForm(Request $request)
    {
        // Get the item ID from the request
        $itemId = $request->input('item_id');

        // Retrieve the course from the database and check if it exists
        $course = Course::find($itemId);

        // Set the isConfirm flag in the session
        session(['isConfirm' => true]);

        // Redirect to home, passing the course data
        return redirect('/home')->with('course', $course);
    }
}
