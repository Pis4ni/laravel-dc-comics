@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="my-4 text-light">
        Tabella Elementi db.
    </h1>
    
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Creation date</th>
                    <th scope="col">Last Update</th>
                </tr>
            </thead>
                <tbody>

                    @foreach ($comics as $comic)
                    
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->created_at}}</td>
                        <td>{{$comic->updated_at}}</td>
                    </tr>   

                    @endforeach
                
                </tbody>

        </table>

    </div>

@endsection