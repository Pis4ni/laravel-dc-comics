@extends('layouts.app')

@section('content')

<div class="container ">


    <h1 class="text-light my-4">
        Crea Nuovo comic
    </h1>

    <form action="{{route('comics.store')}}" method="POST" class="row g-4">
        @csrf

        <div class="col-3">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="col-3">
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        <div class="col-3">
            <label for="thumb">Immagine</label>
            <input type="text" id="thumb" name="thumb" class="form-control">
        </div>
        <div class="col-3">
            <label for="series">Series</label>
            <input type="text" id="series" name="series" class="form-control">
        </div>
        <div class="col-3">
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01">
        </div>
        <div class="col-3">
            <label for="sale_date">Data di Vendita</label>
            <input type="date" id="sale_date" name="sale_date" class="form-control">
        </div>
        {{-- sostituire poi con una select!! --}}
        <div class="col-3">
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" class="form-control">
        </div>
        <button type="submit">creaaa</button>
        <a href="{{route('comics.index')}}" class="btn btn-outline-success">Crea</a>
    </form>
</div>

@endsection