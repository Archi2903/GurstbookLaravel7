@extends('layout.site')
@section('title')
    Upload Form
@endsection
@section('main_content')
    <form class="needs-validation " method="post" action="{{route('uploadRecordSubmit')}}">
        @csrf
        <h1>User {{$record->name}}</h1>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$record->name}}"
                       placeholder="Name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" value="{{$record->email}}"
                           placeholder="adress@mail.com"
                           required>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="record">Record</label>
            <textarea class="form-control" id="record" name="record" value="{{$record->textarea}}"
                      placeholder="Write your record"
                      required></textarea>
        </div>
        <button class="btn btn-dark" type="submit">Update record</button>
    </form>
@endsection
