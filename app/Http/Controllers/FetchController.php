<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FetchController extends Controller
{
    public function fetchStudentData()
    {

        $students = DB::table('students')->select('id', 'student_name')->get();
        return response(compact('students'));
    }
}
