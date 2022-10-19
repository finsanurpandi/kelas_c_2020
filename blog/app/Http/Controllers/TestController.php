<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function hello()
    {
        $iterasi = 1;

        $data['fruits'] = ['mangga', 'jambu', 'sirsak'];
        $data['cars'] = ['Inova', 'Pajero', 'Raize'];
        $data['message'] = 'Hari ini adalah hari <strong>Rabu</strong>';

        return view('contents.hello', $data);
    }
}
