@extends('layouts.home')

@section('Main')

<div class="create">

    <h1>Add a new comic</h1>
    <div class="container">
        <form action="{{ route('comics.update',$comic->id) }}" method="post">
        @csrf
        @method('put')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $comic->title }}" placeholder="Insert Comic's Title">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Insert Comic's Description">
                    {{ $comic->description }}
                </textarea>
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}" placeholder="Insert Comic's Thumb">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ $comic->price }}" placeholder="Insert Comic's Price">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ $comic->series }}" placeholder="Insert Comic's Series">
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" placeholder="Insert Comic's Sale Date">
            </div>

            <div>
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="graphic novel" {{ $comic->type == "graphic novel" ? "selected" : "" }}>Graphic Novel</option>
                    <option value="comic book" {{ $comic->type == "comic book" ? "selected" : "" }}>Comic Book</option>
                </select>
            </div>

            <button id="add" type="submit">Add</button>

        </form>
    </div>
</div>

@endsection