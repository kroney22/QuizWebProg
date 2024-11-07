@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles by {{ $writer->name }}</h1>
        <p>{{ $writer->bio }}</p>
        <div class="articles">
            @foreach($writer->articles as $article)
                <div class="article">
                    <h2>{{ $article->title }}</h2>
                    <p>Posted on {{ $article->posted_at }}</p>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="/article/{{ $article->id }}">Read more...</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
