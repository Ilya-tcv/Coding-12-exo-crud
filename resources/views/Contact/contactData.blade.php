@extends('database.index')

@section('content')
<div class="text-center">
    <h1 class="text-center" style="color:white;margin-top:1em;font-weight:bold">Mes Messages</h1>
</div>

<div class="container">
    {{-- //Messages --}}
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            ID
        </div>
        <div class="col-lg-2">
            NAME
        </div>
        <div class="col-lg-3">
            MAIL
        </div>
        <div class="col-lg-2">
            SUBJECT
        </div>
        <div class="col-lg-3">
            MESSAGE
        </div>
        <div class="col-lg-1">
        </div>
    </div>

    @foreach ($contacts as $contact)
    <hr>
    <div class="row" style="display:flex;color:white">
        <div class="col-lg-1">
            {{$contact->id}}
        </div>
        <div class="col-lg-2">
            {{$contact->name}}
        </div>
        <div class="col-lg-3">
            {{$contact->email}}
        </div>
        <div class="col-lg-2">
            {{$contact->subject}}
        </div>
        <div class="col-lg-3">
            {{$contact->message}}
        </div>
        <div class="col-lg-1" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <a href="/11 - Exo-Crud/public/database/messages/{{$contact->id}}/destroy" class="btn btn-danger btn-sm" style="width: max-content;">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection