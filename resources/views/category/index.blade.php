@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <ul>
            @foreach($categories as $category)
                <li><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
