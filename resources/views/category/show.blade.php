@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="articles">
            @foreach($category->articles as $article)
                <div class="article">
                    <h2>{{ $article->title }}</h2>
                    <p>Posted on {{ $article->posted_at }} by {{ $article->writer->name }}</p>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="/article/{{ $article->id }}">Read more...</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
