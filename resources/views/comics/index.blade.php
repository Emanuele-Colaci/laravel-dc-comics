@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Comics</h1>
                </div>
            </div>
            <div class="row my-3">
                @foreach($comics as $comic)
                <div class="col-4 ">
                    <div class="card p-3">
                            <h3>Ttolo: {{ $comic->title }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection