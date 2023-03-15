@extends('layout')



@section('content')

<div class="col-sm-6">
  <h1>Edit Restaurant</h1>
	<form method="post" action="/edit">
		@csrf
  
  
<div>
<input type="hidden" name="id" value="{{$data['id']}}" class="form-control">
</div>
<div class="mb-3">
  <label>Name </label>
    
  <input type="text" name="name" value="{{$data['name']}}" class="form-control"> 
</div>
<div class="mb-3">
    <label >Email </label>
  <input type="text" name="email" value="{{$data['email']}}" class="form-control"> 
</div>
<div class="mb-3">
    <label>Address </label>
  <input type="text" name="address" value="{{$data['address']}}" class="form-control">  
</div>
  <button type="submit" class="btn btn-primary"> Update</button>

@stop