<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
 public function index(){
    $data_kontak = \App\Kontak::all();
    return view('pages.contact',['data_kontak' => $data_kontak]);
 }

 public function create(Request $request)
    {
        \App\Kontak::create($request->all());
    //   return $request->all();
    return redirect('/contact')->with('sukses', 'Data telah terkirim');
    }
}

