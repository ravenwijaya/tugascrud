<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class JawabanModel{
public static function get_all($id){
    $jawab=DB::table('jawab')->where('idpertanyaan','=',$id)->get();
    return $jawab;
}
public static function get_all_tanya($id){
    $tanya=DB::table('tanya')->where('id','=',$id)->get();
    return $tanya;
}
public static function save($data){
    $new_jawab=DB::table('jawab')->insert($data);
    return $new_jawab;
}
}
