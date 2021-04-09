<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aspirasi;
use App\Models\kategori;
use App\Models\penduduk;

class AspirasiController extends Controller
{
    //
    public function lapor(){
        $data = kategori::all();
        return view('aspirasi.add',compact('data'));
    }
    public function postlapor(Request $request){
        //dd($request->all());
        //Insert Ke penduduk
        $masyarakat = new penduduk;
        $masyarakat->nik = $request->nik;
        $masyarakat->nama = $request->name;
        $masyarakat->alamat = $request->alamat;
        $masyarakat->save();
        //Insert Ke Aspirasi
        $request->request->add(['id_penduduk' => $masyarakat->id]);
        $request->request->add(['id_laporan' => $masyarakat->id.$request->tgl]);
        $aspirasi = aspirasi::create($request->all());
        return redirect('/')->with('sukses','ID Laporan Anda ='.$aspirasi->id_laporan);

    }
    public function index(Request $request){
        $data = aspirasi::orderby('status','asc')->get();
        $filterKeyword =  $request->get('status');

        if($filterKeyword){
                  $data =  aspirasi::where("status",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
      
        return view('aspirasi.dashboard',compact('data'));
    }
    public function proses(Request $request, $id){
   
        $data = aspirasi::where('id',$id)->update(['status' => 'proses']);
        return redirect('/aspirasimasyarakat');
    }
    public function selesai(Request $request, $id){

        $data = aspirasi::where('id',$id)->update(['status' => 'selesai']);
        return redirect('/aspirasimasyarakat');
    }
    public function indexriw(Request $request){
        return view('riwayat');
    }
    public function riwayat(Request $request){
        $data = penduduk::all();
        $filterKeyword =  $request->get('cari');

        if($filterKeyword){
                  $data =  penduduk::where("nik",  "LIKE",
            "%$filterKeyword%")->orWhere("nama",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
        return view('datariwayat',compact('data'))->with('sukses','Data Search Succes');
    }
    public function riwayatidlaporan(Request $request){
        $data = aspirasi::all();
        $filterKeyword =  $request->get('cari');

        if($filterKeyword){
                  $data =  aspirasi::where("id_laporan",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
        return view('riwayatlaporan',compact('data'))->with('sukses','Data Search Succes');   
    }
    public function datariwayat($id){
        $data = aspirasi::find($id);
        return view('riwayataspirasi',compact('data'));
    }
    public function feedback(Request $request, $id){
        $data = aspirasi::find($id);
        $data->update($request->all());
        return redirect('/')->with('sukses','Anda telah memberi Feedback');
    }
    public function menu(){
        return view('menulaporan');
    }
    public function caripernah(Request $request){
        $data = penduduk::all();
        $filterKeyword =  $request->get('cari');

        if($filterKeyword){
                  $data =  penduduk::where("nik",  "LIKE",
            "%$filterKeyword%")->orWhere("nama",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
        return view('datapernahlapor',compact('data'))->with('sukses','Data Search Succes');
    
    }
    public function pernah(){
        return view('pernahlapor');
    }
    public function tambah($id){
        $row = penduduk::find($id);
        $data = kategori::all();
        return view('aspirasi.addold',compact('data','row'));
    }
    public function postpernahlapor(Request $request){
        //dd($request->all());
       
      
        //Insert Ke Aspirasi
        $masyarakat = $request->id_penduduk;
        $request->request->add(['id_laporan' => $masyarakat.$request->tgl]);
        $aspirasi = aspirasi::create($request->all());
        return redirect('/')->with('sukses','ID Laporan Anda ='.$aspirasi->id_laporan);

    }
    public function history(){
        
        $data = aspirasi::where('status','selesai')->get();
        $status = aspirasi::all();
        return view('aspirasi.history',compact('data','status'));
    }
    public function tampilan($id){
        $data = aspirasi::where('id_penduduk',$id)->get();
        return view('riwayatdatalaporan',compact('data'));
    }
    public function indexriwnik(){
        return view('crinik');
    }
}
  