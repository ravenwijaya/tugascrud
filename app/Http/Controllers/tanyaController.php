<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
class tanyaController extends Controller
{
    public function index(){
        $tanya=PertanyaanModel::get_all();
        return view('item.index',compact('tanya'));
    }
    public function create(){
        return view('item.form');
    }
    public function store(Request $request){
     //  dd($request->all());
       $data=$request->all();
       unset($data["_token"]);
        $tanya=PertanyaanModel::save($data);
        if($tanya){
            return redirect('/pertanyaan');
        }
    }
    public function show($id){
        $tanya=PertanyaanModel::find($id);
        //dd($tanya);
        return view('item.show',compact('tanya'));
    }
    public function edit($id){
        $tanya=PertanyaanModel::find($id);
        return view('item.edit',compact('tanya'));
    }
    public function update($id,Request $request){
        $tanya=PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }
    public function delete($id){
        $tanya=PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }
}
