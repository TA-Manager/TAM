<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationFromController extends Controller
{
    public $isClicked = false;

    public function showForm()
    {
        $isClicked = session('isClicked', $this->isClicked);
        return view('applicationform')->with(['isClicked' => $isClicked]);
    }
}
