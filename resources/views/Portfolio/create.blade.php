@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Portfolio create</h1>
</div>

<form class="container" action="{{route('portfolio.save')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du portfolio</label>
      <input type="text" class="form-control" name="name" id="" placeholder="Enter portfolio name">
      </div>
      <div class="form-group">
        <label for="">Description du portfolio</label>
        <input type="text" class="form-control" name="desc" id="" placeholder="Enter Description">
      </div>
      <div class="form-group">
        <label for="">Path de l'image</label>
        <input type="text" class="form-control" name="path" id="" placeholder="Enter Image Path">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  @endsection