<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Unit;
use Illuminate\Http\Request;
use Mockery\Matcher\Subset;

class SubjectController extends Controller
{
    public function index()
     {
        $units=Subject::find(1)->units()->get();
        // dd($units);
        $subject=Unit::find(2)->subject()->get();
        return view('show-subject', compact('units', 'subject'));
    }

}
