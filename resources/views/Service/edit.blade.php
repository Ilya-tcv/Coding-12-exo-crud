@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Service edit</h1>
</div>

<form class="container" action="/11 - Exo-Crud/public/database/services/{{$service->id}}/update" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du Service</label>
      <input type="text" value="{{$service->name}}" class="form-control" name="name" id=""placeholder="Enter service name">
      </div>
      <div class="form-group">
        <label for="">Description du service</label>
        <input type="text" value="{{$service->desc}}" class="form-control" name="desc" id="" placeholder="Enter Description">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  @endsection