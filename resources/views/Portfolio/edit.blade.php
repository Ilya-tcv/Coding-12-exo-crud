@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Portfolio edit</h1>
</div>

<form class="container" action="/11 - Exo-Crud/public/database/portfolio/{{$portfolio->id}}/update" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du portfolio</label>
      <input type="text" value="{{$portfolio->img_name}}" class="form-control" name="name" id=""placeholder="Enter portfolio name">
      </div>
      <div class="form-group">
        <label for="">Description du portfolio</label>
        <input type="text" value="{{$portfolio->img_desc}}" class="form-control" name="desc" id="" placeholder="Enter Description">
      </div>
      <div class="form-group">
        <label for="">Path du portfolio</label>
        <input type="text" value="{{$portfolio->img_path}}" class="form-control" name="path" id="" placeholder="Enter Path">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  @endsection