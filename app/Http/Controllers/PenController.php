<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penduduk;

class PenController extends Controller
{
    //
    public function index(){
        $data = penduduk::all();
        return view('penduduk.index',compact('data'));
    }
    public function add(){
        return view('penduduk.add');
    }
    public function store(Request $request){
        $penduduk = new penduduk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->alamat = $request->alamat;
        $penduduk->save();
        return redirect('/datapenduduk');
    }
    public function edit($id){
        $penduduk = penduduk::find($id);
        return view('penduduk.edit', compact('penduduk'));
    }
    public function update(Request $request,$id){
        $penduduk = penduduk::find($id);
        $penduduk->update($request->all());
        return redirect('/datapenduduk');
    }
    public function delete($id){
        $penduduk = penduduk::find($id);
        $penduduk->delete($penduduk);
        return redirect('/datapenduduk');
    }
}
