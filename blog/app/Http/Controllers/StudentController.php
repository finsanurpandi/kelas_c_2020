<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreLectureRequest;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::with('lecture')->get();

        return view('student.index')->with($data);
    }
    
}
