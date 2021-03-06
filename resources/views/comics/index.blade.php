@extends('layouts.home')

@section('Main')

<div class="main">
    <a href="{{ route('comics.create') }}">
        <button id="current">add comic</button>
    </a>
    <div class="card_wrapper">
        @foreach ($comics as $key=>$item)
        <div class="flex_column">
            <div class="flex">
                <a href="{{ route('comics.edit',$item->id) }}">
                    <button class="button">Edit</button>
                </a>
                <form action="{{ route('comics.destroy',$item->id) }}" method="post">
                    @csrf
                    @method('delete')
    
                    <button type="submit" class="button">
                        Delete
                    </button>  
    
                </form>
            </div>
                <div class="card">
                    <a href="{{ route('comics.show',$item->id) }}">
                        <figure>
                            <img src={{ $item["thumb"] }} alt="">
                        </figure>
                        <h3>{{ $item["series"] }}</h3>
                    </a>
                </div>
        </div>
        @endforeach
    </div>
</div>

@endsection