@extends('layouts.app')

@section('content')

<div class="container ">


    <div class="row">
        {{-- img --}}
        <div class="col-4">
            <img src="" alt="">
        </div>
        {{-- form --}}
        <div class="col-8">
            {{-- title --}}
            <h2>
                {{$comic->id}} - {{$comic->title}}
            </h2>
            <h4>
                {{$comic->series}}
            </h4>

            <span>
                {{$comic->price}}
            </span>

            <span>
                {{$comic->sale_date}}
            </span>
        </div>
    </div>
</div>

@endsection