<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
class jawabController extends Controller
{
    public function index($id){
         //  dd($request->all());
        $jawab=JawabanModel::get_all($id);
        $tanyaid=PertanyaanModel::find($id);
        //dd($tanyaid);
        return view('item.index2',compact('jawab','tanyaid'));
    }

    public function store(Request $request){
     //  dd($request->all());
       $data=$request->all();
       unset($data["_token"]);
        $jawab=JawabanModel::save($data);
        if($jawab){
            return redirect('/pertanyaan');
        }
    }
}
