<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function index(){
        $data = User::all();
        return view('petugas.index',compact('data'));
    }
    public function add(){
        return view('petugas.add');
    }
    public function postregister(Request $request){

        //dd($request->all());
            $user = new User;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect('/datapetugas');
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete($data);
        return redirect('/datapetugas')->with('Sukses','Data Deleted');
    }
}
