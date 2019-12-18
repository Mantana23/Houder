<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    //
    public function index()
    {
        $data_mitra = \App\Mitra::all();
        return view('pages.join-mitra',['data_mitra' => $data_mitra]);
    }
    public function create(Request $request)
    {
        \App\Mitra::create($request->all());
    //   return $request->all();
    return redirect('/join-mitra')->with('sukses', 'Data telah terkirim');
    }
}
