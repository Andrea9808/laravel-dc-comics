@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <h1>Comics:{{ count($comics) }}</h1>
        @foreach ($comics as $comic)
            <div class="card">
                <a href="{{ route('comic.show', $comic->id) }}">
                    <h6>{{$comic->name}}</h6>
                </a>
            </div>
        @endforeach
    </div>
@endsection
