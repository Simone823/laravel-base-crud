@extends('layouts.default')

@section('headeTilte', 'Aggiungi nuovo comic')

@section('mainContent')

    {{-- Form  --}}
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        {{-- Titile --}}
        <label for="title" id="title" name="title">Titolo</label>
        <input type="text" id="title" name="title" placeholder="Inserisci il titolo">

        {{-- Description --}}
        <label for="description" id="description" name="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione" resize></textarea>

        {{-- Thumb --}}
        <label for="thumb" id="thumb" name="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb" placeholder="Url Immagine">
        
        {{-- Price --}}
        <label for="price" id="price" name="price">Prezzo</label>
        <input type="text" id="price" name="price" value="$">

        {{-- Series --}}
        <label for="series" id="series" name="series">Collezione</label>
        <input type="text" id="series" name="series" placeholder="Nome collezione">

        {{-- Sale date --}}
        <label for="sale_date" id="sale_date" name="sale_date">Data di vendita</label>
        <input type="date" id="sale_date" name="sale_date">

        {{-- Type --}}
        <label for="type" id="type" name="type">Tipologia</label>
        <select name="type" id="type">
            <option value="" hidden>Seleziona una tipologia</option>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>

        {{-- Submit --}}
        <button type="submit">Aggiungi</button>
    </form>

@endsection