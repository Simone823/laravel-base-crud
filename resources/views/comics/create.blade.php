@extends('layouts.default')

@section('headeTilte', 'Aggiungi nuovo comic')

@section('mainContent')

    {{-- Form  --}}
    <form action="" method="">

        {{-- Titile --}}
        <label for="title" id="title" name="title">Titolo</label>
        <input type="text" id="title" name="title">

        {{-- Description --}}
        <label for="description" id="description" name="description">Descrizione</label>
        <input type="text"id="description"  name="description">

        {{-- Thumb --}}
        <label for="thumb" id="thumb" name="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb">
        
        {{-- Price --}}
        <label for="price" id="price" name="price">Prezzo</label>
        <input type="text" id="price" name="price">

        {{-- Series --}}
        <label for="series" id="series" name="series">Collezzione</label>
        <input type="text" id="series" name="series">

        {{-- Sale date --}}
        <label for="sale_date" id="sale_date" name="sale_date">Data di vendita</label>
        <input type="date" id="sale_date" name="sale_date">

        {{-- Type --}}
        <label for="type" id="type" name="type">Tipologia</label>
        <input type="text" id="type" name="type">

        {{-- Submit --}}
        <button type="submit">Aggiungi</button>
    </form>

@endsection