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
        $user = Auth::user();

        $member = Member::where('email', $user->email)->first();

        if ($member->role !== 'STUDENT_SERVICES_SECTION') {
            return redirect()->back()->withErrors('No member profile found.');
        }

        $this->isSelect = session('isSelect', false);
        $members = DB::table('members')->select('student_id', 'first_name', 'last_name', 'salary', 'role')->orderBy('student_id', 'asc')->get();
        return view('HongFha')->with('isSelect', $this->isSelect)->with('members', $members);
    }

    public function changeSelect(Request $request)
    {
        $isSelect = session('isSelect', false);
        $isSelect = !$isSelect;
        session(['isSelect' => $isSelect]);

        return redirect('/HongFha');
    }

    public function addSalary(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|array',
            'status.*' => 'in:มา,ลา,ขาด', // Validate each option
        ]);

        foreach ($request->status as $studentId => $status) {
            if ($status === 'มา') {
                // Find the member and update the salary
                $member = Member::where('student_id', $studentId)->first();
                if ($member) {
                    $member->salary += 800; // Adjust salary increment
                    $member->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Salary updated successfully.');
    }

    public function showProfescer()
    {
        // Get the authenticated user from Google OAuth
        $user = Auth::user();

        // Assuming the user's email is used for login or association
        $member = Member::where('email', $user->email)->first();

        if (!$member) {
            return redirect()->back()->withErrors('No member profile found.');
        }

        // Pass the member details to the view
        return view('Profescer')->with(['member' => $member]);
    }

    public function showApplicant()
    {
        $user = Auth::user();

        $member = Member::where('email', $user->email)->first();

        if ($member->role !== 'PROFESSOR') {
            return redirect()->back()->withErrors('No member profile found.');
        }

        $members = DB::table('members')->select('student_id', 'first_name', 'last_name', 'role')->orderBy('student_id', 'asc')->get();
        return view('applicant')->with('members', $members);
    }

    public function submitStudentId(Request $request)
    {
        // Validate the request to ensure student_id is provided
        $request->validate([
            'student_id' => 'required|exists:members,student_id', // Ensure student_id exists in the members table
        ]);

        // Retrieve the student_id from the request
        $studentId = $request->input('student_id');

        // Use the Members model to find the member based on student_id
        $member = Member::where('student_id', $studentId)->first();

        // Redirect with the member data to the specified route
        return redirect()->to('/applicant')->with('member', $member);
    }

}
