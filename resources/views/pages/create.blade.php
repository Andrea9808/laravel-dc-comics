@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">

        <div class="card">
            <h1>CREAZIONE DEL NUOVO FUMETTO</h1>
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
                        <input type="text" class="form-control" id="publication_date" name="publication_date">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Prezzo in €</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="avaible" class="col-sm-2 col-form-label">Disponibilità</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="avaible" name="avaible">
                    </div>
                  </div>
            </form>

            <input type="submit" value="CREA">
        </div>

    </div>
@endsection
