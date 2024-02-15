@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">

        <div class="card">
            <h6>Nome del fumetto:{{$comics->name}}</h6>
            <h6>Data di pubblicazione:{{$comics->publication_date}}</h6>
            <h6>Prezzo:{{$comics->price}}€</h6>
            <h6>Disponibile:{{$comics->avaible ? 'Sì' : 'No' }}</h6>
        </div>

    </div>
@endsection
