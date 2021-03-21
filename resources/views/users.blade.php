@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text.center">Übersicht Benutzer</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a class="btn btn-primary" href="/user/{{$user->id}}">Bearbeiten</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
