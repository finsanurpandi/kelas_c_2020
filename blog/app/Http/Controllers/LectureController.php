<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Department;
use App\Models\Student;
use App\Http\Requests\StoreLectureRequest;
use Session;

class LectureController extends Controller
{
    public function index()
    {
        // $data['lectures'] = Lecture::all();
        $data['lectures'] = Lecture::with('departments')->get();
        $data['students'] = Department::find(1)->students;
        $data['department'] = Student::with('departments')->where('id', 2)->first();

        return view('lecture.index')->with($data);
    }

    public function create()
    {
        $data['department'] = Department::pluck('name', 'id');
        return view('lecture.create')->with($data);
    }

    public function store(StoreLectureRequest $request)
    {
        // $validated = $request->validate([
        //     'nidn' => 'required|min:10|numeric',
        //     'nama' => 'required|min:5'
        // ]);

        Lecture::create($request->validated());
        
        Session::flash('status', 'Input data berhasil!!!');
        return redirect('lecture');
    }

    public function edit($id)
    {
        $data['lecture'] = Lecture::find($id);
        $data['department'] = Department::pluck('name', 'id');
        return view('lecture.edit')->with($data);
    }

    public function update(Request $req, $nidn)
    {
        $lecture = Lecture::find($nidn);
        $lecture->update($req->all());

        Session::flash('status', 'Ubah data berhasil!!!');
        return redirect('lecture');
    }

    public function destroy($id)
    {
        Lecture::destroy($id);

        Session::flash('status', 'Hapus data berhasil!!!');
        return redirect()->back();
    }

    public function recycle_bin()
    {
        $data['trash'] = Lecture::onlyTrashed()->get();

        return view('lecture.trash')->with($data);
    }

    public function restore($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->restore();
        Session::flash('status', 'Data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function restore_all()
    {
        Lecture::onlyTrashed()->restore();
        Session::flash('status', 'Semua data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function delete($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->forceDelete();
        Session::flash('status', 'Data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }

    public function empty()
    {
        Lecture::onlyTrashed()->forceDelete();
        Session::flash('status', 'Semua data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }

    // relationship
    public function student($id)
    {
        //$data['students'] = Lecture::find($id)->students;
        $data['students'] = Lecture::find($id)->students()->orderBy('nama', 'asc')->get();
        return view('lecture.student')->with($data);
    }
}
