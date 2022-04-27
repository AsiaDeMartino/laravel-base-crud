@extends('layouts.home')

@section("Main")
<div class="mainDetails">
    <div class="blue">
        <figure>
            <img src="{{ $comic["thumb"] }}" alt="">
            <div class="thumb">
                <div class="comic">COMIC BOOK</div>
                <div class="gallery">VIEW GALLERY</div>
            </div>
        </figure>
    </div>
    <div class="content">
        <div class="col-9">
            <h1>{{ $comic["title"] }}</h1>
            <div class="price">
                <div class="col-8">
                    <span><span class="green">U.S Price: </span> $19,99</span>
                    <span class="green">AVAILABLE</span>
                </div>
                <div class="col-4">
                    <span>Check Availability</span>
                    <span class="triangolo">&#9660</span>
                </div>
            </div>
            <p>{{ $comic["description"] }}</p>
        </div>
        <div class="col-3">
                <h2>Info</h2>
                <div class="info">
                    <span>Series:</span>
                    <p>
                        <a style="text-transform:uppercase" href="/">{{ $comic["series"] }}</a>
                    </p>
                </div>
                <div class="info">
                    <span>U.S. Price:</span>
                    <p>{{ $comic["price"] }}</p>
                </div>
                <div class="info">
                    <span>On Sale Date:</span>
                    <p>{{ $comic["sale_date"] }}</p>
                </div>
                <div class="info">
                    <span>Type:</span>
                    <p>{{ $comic["type"] }}</p>
                </div>
            </div>
    </div>
</div>
@endsection