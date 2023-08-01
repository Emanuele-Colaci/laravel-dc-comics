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
                    <div class="card p-3 mb-3">
                            <a class="text-danger text-center my-3" href="{{ Route('comics.show', $comic->id) }}">
                                <img class="mb-3" src="{{ $comic->thumb }}" alt="">
                                <h5>Titolo: {{ $comic->title }}</h5>
                            </a>
                            <a href="{{ Route('comics.edit', $comic->id) }}" class="btn btn-success mb-3" type="submit">Modifica</a>
                            <form action="{{ Route('comics.show', $comic->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler elliminare il fumetto?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Ellimina</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection