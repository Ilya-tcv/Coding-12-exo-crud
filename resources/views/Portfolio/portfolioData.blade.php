@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;font-weight:bold">Portfolio changer</h1>
    <a href="{{route('portfolio.create')}}" class="btn btn btn-success text-center" style="margin-bottom:1em">Create</a>
</div>

<div class="container">
    {{-- //Portfolio --}}
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            ID
        </div>
        <div class="col-lg-2">
            NAME
        </div>
        <div class="col-lg-3">
            IMG PATH
        </div>
        <div class="col-lg-3">
            DESCRIPTION
        </div>
        <div class="col-lg-2"></div>
    </div>

    @foreach ($portfolios as $portfolio)
    <hr>
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            {{$portfolio->id}}
        </div>
        <div class="col-lg-2">
            {{$portfolio->img_name}}
        </div>
        <div class="col-lg-3">
            {{$portfolio->img_path}}
        </div>
        <div class="col-lg-3">
            {{$portfolio->img_desc}}
        </div>
        <div class="col-lg-2" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/portfolio/{{$portfolio->id}}/edit" class="btn btn-warning btn-sm" style="width: max-content;margin-bottom:5px">Edit</a>
            <a href="/11 - Exo-Crud/public/database/portfolio/{{$portfolio->id}}/destroy" class="btn btn-danger btn-sm" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection