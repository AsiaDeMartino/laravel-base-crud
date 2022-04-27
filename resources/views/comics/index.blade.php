@extends('layouts.home')

@section('Main')

<div class="main">
    <a href="{{ route('comics.create') }}">
        <button id="current">add comic</button>
    </a>
    <div class="card_wrapper">
        @foreach ($comics as $key=>$item)
        <div class="flex">
            <a href="{{ route('comics.edit',$key +1) }}">
                <button class="button">Edit</button>
            </a>
                <div class="card">
                    <a href="{{ route('comics.show',$key + 1) }}">
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