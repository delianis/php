<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use App\Http\Controllers\GuruController;

class GuruController extends Controller
{
    public function index(){
        $data = guru::all();
        return view('dataguru', compact('data'));
    }

    public function tambahguru(){
        return view ('tambahguru');
    }

    public function inputguru(Request $request){
        guru::create($request->all());
        return redirect()->route('guru');
    }

    public function tampilguru($id){
        $data = guru::find($id);
        return view('tampilguru', compact('data'));
    }

    public function updateguru(Request $request, $id){
       $data = guru::find($id);
       $data->update($request->all());
        return redirect()->route('guru');
    }

    public function hapusguru($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
    
}
