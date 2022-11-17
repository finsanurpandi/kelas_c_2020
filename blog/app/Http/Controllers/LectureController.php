<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use Session;

class LectureController extends Controller
{
    public function index()
    {
        $data['lectures'] = Lecture::all();

        return view('lecture.index')->with($data);
    }

    public function create()
    {
        return view('lecture.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nidn' => 'required|min:10|numeric',
                'nama' => 'required|min:5'
            ]
        );
        
        Lecture::create($request->all());

        Session::flash('status', 'Data berhasil ditambahkan');
        return redirect('lecture');
    }
}
