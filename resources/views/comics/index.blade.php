@extends('layouts.home')

@section('Main')

<div class="main">
    <button id="current">current series</button>
    <div class="card_wrapper">
        @foreach ($comics as $key=>$item)
        <a href="/details/{{ $key }}">
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