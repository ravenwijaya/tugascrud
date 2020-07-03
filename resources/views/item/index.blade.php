@extends('adminlte.master')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>judul</th>
        <th>isi</th>
        <th>tglbuat</th>
        <th>tgldiperbaharui</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach($tanya as $key=>$item)
     <tr>
     <td>{{$item->id}}</td>
     <td>{{$item->judul}}</td>
     <td>{{$item->isi}}</td>
     <td>{{$item->tanggaldibuat}}</td>
     <td>{{$item->tanggaldiperbaharui}}</td>
     <td>
     <a href="/pertanyaan/{{$item->id}}"class="btn btn-sm btn-info">show</a>
     <a href="/pertanyaan/{{$item->id}}/edit"class="btn btn-sm btn-info">edit</a>
     <form action="/pertanyaan/{{$item->id}}" method="post" style="display:inline">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
     </td> 
    
     </tr>
   @endforeach
    </tbody>
  </table>
  @endsection

  