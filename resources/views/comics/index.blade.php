@extends('layouts.home')

@section('Main')

<div class="main">
    <a href="{{ route('comics.create') }}">
        <button id="current">add comic</button>
    </a>
    <div class="card_wrapper">
        @foreach ($comics as $key=>$item)
        <a href="{{ route('comics.show',$key + 1) }}">
            <div class="card">
                <figure>
                    <img src={{ $item["thumb"] }} alt="">
                </figure>
                <h3>{{ $item["series"] }}</h3>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection