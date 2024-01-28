@extends('layouts.main')

@section('main')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="Copertina di {{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="blue-card-text">{{ $comic['price'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
