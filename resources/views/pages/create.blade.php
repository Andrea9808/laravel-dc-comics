@extends('layouts.main-layout')
@section('head')
    <title>Creazione nuova card fumetto</title>
@endsection
@section('content')
    <div class="container create">

        <div class="card">
            <h1>CREAZIONE DEL NUOVO FUMETTO</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comic.store')}}" method="POST">

                @csrf
                @method('POST')

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nome del fumetto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="publication_date" class="col-sm-2 col-form-label">Data di pubblicazione</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="publication_date" name="publication_date">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Prezzo in €</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="avaible" class="col-sm-2 col-form-label">Disponibilità</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="avaible" name="avaible">
                    </div>
                  </div>
                  <input type="submit" value="CREA">
            </form>

        </div>

    </div>
@endsection
