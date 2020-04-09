@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Testimonial create</h1>
</div>

<form class="container" action="{{route('testimonial.save')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du Commentateur</label>
      <input type="text" class="form-control" name="name" id="" placeholder="Enter user name">
      </div>
      <div class="form-group">
        <label for="">Job</label>
        <input type="text" class="form-control" name="job" id="" placeholder="Enter Job">
      </div>
      <div class="form-group">
        <label for="">Texte</label>
        <input type="text" class="form-control" name="text" id="" placeholder="Enter Text">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  @endsection