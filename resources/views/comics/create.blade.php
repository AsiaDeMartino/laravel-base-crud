@extends('layouts.home')

@section('Main')

<div class="create">
    <h1>Add a new comic</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">

            <div>
                <label for="title">Title</label>
                <input type="text" name="tite" id="title" placeholder="Insert Comic's Title">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Insert Comic's Description"></textarea>
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" placeholder="Insert Comic's Thumb">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Insert Comic's Price">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" placeholder="Insert Comic's Series">
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date">
            </div>

            <div>
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="graphic novel">Graphic Novel</option>
                    <option value="comic book">Comic Book</option>
                </select>
            </div>

            <button id="add" type="submit">Add</button>

        </form>
    </div>
</div>

@endsection