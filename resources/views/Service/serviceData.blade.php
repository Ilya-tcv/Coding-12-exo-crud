@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;font-weight:bold">Service changer</h1>
    <a href="{{route('service.create')}}" class="btn btn btn-success text-center" style="margin-bottom:0.5em">Create</a>
</div>

<div class="container">
    {{-- //Service --}}
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            ID
        </div>
        <div class="col-lg-3">
            NAME
        </div>
        <div class="col-lg-4">
            DESCRIPTION
        </div>
        <div class="col-lg-4"></div>
    </div>

    @foreach ($services as $service)
    <hr>
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            {{$service->id}}
        </div>
        <div class="col-lg-3">
            {{$service->name}}
        </div>
        <div class="col-lg-4">
            {{$service->desc}}
        </div>
        <div class="col-lg-4" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/services/{{$service->id}}/edit" class="btn btn-warning btn-sm" style="width: max-content;margin-bottom:5px">Edit</a>
            <a href="/11 - Exo-Crud/public/database/services/{{$service->id}}/destroy" class="btn btn-danger btn-sm" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection