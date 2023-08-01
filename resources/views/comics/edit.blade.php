@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica fumetto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <!-- Titolo -->
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="series" id="series" placeholder="Inserisci il titolo" class="form-control" value="{{ $comic->series }}">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Thumb -->
                                <label class="control-label my-3">Thumb</label>
                                <input type="text" name="thumb" id="thumb" placeholder="Inserisci la thumb" class="form-control" value="{{ $comic->thumb }}">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Descrizione -->
                                <label class="control-label my-3">Descrizione</label>
                                <textarea name="description" id="description" placeholder="Inserisci la descrizione" cols="30" rows="10" class="form-control">{{ $comic->description }}</textarea>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Artisti -->
                                <label class="control-label my-3">Artisti</label>
                                <textarea name="artists" id="artists" placeholder="Inserisci gli artisti" cols="30" rows="3" class="form-control">{{ $comic->artists }}</textarea>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Scrittori -->
                                <label class="control-label my-3">Scrittori</label>
                                <textarea name="writers" id="writers" placeholder="Inserisci gli scrittori" cols="30" rows="3" class="form-control">{{ $comic->writers }}</textarea>
                            </div>
                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Modifica</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection