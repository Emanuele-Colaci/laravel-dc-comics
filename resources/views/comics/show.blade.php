@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border border-4 my-3">
            <div class="col-12 mt-4 mb-5">
                <div class="card-header d-flex justify-content-center align-items-center text-center">
                    <h2 class="fs-4 fw-bold py-2">{{ $comic->series }}</h2>
                </div>
                <div class="row">
                    <div class="col-4 d-flex justify-content-center">
                        <img src="{{ $comic->thumb }}" alt="banner-image" class="border border-black border-5">
                    </div>
                    <div class="col-8 d-flex flex-wrap align-items-center">
                        <div>
                            <h3 class="fw-bold py-2">Description</h3>
                            <hr>
                            <p>{{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 my-3 px-5">
                        <h5 class="fw-bold py-2">Artists</h5>
                        <hr>
                        <p>{{ $comic->artists }}</p>
                    </div>
                    <div class="col-6 my-3 px-5">
                        <h5 class="fw-bold py-2">Writers</h5>
                        <hr>
                        <p>{{ $comic->writers }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection