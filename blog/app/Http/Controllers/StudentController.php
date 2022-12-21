<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Http\Requests\StoreLectureRequest;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::with('lecture')->get();

        return view('student.index')->with($data);
    }

    public function email()
    {
        $user = User::find(2);

        $receiver = [
            'admin1@mail.com',
            'admin2@mail.com',
            'admin3@mail.com',
        ];
        
        Mail::to($receiver)->queue(new TestMail($user));

        return redirect()->back();
    }
    
}
