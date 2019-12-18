<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanyaController extends Controller
{
    public function index()
    {
        $data_pertanyaan = \App\Tanya::all();
        return view('pages.faq',['data_pertanyaan' => $data_pertanyaan]);
    }
    public function create(Request $request)
    {
        \App\Tanya::create($request->all());
    
    return redirect('/faq')->with('sukses', 'Data telah terkirim');
    }
}
