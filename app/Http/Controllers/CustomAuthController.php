<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller {

    public function home() {

        return view('home');
    }

    public function checkData(Request $request) {

        $student = Student::where('id', '=', $request->student_id)->first();
        $studentPass = Student::where('student_pass', '=', $request->password)->first();

        if($student && $studentPass) {

            return view('welcome');

        }else {

            return back()->with('error', 'Incorrect USER or PASS!');

        }

    }

}