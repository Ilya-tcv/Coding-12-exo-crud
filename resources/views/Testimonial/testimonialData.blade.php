@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;font-weight:bold">Testimonials changer</h1>
    <a href="{{route('testimonial.create')}}" class="btn btn btn-success text-center" style="margin-bottom:1em">Create</a>
</div>

<div class="container">
    {{-- //Testimonial --}}
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            ID
        </div>
        <div class="col-lg-2">
            NAME
        </div>
        <div class="col-lg-2">
            JOB
        </div>
        <div class="col-lg-4">
            TEXT
        </div>
        <div class="col-lg-2"></div>
    </div>

    @foreach ($testimonials as $testimonial)
    <hr>
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            {{$testimonial->id}}
        </div>
        <div class="col-lg-2">
            {{$testimonial->name}}
        </div>
        <div class="col-lg-2">
            {{$testimonial->job}}
        </div>
        <div class="col-lg-4">
            {{$testimonial->text}}
        </div>
        <div class="col-lg-2" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/testimonials/{{$testimonial->id}}/edit" class="btn btn-warning btn-sm" style="width: max-content;margin-bottom:5px">Edit</a>
            <a href="/11 - Exo-Crud/public/database/testimonials/{{$testimonial->id}}/destroy" class="btn btn-danger btn-sm" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection