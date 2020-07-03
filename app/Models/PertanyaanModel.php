<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class PertanyaanModel{
public static function get_all(){
    $tanya=DB::table('tanya')->get();
    return $tanya;
}
public static function save($data){
    $new_tanya=DB::table('tanya')->insert($data);
    return $new_tanya;
}
public static function find($id){
    $tanya=DB::table('tanya')->where('id',$id)->first();
    return $tanya;
}
public static function update($id, $request){
   // dd($request);
    $tanya=DB::table('tanya')
               ->where('id',$id)
               ->update([
                   'judul'=>$request['judul'],
                   'isi'=>$request['isi'],
                   'tanggaldiperbaharui'=>$request['tanggaldiperbaharui'],
                   ]);
    return $tanya;
}
public static function delete($id){
    // dd($request);
     $tanya=DB::table('tanya')
                ->where('id',$id)
                ->delete();
     return $tanya;
 }


}
