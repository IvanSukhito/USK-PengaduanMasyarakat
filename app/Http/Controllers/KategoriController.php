<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    //
    public function index(){
        $data = kategori::all();
        return view('kategori.index',compact('data'));
    }
    public function add(){
        return view('kategori.add');
    }
    public function store(Request $request){

        $kategori = new kategori;
        $kategori->ket_kategori = $request->ket_kategori;
        $kategori->save();

        return redirect('/datakategori');
    }
    public function delete($id){
        $data = kategori::find($id);
        $data->delete($id);
        return redirect('/datakategori');
    }
    public function edit($id){
        $data = kategori::find($id);
        return view('kategori.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = kategori::find($id);
        $data->update($request->all());
        return redirect('/datakategori');
    }
}
