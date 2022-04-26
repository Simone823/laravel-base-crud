@extends('layouts.default')

@section('headeTilte', 'Aggiungi nuovo comic')

@section('mainContent')

    {{-- Form  --}}
    <form action="" method="">

        {{-- Titile --}}
        <label for="title" name="title">Titolo</label>
        <input type="text" name="title">

        {{-- Description --}}
        <label for="description" name="description">Descrizione</label>
        <input type="text" name="description">

        {{-- Thumb --}}
        <label for="thumb" name="thumb">Immagine</label>
        <input type="text" name="thumb">
        
        {{-- Price --}}
        <label for="price" name="price">Prezzo</label>
        <input type="text" name="price">

        {{-- Series --}}
        <label for="series" name="series">Collezzione</label>
        <input type="text" name="series">

        {{-- Sale date --}}
        <label for="sale_date">Data di vendita</label>
        <input type="text" name="sale_date">

        {{-- Type --}}
        <label for="type" name="type">Tipologia</label>
        <input type="text" name="type">

        {{-- Submit --}}
        <button type="submit">Aggiungi</button>
    </form>

@endsection