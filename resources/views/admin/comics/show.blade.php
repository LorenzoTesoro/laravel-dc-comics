@extends('layouts.app')

@section('content')

<div class="container py-5 bg-primary mt-3">
    <div class="d-flex gap-4 text-white">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="details">
            <h1> Title: {{$comic->title}}</h1>
            <p> Description: {{$comic->description}}</p>
            <div>Price: {{$comic->price}}</div>
            <div>Series: {{$comic->series}}</div>
            <div>Sale_date: {{$comic->sale_date}}</div>
            <div>Type: {{$comic->type}}</div>
        </div>
    </div>
</div>

@endsection