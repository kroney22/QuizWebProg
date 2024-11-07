@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Writers</h1>
        <ul>
            @foreach($writers as $writer)
                <li><a href="/writers/{{ $writer->id }}">{{ $writer->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
