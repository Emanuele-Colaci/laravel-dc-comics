@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create New Comic</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <form action=" {{ Route('comics.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <!-- Titolo -->
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Descrizione -->
                                <label class="control-label my-3">Descrizione</label>
                                <textarea name="description" id="description" placeholder="Inserisci la descrizione" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Thumb -->
                                <label class="control-label my-3">Thumb</label>
                                <input type="text" name="thumb" id="thumb" placeholder="Inserisci la thumb" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Cover Image -->
                                <label class="control-label my-3">Cover Image</label>
                                <input type="text" name="cover_image" id="cover_image" placeholder="Inserisci la cover image" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Thumb 2 -->
                                <label class="control-label my-3">Thumb 2</label>
                                <input type="text" name="thumb2" id="thumb2" placeholder="Inserisci la thumb 2" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Prezzo -->
                                <label class="control-label my-3">Prezzo</label>
                                <input type="text" name="price" id="price" placeholder="Inserisci il prezzo" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Serie -->
                                <label class="control-label my-3">Serie</label>
                                <input type="text" name="series" id="series" placeholder="Inserisci la serie" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Data di Rilascio -->
                                <label class="control-label my-3">Data di Rilascio</label>
                                <input type="date" name="sale_date" id="sale_date" placeholder="Inserisci la data di rilascio" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Tipo -->
                                <label class="control-label my-3">Tipo</label>
                                <input type="text" name="type" id="type" placeholder="Inserisci il tipo" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <!-- Artisti -->
                                <label class="control-label my-3">Artisti</label>
                                <textarea name="artists" id="artists" placeholder="Inserisci gli artisti" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Scrittori -->
                                <label class="control-label my-3">Scrittori</label>
                                <textarea name="writers" id="writers" placeholder="Inserisci gli scrittori" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection