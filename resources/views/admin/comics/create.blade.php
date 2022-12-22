@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Add a new Comic</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type comic title" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add title here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="srcHlper">
            <small id="srcHlper" class="text-muted">Add src here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="titleHlper">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Type comic title" aria-describedby="titleHlper">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="" aria-describedby="titleHlper">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="titleHlper">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection