@extends('layout.app')

@section('content')
<h1 class="text-center">Artikel</h1>

<form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
</form>

<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            @foreach($articles as $article)
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$article->title}}</h5>
                    <button @click="editArticle({{$article->ipd}})" class="btn btn-warning btn-sm">Bearbeiten</button>
                </div>
                <p class="mb-1">{{$article->lead}}</p>
                <small>{{$article->content}}</small>
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-md-12">
        <a href="/article" class="btn btn-success col-md-12">Neuen Artikel erstellen</a>
    </div>
</div>

</body>
</html>
@endsection
