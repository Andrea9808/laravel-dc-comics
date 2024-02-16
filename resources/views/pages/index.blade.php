@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container index">

        <h1>Comics:{{ count($comics) }}</h1>

        <a href="{{route('comic.create')}}">Inserisci nuovi fumetti</a><br>

        @foreach ($comics as $comic)

            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('comic.show', $comic->id) }}">
                            <h6>{{$comic->name}}</h6>
                        </a>
                    </div>

                    <div class="col-6">
                        <form action="{{route('comic.destroy', $comic->id)}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <input  type="submit" value="X">
                        </form>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
