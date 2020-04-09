@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;font-weight:bold">Team changer</h1>
    <a href="{{route('team.create')}}" class="btn btn btn-success text-center" style="margin-bottom:1em">Create</a>
</div>

<div class="container">
    {{-- //Team --}}
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            ID
        </div>
        <div class="col-lg-3">
            NAME
        </div>
        <div class="col-lg-3">
            JOB
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-3"></div>
    </div>

    @foreach ($teams as $team)
    <hr>
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            {{$team->id}}
        </div>
        <div class="col-lg-3">
            {{$team->name}}
        </div>
        <div class="col-lg-3">
            {{$team->job}}
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-3" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/team/{{$team->id}}/edit" class="btn btn-warning btn-sm" style="width: max-content;margin-bottom:5px">Edit</a>
            <a href="/11 - Exo-Crud/public/database/team/{{$team->id}}/destroy" class="btn btn-danger btn-sm" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection