@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Testimonial edit</h1>
</div>

<form class="container" action="/11 - Exo-Crud/public/database/testimonials/{{$testimonial->id}}/update" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du Commentateur</label>
      <input type="text" value="{{$testimonial->name}}" class="form-control" name="name" id=""placeholder="Enter testimonial user">
      </div>
      <div class="form-group">
        <label for="">Job</label>
        <input type="text" value="{{$testimonial->job}}" class="form-control" name="job" id="" placeholder="Enter Job">
      </div>
      <div class="form-group">
        <label for="">Texte</label>
        <input type="text" value="{{$testimonial->text}}" class="form-control" name="text" id="" placeholder="Enter text">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  @endsection