@extends('layout.site')
@section('main_content')
    <h1>{{$record->name}}</h1>

    <div class="alert alert-info">
        <p>{{$record->id}}</p>
        <p>{{$record->email}}</p>
        <p>{{$record->name}}</p>
        <p>{{$record->textarea}}</p>
    </div>
@endsection
