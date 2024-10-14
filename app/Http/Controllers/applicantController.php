<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicantController extends Controller
{
    public function showApplicant()
    {
        return view('applicant');
    }
}
