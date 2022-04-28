@extends('layouts.home')

@section('Main')

<div class="create">
    <h1>Add a new comic</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
        @csrf
            <div class="form-group">
                <label class="form-label" for="title">Title</label>
                <input value="{{ old('title') }}" type="text" name="title" id="title" class="@error('title') is-invalid @enderror form-control" placeholder="Insert Comic's Title">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <textarea name="description" class="@error('description') is-invalid @enderror form-control" id="description" cols="30" rows="10" placeholder="Insert Comic's Description">{{ old('description') }}</textarea>

                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <input class="@error('thumb') is-invalid @enderror form-control" value="{{ old('thumb') }}" type="text" name="thumb" id="thumb" placeholder="Insert Comic's Thumb">
                
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="price">Price</label>
                <input class="@error('price') is-invalid @enderror form-control" value="{{ old('price') }}" type="text" name="price" id="price" placeholder="Insert Comic's Price">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="series">Series</label>
                <input class="@error('series') is-invalid @enderror form-control" value="{{ old('series') }}" type="text" name="series" id="series" placeholder="Insert Comic's Series">

                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <input class="@error('sale_date') is-invalid @enderror form-control" value="{{ old('sale_date') }}" type="text" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date">

                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="graphic novel" {{ old('type') == "graphic novel" ? "selected" : "" }}>Graphic Novel</option>
                    <option value="comic book" {{ old('type') == "comic book" ? "selected" : "" }}>Comic Book</option>
                </select>
            </div>

            <button id="add" type="submit">Add</button>

            {{-- lista errori sotto --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

        </form>
    </div>
</div>

@endsection