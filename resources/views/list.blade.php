@extends('layout')



@section('content')
<h1> Resturant List Page Is here</h1>
@if(Session::get('status'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
 <strong> {{Session::get('status')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>

        <a href="/delete/{{$item->id}}"><span class="material-symbols-outlined">delete</span></a>

        <a href="/edit/{{$item->id}}"><span class="material-symbols-outlined">edit_square</span></a>


   </td>
    </tr>
    @endforeach

  </tbody>
</table>
@stop