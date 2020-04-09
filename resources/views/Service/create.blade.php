@extends('database.index')

@section('content')
<div style="">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Service create</h1>
</div>

<form class="container" action="{{route('service.save')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Nom du service</label>
      <input type="text" class="form-control" name="name" id="" placeholder="Enter service name">
      </div>
      <div class="form-group">
        <label for="">Description du service</label>
        <input type="text" class="form-control" name="desc" id="" placeholder="Enter Description">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  @endsection