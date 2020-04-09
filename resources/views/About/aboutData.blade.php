@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">About changer</h1>
    <a href="{{route('about.create')}}" class="btn btn-lg btn-success text-center">Create</a>
</div>

<div class="container">
    {{-- //about img --}}
    @foreach ($abouts as $about)
    <hr>
    <div class="row" style="display:flex">
        <div class="col-lg-8">
            <img src="{{$about->img_path}}" style="border:solid 1px white" alt="">
        </div>
        <div class="col-lg-3" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/about/{{$about->id}}/edit" class="btn btn-warning btn-lg" style="width: max-content;margin-bottom:5px">Edit</a>
            <a href="/11 - Exo-Crud/public/database/about/{{$about->id}}/destroy" class="btn btn-danger btn-lg" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection