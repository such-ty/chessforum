@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text-center">Benutzer '{{$user->name}}' bearbeiten</h1>
    <form method="POST" action="/user/{{$user->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email adress</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
