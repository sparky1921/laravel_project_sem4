@extends('master')

@section('content')
    @foreach ($articles as $article)
        ID: {{ $article->id }}<br>
        Name: {{ $article->name }}<br>
        Body: {{ $article->body }}<br>
        Author ID: {{ $article->author_id }}<br><br>
    @endforeach
@endsection
